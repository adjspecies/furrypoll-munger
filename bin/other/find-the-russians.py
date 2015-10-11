import csv

russians = {
    '2009': {
        'n': 0.0,
        'russians': 0.0,
    },
    '2010': {
        'n': 0.0,
        'russians': 0.0,
    },
    '2011': {
        'n': 0.0,
        'russians': 0.0,
    },
    '2012': {
        'n': 0.0,
        'russians': 0.0,
    },
    '2013': {
        'n': 0.0,
        'russians': 0.0,
    },
}

with open('../results.csv', 'rb') as f:
    results = csv.DictReader(f)
    for row in results:
        year = str(row['year'])
        russians[year]['n'] += 1.0
        if row['country'] == 'ru':
            russians[year]['russians'] += 1.0

for year in ['2009', '2010', '2011', '2012', '2013']:
    value = russians[year]
    print "{}: {:3.2f}%".format(year, value['russians'] / value['n'] * 100)
