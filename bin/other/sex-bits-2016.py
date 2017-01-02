from etc.furrypoll2016 import models

results = {}
responses = models.Response.objects
n = 0

while True:
    try:
        response = responses.next()
    except:
        break
    touchpoints = map(lambda tp: tp.touchpoint_type, response.metadata.touchpoints)
    if -3 in touchpoints:
        n += 1
    if response.sexuality and response.sexuality.interests:
        for interest in response.sexuality.interests:
            if interest.option not in results:
                results[interest.option] = {}
            for value in interest.value:
                if value not in results[interest.option]:
                    results[interest.option][value] = 0
                results[interest.option][value] += 1

print "year,option,interested,consume media,create media,participate online,participate in person"
for interest, levels in results.items():
    print "2016,{},{},{},{},{},{}".format(
        interest,
        levels['interested'],
        levels['consume_media'],
        levels['create_media'],
        levels['participate_online'],
        levels['participate_inperson'])

print "n={}".format(n)
