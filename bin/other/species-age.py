import csv
import json

recognized_animals = [
    'animal_wolf',
    'animal_redfox',
    'animal_greyfox',
    'animal_arcticfox',
    'animal_kitsune',
    'animal_otherfox',
    'animal_coyote',
    'animal_jackal',
    'animal_germanshepherd',
    'animal_husky',
    'animal_collie',
    'animal_otherdog',
    'animal_othercanine',
    'animal_tiger',
    'animal_lion',
    'animal_leopard',
    'animal_snowleopard',
    'animal_panther',
    'animal_cheetah',
    'animal_cougar',
    'animal_domesticcat',
    'animal_otherfeline',
    'animal_dragon',
    'animal_lizard',
    'animal_dinosaur',
    'animal_otherreptile',
    'animal_raccoon',
    'animal_skunk',
    'animal_badger',
    'animal_riverotter',
    'animal_seaotter',
    'animal_weasel',
    'animal_othermustelid',
    'animal_redpanda',
    'animal_othermusteloid',
    'animal_horse',
    'animal_deer',
    'animal_otherungulate',
    'animal_brownbear',
    'animal_grizzlybear',
    'animal_pandabear',
    'animal_polarbear',
    'animal_otherbear',
    'animal_mouse',
    'animal_rat',
    'animal_squirrel',
    'animal_other',
    'animal_raven',
    'animal_raptor',
    'animal_otherbird',
    'animal_rabbit',
    'animal_kangaroo',
    'animal_koala',
    'animal_othermarsupial',
    'animal_lemur',
    'animal_monkey',
    'animal_otherprimate',
    'animal_hyaena',
    'animal_bat',
    'animal_griffin',
]

results = []

with open("results.csv") as f:
    reader = csv.DictReader(f)
    for row in reader:
        try:
            result = {
                'age': int(2015.75 - float(row['birthdate'])),
                'species': [],
            }
        except ValueError:
            continue
        for species in recognized_animals:
            if row[species] == 'True':
                result['species'].append(species.split('_')[1])
        results.append(result)

print json.dumps(results)
