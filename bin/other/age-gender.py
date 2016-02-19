import csv
import math
import sys

data = []

with open(sys.argv[1], 'rb') as f:
    reader = csv.DictReader(f)
    for row in reader:
        if row['year'] != '2015':
            continue

        if row['birthdate'] and row['gender']:
            data.append({
                'age': 2016 - int(math.floor(float(row['birthdate']))),
                'gender': row['gender'],
            })

with open(sys.argv[2], 'wb') as f:
    writer = csv.DictWriter(f, ['age', 'gender'])
    writer.writeheader()
    for row in data:
        writer.writerow(row)
