from assurvey.survey.models import *

import csv

s = Survey.objects.get(slug='furry-philosophy')

all_questions = [
    'How old are you?',
    'What gender do you identify as?',
    'Does your gender identity align with your sex assigned at birth?',
    'What species is your primary character?',
    'Where in the world are you located?',
    'What religion do you identify with?',
    'If we cannot observe something, it may as well not exist.',
    'There is/are no God, gods, or deities.',
    'There is no such thing as truth, only opinions.',
    'Morality is a social construct.',
    'Sometimes, it is better for individuals to have rights taken away, in order to protect others within a society.',
    'When in Rome, do as the Romans do.',
    'People require a national identity to understand themselves.',
    'The only things we can be said to know are things we have experienced.',
    'Science is the surest path to knowledge.',
    'Some races require different treatment than others.',
    'It is impossible for us to know if other beings are self-aware.',
    'Without a belief in God, any action becomes permissible.',
    'It is better to hold false but comforting beliefs, than to know something disturbing.',
    'The ends can justify the means.',
    'Everything has a scientific, naturalistic explanation.',
    'There is an objective reality, which exists independently from us.',
    'The most important goal of life is to become happy.',
    'People posses free will, and are able to make choices as individual agents.',
    'Certain things, such as racism, sexism, and homophobia, are always wrong, regardless of context.',
    'The media positively contributes to liberal democracy.',
    'We posses no knowledge at birth.',
    'Our perceptions accurately represent reality.',
    'Free market economics is the best way to distribute wealth.',
    'Different societies ought to keep to themselves.',
]

philosophy_questions = [
    u'If we cannot observe something, it may as well not exist.',
    u'There is/are no God, gods, or deities.',
    u'There is no such thing as truth, only opinions.',
    u'Morality is a social construct.',
    u'Sometimes, it is better for individuals to have rights taken away, in order to protect others within a society.',
    u'When in Rome, do as the Romans do.',
    u'People require a national identity to understand themselves.',
    u'The only things we can be said to know are things we have experienced.',
    u'Science is the surest path to knowledge.',
    u'Some races require different treatment than others.',
    u'It is impossible for us to know if other beings are self-aware.',
    u'Without a belief in God, any action becomes permissible.',
    u'It is better to hold false but comforting beliefs, than to know something disturbing.',
    u'The ends can justify the means.',
    u'Everything has a scientific, naturalistic explanation.',
    u'There is an objective reality, which exists independently from us.',
    u'The most important goal of life is to become happy.',
    u'People posses free will, and are able to make choices as individual agents.',
    u'Certain things, such as racism, sexism, and homophobia, are always wrong, regardless of context.',
    u'The media positively contributes to liberal democracy.',
    u'We posses no knowledge at birth.',
    u'Our perceptions accurately represent reality.',
    u'Free market economics is the best way to distribute wealth.',
    u'Different societies ought to keep to themselves.',
]


with open('furry-philosophy.csv', 'wb') as f:
    w = csv.DictWriter(f, fieldnames=all_questions)
    w.writeheader()
    for r in s.surveyresponse_set.all():
        if 'c' in map(lambda x: x.action, r.responsetouchpoint_set.all()):
            p_r = map(lambda x: {'text': x.question.text.encode('ascii', 'ignore'), 'answer': x.value}, r.answer_set.all())
            response = {}
            for p in p_r:
                if p['answer'] and p['answer'] != '_other_':
                    if p['text'] in response:
                        response[p['text']] += '-' + p['answer']
                    else:
                        response[p['text']] = p['answer']
            ignore = False
            for q in philosophy_questions:
                if q not in response:
                    ignore = True
                    break
            if not ignore:
                w.writerow(response)

