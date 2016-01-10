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
                'biosex':
                    self.getObjectiveResponse(
                        response.overview.clinical_sex),
                'gender':
                    self.getObjectiveResponse(
                        response.overview.gender_identity),
                'orientation':
                    self.getObjectiveResponse(
                        response.overview.sexual_orientation),
                'country': response.overview.country,
                'state': response.overview.state,
                'religion':
                    self.getObjectiveResponse(response.overview.spirituality),
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
                'rp_as_different_gender': response.overview.gender_in_furry,
                'how_much_human':
                    self.getObjectiveResponse(response.overview.how_human),
            }

            self.setPolitics(result, response)
            self.setRace(result, response)
            self.setHowOften(result, response)
            self.setSelfDescribed(result, response)
            self.setWebsites(result, response)
            self.setPsychographic(result, response)
            self.setSpecies(result, response)
            self.setSeximportance(result, response)
            self.setOpinions(result, response)
            self.setImportance(result, response)

            yield result
        self.logger.info('Processed {} results'.format(n))
        self.logger.info('Done with 2015')

    def getObjectiveResponse(self, psr):
        if psr is None:
            return ''
        if psr.subjective:
            return 'Other'
        return psr.value

    def getObjectiveList(self, psr_list):
        objective_list = map(self.getObjectiveResponse, psr_list)
        if len(objective_list) > 0:
            return objective_list
        else:
            return ['']

    def getBirthDate(self, response):
        try:
            return float(response.overview.birth_year) + \
                (float(response.overview.birth_month)/12 - 1/24)
        except:
            return ''

    def setRace(self, result, response):
        race = self.getObjectiveList(response.overview.race)
        result['race_white'] = 'white' in race
        result['race_black'] = 'black' in race
        result['race_hispanic'] = 'hispanic' in race
        result['race_asian'] = 'asian' in race
        result['race_native'] = 'native_american_pacific_islander' in race

    def setPolitics(self, result, response):
        for answer in response.overview.political_views:
            if answer.option == 'social':
                result['politics_social'] = answer.value
            if answer.option == 'economic':
                result['politics_economic'] = answer.value

    def setHowOften(self, result, response):
        keys = {
            'chat_online': 'chat_onlin',
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
            if answer.option in keys.values():
                result['howoften_' + keys[answer.option]] = values[answer.value]

    def setSelfDescribed(self, result, response):
        pass
    def setWebsites(self, result, response):
        pass
    def setPsychographic(self, result, response):
        pass
    def setSpecies(self, result, response):
        pass
    def setSeximportance(self, result, response):
        pass
    def setOpinions(self, result, response):
        pass
    def setImportance(self, result, response):
        pass

def buildResults():
    result = Results2015()
    return result.buildResults()
