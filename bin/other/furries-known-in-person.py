import csv
import math
import sys

data = {}

with open(sys.argv[1], 'rb') as f:
    reader = csv.DictReader(f)
    for row in reader:
        if row['year'] != '2013':
            continue

        if row['furries_known_in_person']:
            fkip = row['furries_known_in_person']
            if int(fkip) >= 0 and int(fkip) < 500:
                if row['furries_known_in_person'] in data:
                    data[row['furries_known_in_person']] += 1
                else:
                    data[row['furries_known_in_person']] = 1

with open(sys.argv[2], 'wb') as f:
    ordered_data = sorted(data.items(), key=lambda x: int(x[0]))
    writer = csv.writer(f)
    writer.writerow(['furries_known_in_person', 'count'])
    for row in ordered_data:
        writer.writerow(row)
