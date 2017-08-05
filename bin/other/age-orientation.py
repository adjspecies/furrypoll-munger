import csv
import math
import sys

data = []

with open(sys.argv[1], 'rb') as f:
    reader = csv.DictReader(f)
    for row in reader:
        if row['year'] != '2016':
            continue

        if row['birthdate'] and row['orientation']:
            data.append({
                'age': 2016 - int(math.floor(float(row['birthdate']))),
                'orientation': row['orientation'],
            })

n = 0
with open(sys.argv[2], 'wb') as f:
    writer = csv.DictWriter(f, ['age', 'orientation'])
    writer.writeheader()
    for row in data:
        n += 1
        writer.writerow(row)

agg = {}
for row in data:
    if row['orientation'] in agg:
        agg[row['orientation']]['count'] += 1
        agg[row['orientation']]['age_sum'] += row['age']
    else:
        agg[row['orientation']] = {
            'count': 1,
            'age_sum': row['age'],
        }

with open(sys.argv[2] + 'avg.csv', 'wb') as f:
    writer = csv.writer(f)
    writer.writerow(['orientation', 'count', 'pct', 'avg_age'])
    for k, v in agg.items():
        v['age_avg'] = float(v['age_sum']) / float(v['count'])
        v['pct'] = float(v['count']) / n * 100
        writer.writerow([k, v['count'], v['pct'], v['age_avg']])
