from etc.furrypoll2015 import models

import logging

class Results2015():
    def __init__(self):
        self.logger = logging.getLogger(__name__)

    def buildResults(self):
        self.logger.info('Beginning 2015')
        responses = models.Response.objects
        n = 0

        while True:
            try:
                response = responses.next()
            except:
                break
            touchpoints = map(
                lambda tp: tp.touchpoint_type,
                response.metadata.touchpoints)
            if -4 not in touchpoints:
                continue
            if response.overview is None:
                continue
            n += 1
            result = {
                'year': 2015,
                'furry_status':
                    self.getObjectiveResponse(
                        response.overview.furry_status),
                'birthdate': self.getBirthDate(response),
                'biosex': self.getBiosex(response),
                'gender': self.getGender(response),
                'orientation': self.getOrientation(response),
                'country': response.overview.country,
                'state': response.overview.state,
                'religion': self.getReligion(response),
                'occupation':
                    self.getObjectiveList(response.overview.occupation)[0],
                'education':
                    self.getObjectiveResponse(response.overview.education),
                'relationship':
                    self.getObjectiveResponse(
                        response.overview.relationship),
                'partner_is_furry': response.overview.partner_is_furry,
                'polyamorous_romantic':
                    response.overview.open_relationship_romantic,
                'polyamorous_sexual':
                    response.overview.open_relationship_sexual,
                'howfurry': response.overview.how_furry,
                'years_known_fandom': response.overview.how_long_known,
                'years_as_furry': response.overview.how_long_member,
                'nonfurry_response':
                    response.overview.non_furries_general_response,
                'nonfurry_response_personal':
                    response.overview.non_furries_personal_response,
                'nonfurry_accuracy':
                    response.overview.non_furries_perception_accuracy,
                'rp_as_different_gender': self.getGenderInFurry(response),
                'how_much_human':
                    self.getObjectiveResponse(response.overview.how_human),
            }

            self.setPolitics(result, response)
            self.setRace(result, response)
            self.setWhoKnows(result, response)
            self.setHowOftenFurry(result, response)
            self.setHowOftenNonfurry(result, response)
            self.setSelfDescribed(result, response)
            self.setWebsites(result, response)
            self.setPsychographic(result, response)
            self.setSpecies(result, response)
            self.setSexImportance(result, response)
            self.setOpinions(result, response)
            self.setImportance(result, response)

            yield result
        self.logger.info('Processed {} results'.format(n))
        self.logger.info('Done with 2015')

    def getObjectiveResponse(self, psr):
        if psr is None:
            return None
        if psr.subjective:
            return 'Other'
        return psr.value

    def getObjectiveList(self, psr_list):
        objective_list = map(self.getObjectiveResponse, psr_list)
        if len(objective_list) > 0:
            return objective_list
        else:
            return [None]

    def getBirthDate(self, response):
        try:
            return float(response.overview.birth_year) + \
                (float(response.overview.birth_month)/12 - 1/24)
        except:
            return None

    def getOrientation(self, response):
        orientation = self.getObjectiveResponse(
            response.overview.sexual_orientation)
        if orientation == '' or orientation == None:
            return None
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
            'Other': 'Other',
        }[orientation]

    def getBiosex(self, response):
        try:
            return {
                'male': 'Male',
                'female': 'Female',
                'intersex': 'Intersex',
                'mtf_female': 'Transgender, identifying as female',
                'ftm_male': 'Transgender, identifying as male',
                'Other': 'Other',
                'other': 'Other',
            }[self.getObjectiveResponse(response.overview.clinical_sex)]
        except:
            return None

    def getGender(self, response):
        gender = self.getObjectiveResponse(response.overview.gender_identity)
        if gender == '' or gender == None:
            return None
        return {
            'female': 'Female, completely',
            'mostly_female': 'Mostly female',
            'both': 'Equal parts male and female',
            'mostly_male': 'Mostly male',
            'male': 'Male, completely',
            'genderqueer': 'Genderqueer/genderfluid',
            'neutrois': 'Neutrois/agender',
            'nonbinary_nos': 'Non-binary (not otherwise specified)',
            'Other': 'Other',
        }[gender]

    def getGenderInFurry(self, response):
        if response.overview.gender_in_furry is None:
            return None
        return {
            'never': 'No, and I would not do so',
            'might': 'No, but I might do so',
            'sometimes': 'Yes,occasionally',
            'regularly': 'Yes, regularly',
            'always': 'My primary furry persona fits this description',
            'not_applicable': 'Not applicable',
        }[response.overview.gender_in_furry]

    def getReligion(self, response):
        try:
            return {
                'christian_catholic': 'Christian, Catholic',
                'christian_orthodox': 'Christian, Orthodox',
                'christian_protestant': 'Christian, Protestant',
                'muslim': 'Muslim',
                'hindu': 'Hindu',
                'jewish': 'Jewish',
                'pagan': 'Pagan',
                'buddhist': 'Buddhist',
                'atheist': 'Atheist',
                'agnostic': 'Agnostic',
                'Other': 'Other',
            }[response.overview.spirituality.value]
        except:
            return None

    def setRace(self, result, response):
        race = self.getObjectiveList(response.overview.race)
        result['race_white'] = 'white' in race
        result['race_black'] = 'black' in race
        result['race_hispanic'] = 'hispanic' in race
        result['race_asian'] = 'asian' in race
        result['race_native'] = 'native_american_pacific_islander' in race

    def setWhoKnows(self, result, response):
        answers = response.overview.who_knows
        if answers is None:
            return
        result['whoknows_nobody'] = 'no_one' in answers
        result['whoknows_family'] = 'immediate_family' in answers
        result['whoknows_SO'] = 'significant_other' in answers
        result['whoknows_furryfriends'] = 'furry_friends' in answers #
        result['whoknows_bestfriends'] = 'best_nonfurry_friends' in answers
        result['whoknows_closerfriends'] = 'closer_nonfurry_friends' in answers
        result['whoknows_friends'] = 'most_nonfurry_friends' in answers
        result['whoknows_coworkers'] = 'coworkers' in answers
        result['whoknows_commonknowledge'] = 'common_knowledge' in answers

    def setPolitics(self, result, response):
        for answer in response.overview.political_views:
            if answer.option == 'social':
                result['politics_social'] = answer.value
            if answer.option == 'economic':
                result['politics_economic'] = answer.value

    def setHowOftenFurry(self, result, response):
        keys = {
            'chat_online': 'chat_online',
            'role_play': 'roleplay',
            'attend_conventions': 'attend_conventions',
            'attend_meets': 'meet_up',
            'visit_websites': 'visit_furry_websites',
            'online_communities': 'participate_in_furry_online_communities',
            'write': 'write',
            'draw': 'draw',
        }
        values = [
            'Never',
            'Less than once a year',
            'Yearly',
            'Several times a year',
            'Monthly',
            'Several times a month',
            'Weekly',
            'Daily',
        ]
        for answer in response.overview.furry_activities:
            if answer.option in keys.keys():
                result['howoften_' + keys[answer.option]] = values[answer.value]

    def setHowOftenNonfurry(self, result, response):
        keys = {
            'online_games': 'play_nonfurry_online_games',
            'role_play_games': 'play_nonfurry_rpgs',
            'non_furry_conventions': 'attend_nonfurry_conventions',
            'online_communities': 'participate_in_nonfurry_online_communities',
        }
        values = [
            'Never',
            'Less than once a year',
            'Yearly',
            'Several times a year',
            'Monthly',
            'Several times a month',
            'Weekly',
            'Daily',
        ]
        for answer in response.overview.non_furry_activities:
            if answer.option in keys.keys():
                result['howoften_' + keys[answer.option]] = values[answer.value]

    def setSelfDescribed(self, result, response):
        answers = response.overview.self_described
        result['is_politically_active'] = 'politically_active' in answers
        result['is_vegetarian'] = 'vegetarian' in answers
        result['is_animal_rights_advocate'] = 'animal_rights_advocate' in \
            answers
        result['is_otherkin'] = 'otherkin' in answers

    def setWebsites(self, result, response):
        answers = []
        for site in response.overview.furry_websites:
            if site.option not in answers:
                answers.append(site.option)
        result['website_adjspecies'] = 'adjspecies' in answers
        result['website_artspots'] = 'artspots' in answers
        result['website_deviantart'] = 'deviantart' in answers
        result['website_e621'] = 'e621' in answers
        result['website_flist'] = 'flist' in answers
        result['website_fchan'] = 'fchan' in answers
        result['website_flayrah'] = 'flayrah' in answers
        result['website_furaffinity'] = 'furaffinity' in answers
        result['website_furcadia'] = 'furcadia' in answers
        result['website_furnation'] = 'furnation' in answers
        result['website_furocity'] = 'furocity' in answers
        result['website_furrag'] = 'furrag' in answers
        result['website_furry4life'] = 'furry4life' in answers
        result['website_furrymate'] = 'furrymate' in answers
        result['website_furryteens'] = 'furryteen' in answers
        result['website_furriesxtreme'] = 'furriesxtreme' in answers
        result['website_furspace'] = 'furspace' in answers
        result['website_furtopia'] = 'furtopia' in answers
        result['website_inkbunny'] = 'inkbunny' in answers
        result['website_pounced'] = 'pounced' in answers
        result['website_sofurry'] = 'sofurry' in answers
        result['website_vcl'] = 'vcl' in answers
        result['website_weasyl'] = 'weasyl' in answers
        result['website_wikifur'] = 'wikifur' in answers

    def setPsychographic(self, result, response):
        diff_keys = {
            'rather_patronize_small_business':
                'rather_patronize_small_businesses',
            'information_is_useful': 'advertising_is_useful',
        }
        if response.psychographic_battery is not None:
            for answer in response.psychographic_battery.battery:
                option = answer.option
                if option in diff_keys.keys():
                    option = diff_keys[option]
                result[option] = answer.value

    def setSpecies(self, result, response):
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
        for value in values:
            result['animal_' + value] = False
        for character in response.overview.characters:
            if character.deprecated_character:
                continue
            for species in character.species_category:
                if species in values:
                    result['animal_' + species] = True

    def setSexImportance(self, result, response):
        if (response.sexuality is None
                or response.sexuality.sex_importance is None):
            return
        keys = {
            'self': 'seximportance_personal',
            'others': 'seximportance_others',
            'public': 'seximportance_public',
        }
        for answer in response.sexuality.sex_importance:
            result[keys[answer.option]] = answer.value

    def setOpinions(self, result, response):
        keys = {
            'writing': 'opinion_writing',
            'visual_art': 'opinion_artwork',
            'conventions': 'opinion_conventions',
            'fursuiting': 'opinion_fursuiting',
        }
        for answer in response.overview.furry_activities_opinion:
            if answer.option in keys.keys():
                result[keys[answer.option]] = answer.value

    def setImportance(self, result, response):
        keys = {
            'visual_art': 'artwork',
            # performing_art
            'writing': 'writing',
            'online_communities': 'online_communities',
            # 'role_playing'
            'conventions': 'conventions',
            'fursuiting': 'fursuiting',
        }
        for answer in response.overview.furry_importance:
            if answer.option in keys.keys():
                result['importance_' + keys[answer.option]] = answer.value

def buildResults():
    result = Results2015()
    return result.buildResults()
