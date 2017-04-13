import csv
import json
import math
import sys

results = {
    'n': {
        '2009': 0,
        '2010': 0,
        '2011': 0,
        '2012': 0,
        '2013': 0,
        '2015': 0,
        '2016': 0
    },
    'demographics': {
        'age': {
            '2009': {},
            '2010': {},
            '2011': {},
            '2012': {},
            '2013': {},
            '2015': {},
            '2016': {}
        },
        'biological_sex': {
            '2009': {},
            '2010': {},
            '2011': {},
            '2012': {},
            '2013': {},
            '2015': {},
        },
        'gender_identity': {
            '2009': {},
            '2010': {},
            '2011': {},
            '2012': {},
            '2013': {},
            '2015': {},
            '2016': {}
        },
        'gender_alignment': {
            '2016': {},
        },
        'sexual_orientation': {
            '2009': {},
            '2010': {},
            '2011': {},
            '2012': {},
            '2013': {},
            '2015': {},
            '2016': {}
        },
        'race': {
            '2009': {},
            '2010': {},
            '2011': {},
            '2012': {},
            '2013': {},
            '2015': {},
            '2016': {}
        },
        'relationship_status': {
            '2009': {},
            '2010': {},
            '2011': {},
            '2012': {},
            '2013': {},
            '2015': {},
            '2016': {}
        },
        'polyamory': {
            'sexuality': {
                '2013': {},
                #'2015': {},
            },
            'romantic': {
                '2013': {},
                #'2015': {},
            }
        },
        'political_views': {
            'social': {
                '2010': {},
                '2011': {},
                '2012': {},
                '2013': {},
                '2015': {},
                '2016': {}
            },
            'economic': {
                '2010': {},
                '2011': {},
                '2012': {},
                '2013': {},
                '2015': {},
                '2016': {}
            },
        }
    },
    'furry_metadata': {
        'furry_status': {
            '2015': {},
            '2016': {}
        },
        'partner_is_furry': {
            '2009': {},
            '2010': {},
            '2011': {},
            '2012': {},
            '2013': {},
            '2015': {},
            '2016': {}
        },
    },
    'perception_of_fandom': {
        'importance_of_sex': {
            'self': {
                '2009': {},
                '2010': {},
                '2011': {},
                '2012': {},
                '2013': {},
                '2015': {},
                '2016': {}
            },
            'others': {
                '2009': {},
                '2010': {},
                '2011': {},
                '2012': {},
                '2013': {},
                '2015': {},
                '2016': {}
            },
            'public': {
                '2009': {},
                '2010': {},
                '2011': {},
                '2012': {},
                '2013': {},
                '2015': {},
                '2016': {}
            },
        }
    },
}

