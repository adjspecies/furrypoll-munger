import psycopg2
import logging

class Results2013():
    def __init__(self):
        self.logger = logging.getLogger(__name__)
        self.db = psycopg2.connect("dbname=furrypoll2013 user=vagrant")

    def getResults(self):
        self.logger.info('Beginning 2013')
        cur = self.db.cursor()
        cur.execute('select * from survey_surveyresponse')
        numRows = cur.rowcount
        self.logger.info('Processing %s results', numRows)
        for x in range(0, numRows):
            row = cur.fetchone()
            yield self.resultsFromRow(row)
        cur.close()
        self.db.close()
        self.logger.info('Done with 2013')

    def resultsFromRow(self, surveyResponse):
        cur = self.db.cursor()
        cur.execute('''select question_id, value from survey_answer
            where survey_response_id = %s''', (surveyResponse[0],))
        row = cur.fetchall()
        results = {
            'year': 2013,
            'birthdate': self.getBirthDate(row),
            'biosex': self.getBiosex(row),
            'gender': self.getGender(row),
            'orientation': self.getOrientation(row),
            'country': self.getCountry(row),
            'state': self.getState(row),
            'religion': self.getReligion(row),
            'politics_social': self.rawResult(row, 15),
            'politics_economic': self.rawResult(row, 14),
            'occupation': self.getOccupation(row),
            'education': self.getEducation(row),
            'relationship': self.getRelationship(row),
            'partner_is_furry': self.rawResult(row, 100) == 'yes',
            'polyamorous_romantic': self.getPoly(row, 101),
            'polyamorous_sexual': self.getPoly(row, 102),
            'howfurry': self.rawResult(row, 19),
            'years_known_fandom': self.floatResult(row, 20),
            'years_as_furry': self.floatResult(row, 21),
            'furries_known': self.intResult(row, 22),
            'furries_known_in_person': self.intResult(row, 23),
            'nonfurry_response': self.getNonFurryResponse(row),
            'nonfurry_response_personal': self.getNonFurryResponsePersonal(row),
            'nonfurry_accuracy': self.getNonFurryAccuracy(row),
            'rp_as_different_gender': self.getRPAsDiffGender(row),
            'seximportance_overall': self.intResult(row, 30),
            'seximportance_personal': self.intResult(row, 31),
            'seximportance_others': self.intResult(row, 32),
            'seximportance_public': self.intResult(row, 33),
            'opinion_artwork': self.intResult(row, 50),
            'opinion_writing': self.intResult(row, 51),
            'opinion_conventions': self.intResult(row, 52),
            'opinion_fursuiting': self.intResult(row, 53),
            'opinion_plushophilia': self.intResult(row, 54),
            'opinion_zoophilia': self.intResult(row, 55),
            'opinion_online_communities': self.intResult(row, 56),
            'importance_artwork': self.intResult(row, 58),
            'importance_writing': self.intResult(row, 59),
            'importance_online_communities': self.intResult(row, 60),
            'importance_muds': self.intResult(row, 61),
            'importance_conventions': self.intResult(row, 62),
            'importance_fursuiting': self.intResult(row, 63),
            'how_much_human': self.getHowHuman(row),
        }

        self.setRace(results, row)
        self.setWhoKnows(results, row)
        self.setHowOften(results, row)
        self.setSelfDescribed(results, row)
        self.setWebsites(results, row)
        self.setPsychographic(results, row)
        self.setSpecies(results, row)

        cur.close()

        return results

    def rawResult(self, row, index):
        try:
            return filter(lambda x: x[0] == index, row)[0][1]
        except:
            return None

    def floatResult(self, row, index):
        try:
            return float(self.rawResult(row, index))
        except:
            return None

    def intResult(self, row, index):
        try:
            return int(self.rawResult(row, index))
        except:
            return None

    def getBirthDate(self, surveyResponse):
        birthdate = 0
        results = filter(lambda x: x[0] == 5, surveyResponse)
        for result in results:
            result = result[1]
            if len(result) > 0:
                if result[0] == 'y':
                    birthdate += float(result[4:])
                elif result[0] == 'm':
                    birthdate += float(result[5:])/12 - 1/24
        if birthdate != 0:
            return birthdate
        else:
            return None

    def getBiosex(self, surveyResponse):
        try:
            values = ['male', 'female', 'other']
            result = filter(lambda x: x[0] == 6 and x[1] in values,
                            surveyResponse)[0]
            return {
                'male': 'Male',
                'female': 'Female',
                'other': 'Other',
            }[result[1]]
        except:
            return None

    def getGender(self, surveyResponse):
        try:
            values = ['male', 'mostly_male', 'both', 'mostly_female', 'female',
                      '_other_']
            result = filter(lambda x: x[0] == 7 and x[1] in values,
                            surveyResponse)[0]
            return {
                'male': 'Male, completely',
                'mostly_male': 'Male, predominately',
                'both': 'Equal parts male and female',
                'mostly_female': 'Female, predominately',
                'female': 'Female, completely',
            }[result[1]]
        except:
            return None

    def getOrientation(self, surveyResponse):
        try:
            values = ['kinsey_%s' % x for x in range(0, 7)] + \
                ['pansexual', 'asexual']
            result = filter(lambda x: x[0] == 8 and x[1] in values,
                            surveyResponse)[0]
            return {
                'kinsey_0': 'Completely heterosexual',
                'kinsey_1': 'Mostly heterosexual',
                'kinsey_2': 'Bisexual, leaning heterosexual',
                'kinsey_3': 'Bisexual',
                'kinsey_4': 'Bisexual, leaning homosexual',
                'kinsey_5': 'Mostly homosexual',
                'kinsey_6': 'Completely homosexual',
                'pansexual': 'Pansexual',
                'asexual': 'Asexual',
            }[result[1]]
        except:
            return None
    
    def getCountry(self, surveyResponse):
        try:
            return filter(
                lambda x: x[0] == 9 and x[1].lower() == x[1] and x[1] != 'zz',
                surveyResponse)[0][1]
        except:
            return None

    def getState(self, surveyResponse):
        try:
            return filter(
                lambda x: x[0] == 9 and x[1].upper() == x[1] and x[1] != 'zz',
                surveyResponse)[0][1]
        except:
            return None

    def setRace(self, results, surveyResponse):
        answers = [x[1] for x in filter(lambda x: x[0] == 11, surveyResponse)]
        results['race_white'] = 'white' in answers
        results['race_black'] = 'black' in answers
        results['race_hispanic'] = 'hispanic' in answers
        results['race_asian'] = 'asian' in answers
        results['race_native'] = 'native_american_pacific_islander' in answers

    def getReligion(self, surveyResponse):
        try:
            values = ['christian_catholic', 'christian_protestant',
                      'christian_other', 'muslim', 'hindu', 'jewish', 'pagan',
                      'buddhist', 'shinto', 'agnostic', 'atheist', '_other_']
            result = filter(lambda x: x[0] == 12 and x[1] in values,
                            surveyResponse)[0]
            return {
                'christian_catholic': 'Christian, Catholic',
                'christian_protestant': 'Christian, Protestant',
                'christian_other': 'Christian, Other',
                'muslim': 'Muslim',
                'hindu': 'Hindu',
                'jewish': 'Jewish',
                'pagan': 'Pagan',
                'buddhist': 'Buddhist',
                'shinto': 'Shinto',
                'agnostic': 'Agnostic',
                'atheist': 'Atheist',
                '_other_': 'Other',
            }[result[1]]
        except:
            return None

    def getOccupation(self, surveyResponse):
        try:
            values = ['student', 'administrative', 'government_armed_service',
                      'sales_support', 'tech_IT', 'professional', 'service',
                      'creative_infandom', 'creative_outfandom', 'retired',
                      'unemployed', 'none', '_other_']
            result = filter(lambda x: x[0] == 16 and x[1] in values,
                            surveyResponse)[0]
            return {
                'student': 'Student',
                'administrative': 'Administrative',
                'government_armed_service': 'Government/Armed Service',
                'sales_support': 'Sales/Support',
                'tech_IT': 'Technical/IT',
                'professional': 'Professional',
                'service': 'Service',
                'creative_infandom': 'Creative or other within the furry fandom',
                'creative_outfandom': 'Creative or other outside the furry fandom',
                'retired': 'Retired',
                'unemployed': 'Unemployed',
                'none': 'None',
                '_other_': 'Other',
            }[result[1]]
        except:
            return None

    def getEducation(self, surveyResponse):
        try:
            values = ['some_highschool', 'ongoing_highschool',
                      'graduated_highschool', 'some_university',
                      'ongoing_university', 'graduated_university',
                      'some_postcollege', 'ongoing_postcollege',
                      'graduated_postcollege', 'advanced_degree', '_other_']
            result = filter(lambda x: x[0] == 17 and x[1] in values,
                            surveyResponse)[0]
            return {
                'some_highschool': 'Some high/secondary school',
                'ongoing_highschool': 'High/secondary school (ongoing)',
                'graduated_highschool': 'High/secondary school graduate',
                'some_university': 'Some college/university',
                'ongoing_university': 'College/university (ongoing)',
                'graduated_unversity': 'College/university graduate',
                'some_postcollege': 'Some postcollege',
                'ongoing_postcollege': 'Postcollege (ongoing)',
                'graduated_postcollege': 'Postcollege graduate',
                'advanced_degree': 'Advance degree',
                '_other_': 'Other',
            }[result[1]]
        except:
            return None

    def getRelationship(self, surveyResponse):
        try:
            values = ['single', 'casual_relationship', 'married',
                      'long_term_relationship', '_other_']
            result = filter(lambda x: x[0] == 18 and x[1] in values,
                            surveyResponse)[0]
            return {
                'single': 'Single',
                'casual_relationship': 'Casual relationship',
                'married': 'Marriage or other permanent commitment',
                'long_term_relationship': 'Long-term relationship',
                '_other_': 'Other',
            }[result[1]]
        except:
            return None

    def getPoly(self, surveyResponse, index):
        try:
            values = ['open', 'closed', '_other_']
            result = filter(lambda x: x[0] == index and x[1] in values,
                            surveyResponse)[0]
            return {
                'open': 'Open',
                'closed': 'Closed',
                '_other_': 'Other',
            }[result[1]]
        except:
            return None

    def setWhoKnows(self, results, surveyResponse):
        answers = [x[1] for x in filter(lambda x: x[0] == 24, surveyResponse)]
        results['whoknows_nobody'] = 'no_one' in answers
        results['whoknows_family'] = 'immediate_family' in answers
        results['whoknows_SO'] = 'significant_other' in answers
        results['whoknows_furryfriends'] = 'furry_friends' in answers
        results['whoknows_bestfriends'] = 'best_nonfurry_friends' in answers
        results['whoknows_closerfriends'] = 'closer_nonfurry_friends' in answers
        results['whoknows_friends'] = 'most_nonfurry_friends' in answers
        results['whoknows_coworkers'] = 'coworkers' in answers
        results['whoknows_commonknowledge'] = 'common_knowledge' in answers

    def getNonFurryResponse(self, surveyResponse):
        try:
            result = filter(lambda x: x[0] == 25, surveyResponse)[0]
            return {
                '7': 'Extremely positively',
                '6': 'Positively',
                '5': 'Slightly positively',
                '4': 'Ambivalently',
                '3': 'Slightly negatively',
                '2': 'Negatively',
                '1': 'Extremely negatively',
                'no_knowledge': 'They have no knowledge',
            }[result[1]]
        except:
            return None

    def getNonFurryResponsePersonal(self, surveyResponse):
        try:
            result = filter(lambda x: x[0] == 26, surveyResponse)[0]
            return {
                'no': 'No',
                'yes_positive': 'Yes, they respond more positively',
                'yes_negative': 'Yes, they respond more negatively',
                'mixed': 'The reaction is mixed; some respond more ' +
                         'positively and some more negatively',
                'people_do_not_know': 'People do not know that I ' +
                                      'am a furry',
            }[result[1]]
        except:
            return None

    def getNonFurryAccuracy(self, surveyResponse):
        try:
            result = int(filter(lambda x: x[0] == 27, surveyResponse)[0][1]) - 1
            return [
                'Extremely inaccurate',
                'Inaccurate',
                'Accurate',
                'Extremely accurate'
            ][result]
        except:
            return None

    def getRPAsDiffGender(self, surveyResponse):
        try:
            result = int(filter(lambda x: x[0] == 29, surveyResponse)[0][1]) - 1
            return [
                'No, and I would not do so',
                'No, but I might do so',
                'Yes, occasionally',
                'Yes, regularly',
                'My primary furry persona fits this description',
            ][result]
        except:
            return None

    def setHowOften(self, result, row):
        fields = {
            'chat_online': 35,
            'roleplay': 36,
            'attend_conventions': 37,
            'meet_up': 38,
            'visit_furry_websites': 39,
            'participate_in_furry_online_communities': 40,
            'write': 41,
            'draw': 42,
            'play_nonfurry_online_games': 44,
            'play_nonfurry_rpgs': 45, 
            'attend_nonfurry_conventions': 46,
            'participate_in_nonfurry_online_communities': 47,
        }
        for field, index in fields.items():
            try:
                answer = int(filter(lambda x: x[0] == index, row)[0][1])
                result['howoften_' + field] = [
                    'Never',
                    'Less than once a year',
                    'Yearly',
                    'Several times a year',
                    'Monthly',
                    'Several times a month',
                    'Weekly',
                    'Daily',
                ][answer]
            except:
                continue

    def setSelfDescribed(self, results, surveyResponse):
        answers = [x[1] for x in filter(lambda x: x[0] == 48, surveyResponse)]
        results['is_politically_active'] = 'politically_active' in answers
        results['is_artist'] = 'artist' in answers
        results['is_fan_rpgs'] = 'rpg_fan' in answers
        results['is_fursuiter'] = 'fursuiter' in answers
        results['is_vegetarian'] = 'vegetarian' in answers
        results['is_plushophile'] = 'plushophile' in answers
        results['is_polyglot'] = 'multilingual' in answers
        results['is_musician'] = 'musician' in answers
        results['is_zoophile'] = 'zoophile' in answers
        results['is_animal_rights_advocate'] = 'animal_rights_advocate' in \
            answers
        results['is_writer'] = 'writer' in answers
        results['is_congoer'] = 'congoer' in answers
        results['is_fan_scifi'] = 'scifi_fan' in answers
        results['is_active_online_communities'] = 'online_communities' in \
            answers
        results['is_fan_anime'] = 'anime_fan' in answers
        results['is_otherkin'] = 'otherkin' in answers

    def setWebsites(self, results, surveyResponse):
        answers = [x[1] for x in filter(lambda x: x[0] == 65, surveyResponse)]
        results['website_adjspecies'] = 'adjspecies' in answers
        results['website_artspots'] = 'artspots' in answers
        results['website_deviantart'] = 'deviantart' in answers
        results['website_e621'] = 'e621' in answers
        results['website_flist'] = 'flist' in answers
        results['website_fchan'] = 'fchan' in answers
        results['website_flayrah'] = 'flayrah' in answers
        results['website_furaffinity'] = 'furaffinity' in answers
        results['website_furcadia'] = 'furcadia' in answers
        results['website_furnation'] = 'furnation' in answers
        results['website_furocity'] = 'furocity' in answers
        results['website_furrag'] = 'furrag' in answers
        results['website_furry4life'] = 'furry4life' in answers
        results['website_furrymate'] = 'furrymate' in answers
        results['website_furryteens'] = 'furryteen' in answers
        results['website_furriesxtreme'] = 'furriesxtreme' in answers
        results['website_furspace'] = 'furspace' in answers
        results['website_furtopia'] = 'furtopia' in answers
        results['website_inkbunny'] = 'inkbunny' in answers
        results['website_pounced'] = 'pounced' in answers
        results['website_sofurry'] = 'sofurry' in answers
        results['website_vcl'] = 'vcl' in answers
        results['website_weasyl'] = 'weasyl' in answers
        results['website_wikifur'] = 'wikifur' in answers

    def getHowHuman(self, surveyResponse):
        try:
            values = ['1', '2', '3', '4', '5', '6']
            result = filter(lambda x: x[0] == 28 and x[1] in values,
                            surveyResponse)[0]
            return [
                'I do not consider myself human',
                'I consider myself partly human, although animal ' +
                    'traits are more common',
                'I consider myself to be roughly equal parts human and ' +
                    'animal',
                'I consider myself to be mostly human, with some ' +
                    'other animal traits mixed in',
                'I consider myself to be completely human, though I ' +
                    'admire some aspects of other animals',
                'I consider myself to be completely human, with no ' +
                    'other attributes',
            ][int(result[1]) - 1]
        except:
            return None

    def setPsychographic(self, result, surveyResponse):
        result['faith_and_spirituality'] = \
            self.intResult(surveyResponse, 93)
        result['friends_look_advice'] = \
            self.intResult(surveyResponse, 92)
        result['make_rather_than_buy'] = \
            self.intResult(surveyResponse, 86)
        result['more_talented_than_peers'] = \
            self.intResult(surveyResponse, 90)
        result['value_cutting_edge'] = \
            self.intResult(surveyResponse, 76)
        result['rather_patronize_small_businesses'] = \
            self.intResult(surveyResponse, 83)
        result['enjoy_creating_things'] = \
            self.intResult(surveyResponse, 85)
        result['ahead_of_pop_culture'] = \
            self.intResult(surveyResponse, 82)
        result['tendency_to_overthink'] = \
            self.intResult(surveyResponse, 69)
        result['mass_media_lcd'] = \
            self.intResult(surveyResponse, 87)
        result['enjoy_leading'] = \
            self.intResult(surveyResponse, 89)
        result['focus_on_specific_interests'] = \
            self.intResult(surveyResponse, 96)
        result['too_reliant_on_tech'] = \
            self.intResult(surveyResponse, 79)
        result['filesharing_nbd'] = \
            self.intResult(surveyResponse, 72)
        result['citizens_politically_active'] = \
            self.intResult(surveyResponse, 81)
        result['want_to_be_fashionable'] = \
            self.intResult(surveyResponse, 78)
        result['exciting_rather_than_predictable'] = \
            self.intResult(surveyResponse, 88)
        result['learning_for_learnings_sake'] = \
            self.intResult(surveyResponse, 75)
        result['routine_is_comforting'] = \
            self.intResult(surveyResponse, 70)
        result['advertising_is_useful'] = \
            self.intResult(surveyResponse, 84)
        result['other_people_think_important'] = \
            self.intResult(surveyResponse, 95)
        result['learn_about_universe'] = \
            self.intResult(surveyResponse, 71)
        result['find_simpler_option'] = \
            self.intResult(surveyResponse, 73)
        result['decisions_moral_code'] = \
            self.intResult(surveyResponse, 91)
        result['people_more_distant'] = \
            self.intResult(surveyResponse, 94)
        result['first_to_try_new_things'] = \
            self.intResult(surveyResponse, 77)
        result['consider_intellectual'] = \
            self.intResult(surveyResponse, 98)
        result['buy_on_impulse'] = \
            self.intResult(surveyResponse, 74)
        result['corporations_soulless'] = \
            self.intResult(surveyResponse, 97)
        result['enjoy_traveling'] = \
            self.intResult(surveyResponse, 80)

    def setSpecies(self, result, surveyResponse):
        values = ['wolf', 'redfox', 'greyfox', 'arcticfox', 'kitsune',
                  'otherfox', 'coyote', 'jackal', 'germanshepherd', 'husky',
                  'collie', 'otherdog', 'othercanine', 'tiger', 'lion',
                  'leopard', 'snowleopard', 'panther', 'cheetah', 'cougar',
                  'domesticcat', 'otherfeline', 'dragon', 'lizard', 'dinosaur',
                  'otherreptile', 'raccoon', 'skunk', 'badger', 'riverotter',
                  'seaotter', 'weasel', 'othermustelid', 'redpanda',
                  'othermusteloid', 'horse', 'deer', 'otherungulate',
                  'brownbear', 'grizzlybear', 'pandabear', 'polarbear',
                  'otherbear', 'mouse', 'rat', 'squirrel', 'other', 'raven',
                  'raptor', 'otherbird', 'rabbit', 'kangaroo', 'koala',
                  'othermarsupial', 'lemur', 'monkey', 'otherprimate',
                  'hyaena', 'bat', 'griffin',]
        answers = [x[1] for x in filter(lambda x: x[0] == 66, surveyResponse)]
        for value in values:
            result['animal_' + value] = value in answers

def buildResults():
    results = Results2013()
    return results.getResults()
