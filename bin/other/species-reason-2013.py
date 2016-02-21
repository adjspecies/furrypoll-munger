import csv
import psycopg2

query = '''
select
    species.survey_response_id,
    species.value,
    reason.value
from
    survey_answer reason,
    survey_answer species
where
    reason.question_id = 67 and
    species.question_id = 66 and
    reason.survey_response_id = species.survey_response_id;
'''

species = ['wolf', 'redfox', 'greyfox', 'arcticfox', 'kitsune', 'otherfox',
    'coyote', 'jackal', 'germanshepherd', 'husky', 'collie', 'otherdog',
    'othercanine', 'tiger', 'lion', 'leopard', 'snowleopard', 'panther',
    'cheetah', 'cougar', 'domesticcat', 'otherfeline', 'dragon', 'lizard',
    'dinosaur', 'otherreptile', 'raccoon', 'skunk', 'badger', 'riverotter',
    'seaotter', 'weasel', 'othermustelid', 'redpanda', 'othermusteloid',
    'horse', 'deer', 'otherungulate', 'brownbear', 'grizzlybear', 'pandabear',
    'polarbear', 'otherbear', 'mouse', 'rat', 'squirrel', 'other', 'raven',
    'raptor', 'otherbird', 'rabbit', 'kangaroo', 'koala', 'othermarsupial',
    'lemur', 'monkey', 'otherprimate', 'hyaena', 'bat', 'griffin',]

db = psycopg2.connect("dbname=furrypoll2013 user=vagrant")

cursor = db.cursor()
cursor.execute(query)
numRows = cursor.rowcount

seen = []

with open('species-reasons-2013.csv', 'wb') as f:
    writer = csv.writer(f)
    writer.writerow(('species', 'reason'))
    for i in range(0, numRows):
        row = cursor.fetchone()
        if not row[1] or not row[2] or row[1] not in species:
            continue
        if row[0] in seen:
            continue
        seen.append(row[0])
        writer.writerow((row[1], row[2]))

cursor.close()
db.close()
