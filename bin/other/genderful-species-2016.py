from etc.furrypoll2016 import models


responses = models.Response.objects
results = []
n = 0
n_with_species = 0


# Loop through all of the data we have, one response at a time.
while True:
    # Get a single result from the dataset.
    try:
        response = responses.next()
    except:
        break

    # Keep track of how many responses we're dealing with.
    n += 1

    # Respondents can have multiple characters, so loop through them.
    main_species = None
    for character in response.overview.characters:
        # One of the characters may be marked as the primary character. If this
        # one is primary, use it, but only if it has a species category. The
        # species category is a general category, such as wolf, fox, etc.
        # There is also a 'species text' field which contains the specific name
        # of the species.
        if character.primary_character and \
                len(character.species_category) > 0:
            main_species = character.species_category[0]
            # Keep track of how many responses with species we have
            n_with_species += 1
            break

    # Add a row to the result set. It will contain the respondent's gender
    # identity, their gender alignment (cis/non-cis/it's complicated), and
    # the species we selected above.
    #
    # As a note here, the gender questions, as with many others, allow for a
    # a set of answers for the respondent to choose from, as well as a free
    # text field for individual answers. Responses where the user typed in
    # an answer are marked as 'subjective' and discarded here.
    results.append([
        response.overview.gender_identity.value if \
            response.overview.gender_identity and \
            not response.overview.gender_identity.subjective else \
            None,
        response.overview.gender_alignment.value if \
            response.overview.gender_alignment and \
            not response.overview.gender_alignment.subjective else \
            None,
        main_species,
    ])

# Let's set up some initial variables for what we want to find.
cis = 0.0
noncis = 0.0
complicated = 0.0
masculine_cis = 0.0
masculine_noncis = 0.0
masculine_complicated = 0.0
feminine_cis = 0.0
feminine_noncis = 0.0
feminine_complicated = 0.0
species_counts = {}

# Loop through all of our results, one response at a time.
for row in results:

    # All fields are required
    if row[0] == None or row[1] == None or row[2] is None:
        continue

    # If the response for gender alignment is 'transgender', collect the gender
    # identities in our variables. Do the same below for 'complicated' and
    # 'cisgender'.
    #
    # As a note here, 'transgender' is only the key in the database. The
    # question text specifically asked if the respondent was "not cisgender",
    # in order to allow for genderqueer, genderfluid, agender, neutrois, etc.
    # answers.
    if row[1] == 'transgender':
        noncis += 1.0
        if row[0] in ['male', 'mostly_male']:
            masculine_noncis += 1.0
        elif row[0] in ['female', 'mostly_female']:
            feminine_noncis += 1.0
    if row[1] == 'complicated':
        complicated += 1.0
        if row[0] in ['male', 'mostly_male']:
            masculine_complicated += 1.0
        elif row[0] in ['female', 'mostly_female']:
            feminine_complicated += 1.0
    if row[1] == 'cisgender':
        cis += 1.0
        if row[0] in ['male', 'mostly_male']:
            masculine_cis += 1.0
        elif row[0] in ['female', 'mostly_female']:
            feminine_cis += 1.0

    # Add data to our species list. First, check if the respondent's species
    # category is already in the list. If not, add an empty representation.
    # We want counts of how many of that species are cisgender and how many
    # are not cisgender
    if row[2] not in species_counts:
        species_counts[row[2]] = {'cis': 0.0, 'noncis': 0.0}

    # If the respondent chose 'transgender' or 'complicated', add them to the
    # non-cisgender count; otherwise, add them to the cisgender count
    if row[1] in ['transgender', 'complicated']:
        species_counts[row[2]]['noncis'] += 1.0
    else:
        species_counts[row[2]]['cis'] += 1.0

# Print some basic numbers. These will help give us an overview of the dataset
# before it's broken down into species.

# First, print the number of respondents who are cis, non-cis, and complicated
# and how many per category identify as masculine and feminine.
print '        cis: {:5.0f} (masculine: {:5.0f}, feminine: {:5.0f})'.format(
    cis, masculine_cis, feminine_cis)
print '     noncis: {:5.0f} (masculine: {:5.0f}, feminine: {:5.0f})'.format(
    noncis, masculine_noncis, feminine_noncis)
print 'complicated: {:5.0f} (masculine: {:5.0f}, feminine: {:5.0f})'.format(
    complicated, masculine_complicated, feminine_complicated)

# Print 80 equal signs as a border between rows
print '='*80

# Next, print the same information as above, only broken down into percentages.
print '        cis: {:2.2%} (masculine: {:2.2%}, feminine: {:2.2%})'.format(
        cis / len(results),
        masculine_cis / cis,
        feminine_cis / cis)
print '     noncis: {:2.2%} (masculine: {:2.2%}, feminine: {:2.2%})'.format(
        noncis / len(results),
        masculine_noncis / noncis,
        feminine_noncis / noncis)
print 'complicated: {:2.2%} (masculine: {:2.2%}, feminine: {:2.2%})'.format(
        complicated / len(results),
        masculine_complicated / complicated,
        feminine_complicated / complicated)

print '='*80

# Finally, let's get the data at the heart of our question.
#
# Start with some empty variables for our most and least non-cisgender species.
most_noncis = {'species': None, 'pct': 0.0, 'noncis': 0.0, 'cis': 0.0}
least_noncis = {'species': None, 'pct': 1.0, 'noncis': 0.0, 'cis': 0.0}

# Loop through the all of the species we have
for species, res in species_counts.items():

    # Find out the percentage of the species that is non-cisgender
    # (number of non-cis respondents divided by the total number of
    # respondents), and store that number in that species' result for now.
    pct_noncis = res['noncis'] / (res['noncis'] + res['cis'])
    species_counts[species]['pct-noncis'] = pct_noncis

    # Skip species with less than 100% respondents. Small-number statistics may
    # lead us to incorrect assumptions.
    if res['cis'] + res['noncis'] < 100:
        continue

    # If this species percent-non-cisgender is greater than the current tally
    # for the most non-cisgender species, replace that tally with the current
    # species.
    if pct_noncis > most_noncis['pct']:
        most_noncis = {
            'species': species,
            'pct': pct_noncis,
            'noncis': res['noncis'],
            'cis': res['cis'],
        }

    # If this species percent-non-cisgender is less than the current tally
    # for the least non-cisgender species, replace that tally with the current
    # species.
    if pct_noncis < least_noncis['pct']:
        least_noncis = {
            'species': species,
            'pct': pct_noncis,
            'noncis': res['noncis'],
            'cis': res['cis'],
        }

# Finally, print out the species and percentages for most and least
# non-cisgender species
print ('most non-cis species: {:<10} at {:>2.2%} non-cisgender '
       '({:5.0f} non-cis vs {:5.0f} cis)').format(
        most_noncis['species'],
        most_noncis['pct'],
        most_noncis['noncis'],
        most_noncis['cis'])

print ('    most cis species: {:<10} at  {:>2.2%} non-cisgender '
       '({:5.0f} non-cis vs {:5.0f} cis)').format(
        least_noncis['species'],
        least_noncis['pct'],
        least_noncis['noncis'],
        least_noncis['cis'])

print '='*80

# Print the number of responses.
print "n = {}".format(n)
print "n (with species) = {}".format(n_with_species)