with open(sys.argv[1], 'rb') as f:
    """
    Pertinent Columns:
    year,furry_status,birthdate,biosex,gender,orientation,race_white,race_black,race_hispanic,race_asian,race_native,religion,politics_social,politics_economic,occupation,education,relationship,partner_is_furry,polyamorous_romantic,polyamorous_sexual,seximportance_overall,seximportance_personal,seximportance_others,seximportance_public
    """
    reader = csv.DictReader(f)
    for row in reader:
        year = row['year']
        results['n'][year] += 1

        age = row['birthdate']
        if age:
            age = str(int(math.floor(float(age))))
            if age and int(age) > 1900 and int(age) < 2015:
                if age in results['demographics']['age'][year]:
                    results['demographics']['age'][year][age] += 1
                else:
                    results['demographics']['age'][year][age] = 1

        biosex = row['biosex']
        if biosex and year in results['demographics']['biological_sex']:
            if biosex in results['demographics']['biological_sex'][year]:
                results['demographics']['biological_sex'][year][biosex] += 1
            else:
                results['demographics']['biological_sex'][year][biosex] = 1

        gender = row['gender']
        if gender:
            if gender in results['demographics']['gender_identity'][year]:
                results['demographics']['gender_identity'][year][gender] += 1
            else:
                results['demographics']['gender_identity'][year][gender] = 1

        gender = row['gender_alignment']
        if gender and year in results['demographics']['gender_alignment']:
            if gender in results['demographics']['gender_alignment'][year]:
                results['demographics']['gender_alignment'][year][gender] += 1
            else:
                results['demographics']['gender_alignment'][year][gender] = 1

        orientation = row['orientation']
        if orientation:
            if orientation in results['demographics']['sexual_orientation'][year]:
                results['demographics']['sexual_orientation'][year][orientation] += 1
            else:
                results['demographics']['sexual_orientation'][year][orientation] = 1

        for i in ['white', 'black', 'hispanic', 'asian', 'native']:
            race = row['race_' + i]
            if race == 'True':
                if i in results['demographics']['race'][year]:
                    results['demographics']['race'][year][i] += 1
                else:
                    results['demographics']['race'][year][i] = 1

        relationship_status = row['relationship']
        if relationship_status:
            if relationship_status in results['demographics']['relationship_status'][year]:
                results['demographics']['relationship_status'][year][relationship_status] += 1
            else:
                results['demographics']['relationship_status'][year][relationship_status] = 1

        if year == '2013':
            poly_sexual = row['polyamorous_sexual']
            if poly_sexual:
                if poly_sexual in results['demographics']['polyamory']['sexuality'][year]:
                    results['demographics']['polyamory']['sexuality'][year][poly_sexual] += 1
                else:
                    results['demographics']['polyamory']['sexuality'][year][poly_sexual] = 1
            poly_romantic = row['polyamorous_romantic']
            if poly_romantic:
                if poly_romantic in results['demographics']['polyamory']['romantic'][year]:
                    results['demographics']['polyamory']['romantic'][year][poly_romantic] += 1
                else:
                    results['demographics']['polyamory']['romantic'][year][poly_romantic] = 1

        politics_social = row['politics_social']
        if politics_social:
            if politics_social in results['demographics']['political_views']['social'][year]:
                results['demographics']['political_views']['social'][year][politics_social] += 1
            else:
                results['demographics']['political_views']['social'][year][politics_social] = 1


        politics_economic = row['politics_economic']
        if politics_economic:
            if politics_economic in results['demographics']['political_views']['economic'][year]:
                results['demographics']['political_views']['economic'][year][politics_economic] += 1
            else:
                results['demographics']['political_views']['economic'][year][politics_economic] = 1

        if year in ['2015', '2016']:
            furry_status = row['furry_status']
            if furry_status:
                if furry_status in results['furry_metadata']['furry_status'][year]:
                    results['furry_metadata']['furry_status'][year][furry_status] += 1
                else:
                    results['furry_metadata']['furry_status'][year][furry_status] = 1

        partner = row['partner_is_furry']
        if partner == '':
            partner = 'False'
        if partner in results['furry_metadata']['partner_is_furry'][year]:
            results['furry_metadata']['partner_is_furry'][year][partner] += 1
        else:
            results['furry_metadata']['partner_is_furry'][year][partner] = 1

        ios = row['seximportance_personal']
        if ios:
            if ios in results['perception_of_fandom']['importance_of_sex']['self'][year]:
                results['perception_of_fandom']['importance_of_sex']['self'][year][ios] += 1
            else:
                results['perception_of_fandom']['importance_of_sex']['self'][year][ios] = 1

        ios = row['seximportance_others']
        if ios:
            if ios in results['perception_of_fandom']['importance_of_sex']['others'][year]:
                results['perception_of_fandom']['importance_of_sex']['others'][year][ios] += 1
            else:
                results['perception_of_fandom']['importance_of_sex']['others'][year][ios] = 1

        ios = row['seximportance_public']
        if ios:
            if ios in results['perception_of_fandom']['importance_of_sex']['public'][year]:
                results['perception_of_fandom']['importance_of_sex']['public'][year][ios] += 1
            else:
                results['perception_of_fandom']['importance_of_sex']['public'][year][ios] = 1

print json.dumps(results)
# import pprint
# print pprint.pprint(results['demographics']['age']['2013'])
