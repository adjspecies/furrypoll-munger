from etc.furrypoll2015 import models

import csv
import sys

responses = models.Response.objects
results = []

while True:
    try:
        response = responses.next()
    except:
        break

    for character in response.overview.characters:
        if character.reason.value:
            results.append([
                ', '.join(character.species_category),
                character.reason.value,
                'Primary character' if character.primary_character else \
                    'Deprecated character' if character.deprecated_character else \
                    'Secondary Character'
            ])

with open(sys.argv[1], 'wb') as f:
    writer = csv.writer(f)
    writer.writerow(('Species', 'Reason', 'Character status'))
    for row in results:
        try:
            writer.writerow(row)
        except UnicodeEncodeError:
            continue
