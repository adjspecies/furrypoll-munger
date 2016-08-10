import csv

cleaned = []
keys = [
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
    'Different societies ought to keep to themselves.']

required = [
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
    'Different societies ought to keep to themselves.'
]

with open('output/furry-philosophy.csv', 'rb') as csvfile:
    r = csv.DictReader(csvfile)
    for row in r:
        dirty = False
        for req in required:
            if not row[req]:
                dirty = True
        if dirty:
            continue
        cleaned.append(row)

with open('output/cleaned-furry-philosophy.csv', 'wb') as csvfile:
    w = csv.DictWriter(csvfile, keys)
    w.writeheader()
    for row in cleaned:
        w.writerow(row)
