from etc.furrypoll2016 import models

import csv
import sys

responses = models.Response.objects
results = []

while True:
    try:
        response = responses.next()
    except:
        break

    if len(response.overview.characters) > 0 and response.sexuality and response.sexuality.dom_or_sub:
        character = response.overview.characters[0]
        for char in response.overview.characters:
            if char.primary_character:
                character = char
                break
        sexual = romantic = social = None
        for dom_sub in response.sexuality.dom_or_sub:
            if dom_sub.option == 'sexual':
                sexual = dom_sub.value
            if dom_sub.option == 'romantic':
                romantic = dom_sub.value
            if dom_sub.option == 'social':
                social = dom_sub.value

        results.append([
            '; '.join(character.species_category),
            sexual,
            romantic,
            social
        ])

with open(sys.argv[1], 'wb') as f:
    writer = csv.writer(f)
    writer.writerow(('Species', 'Sexual dominance', 'Romantic dominance', 'Social dominance'))
    for row in results:
        try:
            writer.writerow(row)
        except UnicodeEncodeError:
            continue
