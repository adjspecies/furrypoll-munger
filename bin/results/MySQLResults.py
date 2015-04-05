import MySQLdb
import logging

class Results():
    def __init__(self, year=None):
        self.year = year
        self.logger = logging.getLogger(__name__)
        self.db = MySQLdb.connect(host='localhost',
                                  user='vagrant',
                                  passwd='',
                                  db='furrypoll2009_2012')

    def getResults(self):
        self.logger.info('Beginning %s', self.year)
        cur = self.db.cursor()
        cur.execute('select * from furrypoll%s' % self.year)
        numRows = cur.rowcount
        self.logger.info('Processing %s results', numRows)
        for x in range(0, numRows):
            row = cur.fetchone()
            yield self.resultFromRow(row)
        cur.close()
        self.db.close()
        self.logger.info('Done with %s', self.year)

    def resultFromRow(self, row):
        result = {
            'year': self.year,
        
        # The following three fields use the same index for each year; beyond
        # that, we'll need to pass the whole row.
            'birthdate': self.getBirthDate(
                row[self.questionIndex['month']],
                row[self.questionIndex['year']]),
            'biosex': self.getBiosex(
                row[self.questionIndex['biosex']]),
            'gender': self.getGender(
                row[self.questionIndex['gender']]),

            'orientation': self.getOrientation(row),
            'country': self.getCountry(row),
            'state': self.getState(row),
            'religion': self.getReligion(row),
            'politics_social': row[self.questionIndex['politics_social']] \
                if self.questionIndex['politics_social'] else None,
            'politics_economic': row[self.questionIndex['politics_economic']] \
                if self.questionIndex['politics_economic'] else None,
            'occupation': self.getOccupation(row),
            'education': self.getEducation(row),
            'relationship': self.getRelationship(row),
            'partner_is_furry': 
                row[self.questionIndex['partner_is_furry']] == 'o',
            'howfurry': row[self.questionIndex['howfurry']],
            'years_known_fandom':
                row[self.questionIndex['years_known_fandom']],
            'years_as_furry': row[self.questionIndex['years_as_furry']],
            'furries_known': row[self.questionIndex['furries_known']],
            'furries_known_in_person':
                row[self.questionIndex['furries_known_in_person']],
            'whoknows_nobody': 
                row[self.questionIndex['whoknows_nobody']] == 'o',
            'whoknows_family':
                row[self.questionIndex['whoknows_family']] == 'o' if \
                self.questionIndex['whoknows_family'] else None,
            'whoknows_SO': 
                row[self.questionIndex['whoknows_SO']] == 'o',
            'whoknows_furryfriends': 
                row[self.questionIndex['whoknows_furryfriends']] == 'o',
            'whoknows_bestfriends': 
                row[self.questionIndex['whoknows_bestfriends']] == 'o',
            'whoknows_closerfriends': 
                row[self.questionIndex['whoknows_closerfriends']] == 'o',
            'whoknows_friends': 
                row[self.questionIndex['whoknows_friends']] == 'o',
            'whoknows_coworkers': 
                row[self.questionIndex['whoknows_coworkers']] == 'o',
            'whoknows_commonknowledge': 
                row[self.questionIndex['whoknows_commonknowledge']] == 'o',
            'nonfurry_response': self.getNonFurryResponse(row),
            'nonfurry_response_personal': 
                self.getNonFurryResponsePersonal(row),
            'nonfurry_accuracy': self.getNonFurryAccuracy(row),
            'rp_as_different_gender': self.getRPAsDiffGender(row),
            'seximportance_overall': row[self.questionIndex['seximportance']],
            'seximportance_personal': 
                row[self.questionIndex['seximportance_personal']],
            'seximportance_others':
                row[self.questionIndex['seximportance_others']],
            'seximportance_public':
                row[self.questionIndex['seximportance_public']],
            'is_artist': row[self.questionIndex['is_artist']] == 'o',
            'is_writer': row[self.questionIndex['is_writer']] == 'o',
            'is_musician': row[self.questionIndex['is_musician']] == 'o',
            'is_congoer': row[self.questionIndex['is_congoer']] == 'o',
            'is_fursuiter': row[self.questionIndex['is_fursuiter']] == 'o',
            'is_active_online_communities':
                row[self.questionIndex['is_active_online_communities']] == 'o',
            'is_fan_rpgs': row[self.questionIndex['is_fan_rpgs']] == 'o',
            'is_fan_scifi': row[self.questionIndex['is_fan_scifi']] == 'o',
            'is_fan_anime': row[self.questionIndex['is_fan_anime']] == 'o',
            'is_plushophile': row[self.questionIndex['is_plushophile']] == 'o',
            'is_zoophile': row[self.questionIndex['is_zoophile']] == 'o',
            'is_polyglot': row[self.questionIndex['is_polyglot']] == 'o',
            'is_animal_rights_advocate':
                row[self.questionIndex['is_animal_rights_advocate']] == 'o',
            'is_vegetarian': row[self.questionIndex['is_vegetarian']] == 'o',
            'is_politically_active':
                row[self.questionIndex['is_politically_active']] == 'o',
            'is_otherkin': row[self.questionIndex['is_otherkin']] == 'o' if \
                self.questionIndex['is_otherkin'] else None,
            'opinion_artwork': row[self.questionIndex['opinion_artwork']],
            'opinion_writing': row[self.questionIndex['opinion_writing']],
            'opinion_conventions':
                row[self.questionIndex['opinion_conventions']],
            'opinion_fursuiting':
                row[self.questionIndex['opinion_fursuiting']],
            'opinion_plushophilia':
                row[self.questionIndex['opinion_plushophilia']],
            'opinion_zoophilia':
                row[self.questionIndex['opinion_zoophilia']],
            'opinion_online_communities':
                row[self.questionIndex['opinion_online_communities']],
            'importance_artwork':
                row[self.questionIndex['importance_artwork']],
            'importance_writing':
                row[self.questionIndex['importance_writing']],
            'importance_online_communities':
                row[self.questionIndex['importance_online_communities']],
            'importance_muds':
                row[self.questionIndex['importance_muds']],
            'importance_conventions':
                row[self.questionIndex['importance_conventions']],
            'importance_fursuiting':
                row[self.questionIndex['importance_fursuiting']],
            'how_much_human': self.getHowHuman(row),
            'animal_wolf':
                row[self.questionIndex['animal_wolf']] == 'o',
            'animal_redfox':
                row[self.questionIndex['animal_redfox']] == 'o',
            'animal_greyfox':
                row[self.questionIndex['animal_greyfox']] == 'o',
            'animal_arcticfox':
                row[self.questionIndex['animal_arcticfox']] == 'o',
            'animal_kitsune':
                row[self.questionIndex['animal_kitsune']] == 'o',
            'animal_otherfox':
                row[self.questionIndex['animal_otherfox']] == 'o',
            'animal_coyote':
                row[self.questionIndex['animal_coyote']] == 'o',
            'animal_jackal':
                row[self.questionIndex['animal_jackal']] == 'o' \
                    if self.questionIndex['animal_jackal'] \
                    is not None else None,
            'animal_germanshepherd':
                row[self.questionIndex['animal_germanshepherd']] == 'o',
            'animal_husky':
                row[self.questionIndex['animal_husky']] == 'o',
            'animal_collie':
                row[self.questionIndex['animal_collie']] == 'o',
            'animal_otherdog':
                row[self.questionIndex['animal_otherdog']] == 'o',
            'animal_othercanine':
                row[self.questionIndex['animal_othercanine']] == 'o',
            'animal_tiger':
                row[self.questionIndex['animal_tiger']] == 'o',
            'animal_lion':
                row[self.questionIndex['animal_lion']] == 'o',
            'animal_leopard':
                row[self.questionIndex['animal_leopard']] == 'o',
            'animal_snowleopard':
                row[self.questionIndex['animal_snowleopard']] == 'o' \
                    if self.questionIndex['animal_snowleopard'] \
                    is not None else None,
            'animal_panther':
                row[self.questionIndex['animal_panther']] == 'o',
            'animal_cheetah':
                row[self.questionIndex['animal_cheetah']] == 'o',
            'animal_cougar':
                row[self.questionIndex['animal_cougar']] == 'o',
            'animal_domesticcat':
                row[self.questionIndex['animal_domesticcat']] == 'o',
            'animal_otherfeline':
                row[self.questionIndex['animal_otherfeline']] == 'o',
            'animal_dragon':
                row[self.questionIndex['animal_dragon']] == 'o',
            'animal_lizard':
                row[self.questionIndex['animal_lizard']] == 'o',
            'animal_dinosaur':
                row[self.questionIndex['animal_dinosaur']] == 'o',
            'animal_otherreptile':
                row[self.questionIndex['animal_otherreptile']] == 'o',
            'animal_raccoon':
                row[self.questionIndex['animal_raccoon']] == 'o',
            'animal_skunk':
                row[self.questionIndex['animal_skunk']] == 'o',
            'animal_badger':
                row[self.questionIndex['animal_badger']] == 'o',
            'animal_riverotter':
                row[self.questionIndex['animal_riverotter']] == 'o',
            'animal_seaotter':
                row[self.questionIndex['animal_seaotter']] == 'o',
            'animal_weasel':
                row[self.questionIndex['animal_weasel']] == 'o',
            'animal_othermustelid':
                row[self.questionIndex['animal_othermustelid']] == 'o',
            'animal_redpanda':
                row[self.questionIndex['animal_redpanda']] == 'o',
            'animal_othermusteloid':
                row[self.questionIndex['animal_othermusteloid']] == 'o',
            'animal_horse':
                row[self.questionIndex['animal_horse']] == 'o',
            'animal_deer':
                row[self.questionIndex['animal_deer']] == 'o',
            'animal_otherungulate':
                row[self.questionIndex['animal_otherungulate']] == 'o',
            'animal_brownbear':
                row[self.questionIndex['animal_brownbear']] == 'o',
            'animal_grizzlybear':
                row[self.questionIndex['animal_grizzlybear']] == 'o',
            'animal_pandabear':
                row[self.questionIndex['animal_pandabear']] == 'o',
            'animal_polarbear':
                row[self.questionIndex['animal_polarbear']] == 'o',
            'animal_otherbear':
                row[self.questionIndex['animal_otherbear']] == 'o',
            'animal_mouse':
                row[self.questionIndex['animal_mouse']] == 'o',
            'animal_rat':
                row[self.questionIndex['animal_rat']] == 'o',
            'animal_squirrel':
                row[self.questionIndex['animal_squirrel']] == 'o',
            'animal_other':
                row[self.questionIndex['animal_other']] == 'o',
            'animal_raven':
                row[self.questionIndex['animal_raven']] == 'o',
            'animal_raptor':
                row[self.questionIndex['animal_raptor']] == 'o',
            'animal_otherbird':
                row[self.questionIndex['animal_otherbird']] == 'o',
            'animal_rabbit':
                row[self.questionIndex['animal_rabbit']] == 'o',
            'animal_kangaroo':
                row[self.questionIndex['animal_kangaroo']] == 'o',
            'animal_koala':
                row[self.questionIndex['animal_koala']] == 'o',
            'animal_othermarsupial':
                row[self.questionIndex['animal_othermarsupial']] == 'o',
            'animal_lemur':
                row[self.questionIndex['animal_lemur']] == 'o',
            'animal_monkey':
                row[self.questionIndex['animal_monkey']] == 'o',
            'animal_otherprimate':
                row[self.questionIndex['animal_otherprimate']] == 'o',
            'animal_hyaena':
                row[self.questionIndex['animal_hyaena']] == 'o',
            'animal_bat':
                row[self.questionIndex['animal_bat']] == 'o',
            'animal_griffin':
                row[self.questionIndex['animal_griffin']] == 'o',
        }

        # Race involves multiple columns
        self.setRace(row, result)
        self.setHowOften(row, result)
        self.setWebsites(row, result)
        self.setPsychographic(row, result)

        return result

    def getBirthDate(self, month, year):
        if month == 'nul' or year == '' or int(year) == 0:
            return None
        try:
            return float(year) + float(month)
        except ValueError:
            return None

    def getBiosex(self, biosex):
        try:
            return {
                'a': 'Male',
                'b': 'Female',
                'c': 'Other',
            }[biosex]
        except:
            return None

    def getGender(self, gender):
        try:
            return {
                'a': 'Male, completely',
                'b': 'Male, predominately',
                'c': 'Equal parts male and female',
                'd': 'Female, predominately',
                'e': 'Female, completely',
                'f': 'Other',
            }[gender]
        except:
            return None

    def getOrientation(self, row):
        orientation = row[self.questionIndex['orientation']]
        try:
            return (
                'Completely heterosexual',
                'Mostly heterosexual',
                'Bisexual, leaning heterosexual',
                'Bisexual',
                'Bisexual, leaning homosexual',
                'Mostly homosexual',
                'Completely homosexual',
                'Pansexual',
                'Asexual',
            )[int(orientation)]
        except:
            return None

    def getCountry(self, row):
        if len(row[self.questionIndex['country']]) == 2 and \
                row[self.questionIndex['country']] != 'zz':
            return row[self.questionIndex['country']]
        else:
            return None

    def getState(self, row):
        if self.questionIndex['state'] is not None:
            if len(row[self.questionIndex['state']]) == 2 and \
                    row[self.questionIndex['state']] != 'zz':
                return row[self.questionIndex['state']]
            else:
                return None

    def setRace(self, row, result):
        result['race_white'] = row[self.questionIndex['race_white']] == 'o'
        result['race_black'] = row[self.questionIndex['race_black']] == 'o'
        result['race_hispanic'] = row[self.questionIndex['race_hispanic']] \
            == 'o'
        result['race_asian'] = row[self.questionIndex['race_asian']] == 'o'
        result['race_native'] = row[self.questionIndex['race_native']] == 'o'

    def getReligion(self, row):
        try:
            return {
                'a': 'Christian, Catholic',
                'b': 'Christian, Protestant',
                'c': 'Christian, Other',
                'd': 'Muslim',
                'e': 'Hindu',
                'f': 'Jewish',
                'g': 'Pagan',
                'h': 'Buddhist',
                'i': 'Shinto',
                'j': 'Agnostic',
                'k': 'Atheist',
                'x': 'Other',
            }[row[self.questionIndex['religion']]]
        except:
            return None

    def getOccupation(self, row):
        try:
            return {
                'a': 'Student',
                'b': 'Administrative',
                'c': 'Government/Armed Service',
                'd': 'Sales/Support',
                'e': 'Technical/IT',
                'f': 'Professional',
                'g': 'Service',
                'h': 'Creative or other within the furry fandom',
                'i': 'Retired',
                'j': 'Unemployed' if self.year in [2011, 2012] else 'None',
                'k': 'None',
                'x': 'Other',
            }[row[self.questionIndex['occupation']]]
        except:
            return None

    def getEducation(self, row):
        try:
            return {
                'a': 'Some high/secondary school',
                'b': 'High/secondary school (ongoing)',
                'c': 'High/secondary school graduate',
                'd': 'Some college/university',
                'e': 'College/university (ongoing)',
                'f': 'College/university graduate',
                'g': 'Some postcollege',
                'h': 'Postcollege (ongoing)',
                'i': 'Advance degree',
                'x': 'Other',
            }[row[self.questionIndex['education']]]
        except:
            return None

    def getRelationship(self, row):
        try:
            return {
                'a': 'Single',
                'b': 'Casual relationship',
                'c': 'Open relationship',
                'd': 'Long-term relationship',
                'e': 'Marriage or other permanent commitment',
                'x': 'Other',
            }[row[self.questionIndex['relationship']]]
        except:
            return None

    def getNonFurryResponse(self, row):
        try:
            return {
                'a': 'They have no knowledge',
                'b': 'Extremely positively',
                'c': 'Positively',
                'd': 'Slightly positively',
                'e': 'Ambivalently',
                'f': 'Slightly negatively',
                'g': 'Negatively',
                'h': 'Extremely negatively',
            }[row[self.questionIndex['nonfurry_response']]]
        except:
            return None

    def getNonFurryResponsePersonal(self, row):
        try:
            return {
                'a': 'No',
                'b': 'Yes, they respond more positively',
                'c': 'Yes, they respond more negatively',
                'd': 'The reaction is mixed; some respond more positively ' +
                     'and some more negatively',
                'e': 'People do not know that I am a furry',
            }[row[self.questionIndex['nonfurry_response_personal']]]
        except:
            return None

    def getNonFurryAccuracy(self, row):
        try:
            return {
                'a': 'Extremely accurate',
                'b': 'Accurate',
                'c': 'Inaccurate',
                'd': 'Extremely inaccurate',
            }[row[self.questionIndex['nonfurry_accuracy']]]
        except:
            return None

    def getRPAsDiffGender(self, row):
        try:
            return {
                'a': 'No, and I would not do so',
                'b': 'No, but I might do so',
                'c': 'Yes, occasionally',
                'd': 'Yes, regularly',
                'e': 'My primary furry persona fits this description',
            }[row[self.questionIndex['rp_as_different_gender']]]
        except:
            return None

    def setHowOften(self, row, result):
        fields = ['chat_online', 'roleplay', 'attend_conventions', 'meet_up',
                  'visit_furry_websites',
                  'participate_in_furry_online_communities', 'write', 'draw',
                  'play_nonfurry_online_games', 'play_nonfurry_rpgs', 
                  'attend_nonfurry_conventions',
                  'participate_in_nonfurry_online_communities']
        for field in fields:
            try:
                result['howoften_' + field] = [
                    'Never',
                    'Less than once a year',
                    'Yearly',
                    'Several times a year',
                    'Monthly',
                    'Several times a month',
                    'Weekly',
                    'Daily',
                ][int(row[self.questionIndex['howoften_' + field]]) - 1]
            except:
                continue

    def setWebsites(self, row, result):
        sites = ['artspots', 'deviantart', 'e621', 'flist', 'fchan',
                 'flayrah', 'furaffinity', 'furcadia', 'furnation',
                 'furocity', 'furrag', 'furry4life', 'furryteens',
                 'furspace', 'furtopia', 'inkbunny', 'pounced',
                 'sofurry', 'vcl', 'wikifur',]
        for site in sites:
            try:
                result['website_' + site] = \
                    row[self.questionIndex['website_' + site]] == 'o'
            except:
                result['website_' + site] = None

    def getHowHuman(self, row):
        try:
            return {
                'a': 'I consider myself to be completely human, with no ' +
                    'other attributes',
                'b': 'I consider myself to be completely human, though I ' +
                    'admire some aspects of other animals',
                'c': 'I consider myself to be mostly human, with some ' +
                    'other animal traits mixed in',
                'd': 'I consider myself to be roughly equal parts human and ' +
                    'animal',
                'e': 'I consider myself partly human, although animal ' +
                    'traits are more common',
                'f': 'I do not consider myself human',
                'g': 'Other',
            }[row[self.questionIndex['how_much_human']]]
        except:
            return None

    def setPsychographic(self, row, result):
        if self.year == 2012:
            result['faith_and_spirituality'] = \
                row[self.questionIndex['faith_and_spirituality']]
            result['friends_look_advice'] = \
                row[self.questionIndex['friends_look_advice']]
            result['make_rather_than_buy'] = \
                row[self.questionIndex['make_rather_than_buy']]
            result['more_talented_than_peers'] = \
                row[self.questionIndex['more_talented_than_peers']]
            result['value_cutting_edge'] = \
                row[self.questionIndex['value_cutting_edge']]
            result['rather_patronize_small_businesses'] = \
                row[self.questionIndex['rather_patronize_small_businesses']]
            result['enjoy_creating_things'] = \
                row[self.questionIndex['enjoy_creating_things']]
            result['ahead_of_pop_culture'] = \
                row[self.questionIndex['ahead_of_pop_culture']]
            result['tendency_to_overthink'] = \
                row[self.questionIndex['tendency_to_overthink']]
            result['mass_media_lcd'] = \
                row[self.questionIndex['mass_media_lcd']]
            result['enjoy_leading'] = \
                row[self.questionIndex['enjoy_leading']]
            result['focus_on_specific_interests'] = \
                row[self.questionIndex['focus_on_specific_interests']]
            result['too_reliant_on_tech'] = \
                row[self.questionIndex['too_reliant_on_tech']]
            result['filesharing_nbd'] = \
                row[self.questionIndex['filesharing_nbd']]
            result['citizens_politically_active'] = \
                row[self.questionIndex['citizens_politically_active']]
            result['want_to_be_fashionable'] = \
                row[self.questionIndex['want_to_be_fashionable']]
            result['exciting_rather_than_predictable'] = \
                row[self.questionIndex['exciting_rather_than_predictable']]
            result['learning_for_learnings_sake'] = \
                row[self.questionIndex['learning_for_learnings_sake']]
            result['routine_is_comforting'] = \
                row[self.questionIndex['routine_is_comforting']]
            result['advertising_is_useful'] = \
                row[self.questionIndex['advertising_is_useful']]
            result['other_people_think_important'] = \
                row[self.questionIndex['other_people_think_important']]
            result['learn_about_universe'] = \
                row[self.questionIndex['learn_about_universe']]
            result['find_simpler_option'] = \
                row[self.questionIndex['find_simpler_option']]
            result['decisions_moral_code'] = \
                row[self.questionIndex['decisions_moral_code']]
            result['people_more_distant'] = \
                row[self.questionIndex['people_more_distant']]
            result['first_to_try_new_things'] = \
                row[self.questionIndex['first_to_try_new_things']]
            result['consider_intellectual'] = \
                row[self.questionIndex['consider_intellectual']]
            result['buy_on_impulse'] = \
                row[self.questionIndex['buy_on_impulse']]
            result['corporations_soulless'] = \
                row[self.questionIndex['corporations_soulless']]
            result['enjoy_traveling'] = \
                row[self.questionIndex['enjoy_traveling']]
