import csv

nationalities = {
    '2009': {
        'n': 0.0,
        'nationalities': {},
    },
    '2010': {
        'n': 0.0,
        'nationalities': {},
    },
    '2011': {
        'n': 0.0,
        'nationalities': {},
    },
    '2012': {
        'n': 0.0,
        'nationalities': {},
    },
    '2013': {
        'n': 0.0,
        'nationalities': {},
    },
}

with open('../results.csv', 'rb') as f:
    results = csv.DictReader(f)
    for row in results:
        year = str(row['year'])
        country = str(row['country'])
        nationalities[year]['n'] += 1.0
        if country != '':
            if country not in nationalities[year]['nationalities']:
                nationalities[year]['nationalities'][country] = 0.0
            nationalities[year]['nationalities'][country] += 1.0

for year in ['2009', '2010', '2011', '2012', '2013']:
    value = nationalities[year]
    result = sorted(value['nationalities'].items(), key=lambda x: x[1],
                           reverse=True)
    print "\n{}:".format(year)
    for i in result:
        print "{}: {:3.2f}%".format(i[0], i[1] / value['n'] * 100)
