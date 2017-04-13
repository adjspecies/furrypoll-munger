import csv
import sys

monopoly = {
    'romantic': {
        'True': 0,
        'None': 0
    },
    'sexual': {
        'True': 0,
        'None': 0
    },
}
n = 0

with open(sys.argv[1], 'rb') as f:
    reader = csv.DictReader(f)
    for result in reader:
        if result['year'] != '2016':
            continue
        n += 1
        if result['polyamorous_romantic'] == '':
            result['polyamorous_romantic'] = None
        if result['polyamorous_sexual'] == '':
            result['polyamorous_sexual'] = None
        monopoly['romantic'][str(result['polyamorous_romantic'])] += 1
        monopoly['sexual'][str(result['polyamorous_sexual'])] += 1

print('''
n = {}
Romantic:
    poly: {} ({:.2%})
    mono or no answer: {} ({:.2%})
Sexual:
    poly: {} ({:.2%})
    mono or no answer: {} ({:.2%})
'''.format(
    n,
    monopoly['romantic']['True'],
    float(monopoly['romantic']['True']) / n,
    monopoly['romantic']['None'],
    float(monopoly['romantic']['None']) / n,
    monopoly['sexual']['True'],
    float(monopoly['sexual']['True']) / n,
    monopoly['sexual']['None'],
    float(monopoly['sexual']['None']) / n))
