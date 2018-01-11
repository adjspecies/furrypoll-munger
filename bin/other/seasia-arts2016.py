import csv
import math


seasia_countries = ['vn', 'id', 'th', 'sg', 'my', 'ph', 'mm', 'kh', 'la', 'bn', 'tl']
fieldnames = [
    'furry_status',
    'age',
    'gender',
    'gender_alignment',
    'orientation',
    'country',
    'religion',
    'occupation',
    'education',
    'howfurry',
    'howoften_write',
    'howoften_draw',
    'opinion_artwork',
    'opinion_writing',
    'opinion_online_communities',
    'opinion_conventions',
    'opinion_fursuiting',
    'importance_artwork',
    'importance_writing',
    'importance_online_communities',
    'importance_conventions',
    'importance_fursuiting',
]

def parse(row, into):
    if not row['birthdate']:
        row['birthdate'] = 2017
    into.writerow({
        'furry_status': row['furry_status'],
        'age': 2017 - int(math.floor(float(row['birthdate']))),
        'gender': row['gender'],
        'gender_alignment': row['gender_alignment'],
        'orientation': row['orientation'],
        'country': row['country'],
        'religion': row['religion'],
        'occupation': row['occupation'],
        'education': row['education'],
        'howfurry': row['howfurry'],
        'howoften_write': row['howoften_write'],
        'howoften_draw': row['howoften_draw'],
        'opinion_artwork': row['opinion_artwork'],
        'opinion_writing': row['opinion_writing'],
        'opinion_online_communities': row['opinion_online_communities'],
        'opinion_conventions': row['opinion_conventions'],
        'opinion_fursuiting': row['opinion_fursuiting'],
        'importance_artwork': row['importance_artwork'],
        'importance_writing': row['importance_writing'],
        'importance_online_communities': row['importance_online_communities'],
        'importance_conventions': row['importance_conventions'],
        'importance_fursuiting': row['importance_fursuiting'],
    })

with open('arts2016seasia.csv', 'wb') as seasia_file, open('arts2016total.csv', 'wb') as total_file, open('results.csv') as results_file:
    seasia_csv = csv.DictWriter(seasia_file, fieldnames)
    seasia_csv.writeheader()
    total_csv = csv.DictWriter(total_file, fieldnames)
    total_csv.writeheader()
    results_csv = csv.DictReader(results_file)
    for row in results_csv:
        if row['year'] != '2016':
            continue
        parse(row, total_csv)
        if row['country'] in seasia_countries:
            parse(row, seasia_csv)
