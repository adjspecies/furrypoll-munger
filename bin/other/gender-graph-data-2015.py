import csv
import sys

from etc.furrypoll2015 import models

fields = [
    'male',
    'female',
    'male_quantized',
    'female_quantized',
]

expression = []
identity = []
in_furry = []

responses = models.Response.objects

while True:
    try:
        response = responses.next()
        if response.overview is None:
            continue
        gid = response.overview.gender_identity_coords
        gex = response.overview.gender_expression_coords
        gif = response.overview.gender_in_furry_coords
        if gid:
            identity.append({
                'male': gid.male,
                'female': gid.female,
                'male_quantized': gid.male_quantized,
                'female_quantized': gid.female_quantized,
            })
        if gex:
            expression.append({
                'male': gex.male,
                'female': gex.female,
                'male_quantized': gex.male_quantized,
                'female_quantized': gex.female_quantized,
            })
        if gif:
            in_furry.append({
                'male': gif.male,
                'female': gif.female,
                'male_quantized': gif.male_quantized,
                'female_quantized': gif.female_quantized,
            })
    except:
        break

with open(sys.argv[1] + '/gid2015.csv', 'wb') as f:
    csvfile = csv.DictWriter(f, fieldnames=fields)
    csvfile.writeheader()
    for row in identity:
        csvfile.writerow(row)

with open(sys.argv[1] + '/gex2015.csv', 'wb') as f:
    csvfile = csv.DictWriter(f, fieldnames=fields)
    csvfile.writeheader()
    for row in expression:
        csvfile.writerow(row)

with open(sys.argv[1] + '/gif2015.csv', 'wb') as f:
    csvfile = csv.DictWriter(f, fieldnames=fields)
    csvfile.writeheader()
    for row in in_furry:
        csvfile.writerow(row)
