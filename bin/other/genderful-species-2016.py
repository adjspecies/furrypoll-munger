from etc.furrypoll2016 import models

import csv
import sys
import datetime
import pprint

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

    main_species = None
    for character in response.overview.characters:
        if character.primary_character and len(character.species_category) > 0:
            main_species = character.species_category[0]
            break

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
        main_species,
    ])

cis = 0
noncis = 0
complicated = 0
masculine_cis = 0
masculine_noncis = 0
masculine_complicated = 0
feminine_cis = 0
feminine_noncis = 0
feminine_complicated = 0
species_counts = {}

with open(sys.argv[1], 'wb') as f:
    writer = csv.writer(f)
    writer.writerow((
        'Age',
        'Gender Identity',
        'Gender Alignment',
        'Main Species'))
    for row in results:
        if row[0] == None or row[1] == None or row[2] is None:
            continue
        if row[2] == 'transgender':
            noncis += 1
            if row[1] in ['male', 'mostly_male']:
                masculine_noncis += 1
            elif row[1] in ['female', 'mostly_female']:
                feminine_noncis += 1
        if row[2] == 'complicated':
            complicated += 1
            if row[1] in ['male', 'mostly_male']:
                masculine_complicated += 1
            elif row[1] in ['female', 'mostly_female']:
                feminine_complicated += 1
        if row[2] == 'cisgender':
            cis += 1
            if row[1] in ['male', 'mostly_male']:
                masculine_cis += 1
            elif row[1] in ['female', 'mostly_female']:
                feminine_cis += 1
        if row[3] is not None:
            if row[3] not in species_counts:
                species_counts[row[3]] = {'cis': 0, 'noncis': 0}
            if row[2] in ['transgender', 'complicated']:
                species_counts[row[3]]['noncis'] += 1
            else:
                species_counts[row[3]]['cis'] += 1

        try:
            writer.writerow(row)
        except UnicodeEncodeError:
            continue

print "cis: %s (masculine %s, feminine %s)" \
    % (cis, masculine_cis, feminine_cis)
print "noncis: %s (masculine: %s, feminine: %s)" \
    % (noncis, masculine_noncis, feminine_noncis)
print "complicated: %s (masculine: %s, feminine: %s)" \
    % (complicated, masculine_complicated, feminine_complicated)

def pct(val, of):
    return int(float(val) / float(of) * 100.0)

print "="*80

print "cis: %s%% (masculine %s%%, feminine %s%%)" \
    % (
        pct(cis, len(results)),
        pct(masculine_cis, cis),
        pct(feminine_cis, cis)
    )
print "noncis: %s%% (masculine: %s%%, feminine: %s%%)" \
    % (
        pct(noncis, len(results)),
        pct(masculine_noncis, noncis),
        pct(feminine_noncis, noncis)
    )
print "complicated: %s%% (masculine: %s%%, feminine: %s%%)" \
    % (
        pct(complicated, len(results)),
        pct(masculine_complicated, complicated),
        pct(feminine_complicated, complicated)
    )

print "="*80

most_noncis = {'species': None, 'pct': 0, 'noncis': 0, 'cis': 0}
least_noncis = {'species': None, 'pct': 100, 'noncis': 0, 'cis': 0}
for species, res in species_counts.items():
    pct_noncis = pct(res['noncis'], res['noncis'] + res['cis'])
    species_counts[species]['pct-noncis'] = pct_noncis
    if res['cis'] + res['noncis'] < 100:
        continue
    if pct_noncis > most_noncis['pct']:
        most_noncis = {
            'species': species,
            'pct': pct_noncis,
            'noncis': res['noncis'],
            'cis': res['cis'],
        }
    if pct_noncis < least_noncis['pct']:
        least_noncis = {
            'species': species,
            'pct': pct_noncis,
            'noncis': res['noncis'],
            'cis': res['cis'],
        }

print "most non-cis species: %s (%s%% - %s non-cis vs %s cis)" \
    % (
        most_noncis['species'],
        most_noncis['pct'],
        most_noncis['noncis'],
        most_noncis['cis'],
    )

print "most cis species: %s (%s%% - %s cis vs %s non-cis)" \
    % (
        least_noncis['species'],
        100 - least_noncis['pct'],
        least_noncis['cis'],
        least_noncis['noncis'],
    )
pprint.pprint(species_counts)
