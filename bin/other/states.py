import csv

states = {}
us_n = 0

with open('output/results.csv', 'rb') as f:
    results = csv.DictReader(f)
    for row in results:
        if row['year'] != '2015' or row['country'] != 'us':
            continue
        us_n += 1
        if row['state'] in states:
            states[row['state']] += 1
        else:
            states[row['state']] = 1

for state, count in states.items():
    print "{}: {}".format(state.upper(), count)

print "US (n): {}".format(us_n)
