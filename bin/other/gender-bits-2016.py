from etc.furrypoll2016 import models

import csv
import sys
import datetime

responses = models.Response.objects
results = []
today = datetime.date.today().year + (datetime.date.today().month * (1 / 12))


while True:
    try:
        response = responses.next()
    except:
        break

    try:
        age = int(today - (
            response.overview.birth_year + (
                response.overview.birth_month * (1 / 12))))
    except:
        age = None

    results.append([
        age,
        response.overview.gender_identity.value if \
            response.overview.gender_identity and \
            not response.overview.gender_identity.subjective else \
            None,
        response.overview.gender_alignment.value if \
            response.overview.gender_alignment and \
            not response.overview.gender_alignment.subjective else \
            None,
    ])

with open(sys.argv[1], 'wb') as f:
    writer = csv.writer(f)
    writer.writerow(('Age', 'Gender Identity', 'Gender Alignment'))
    for row in results:
        try:
            writer.writerow(row)
        except UnicodeEncodeError:
            continue
