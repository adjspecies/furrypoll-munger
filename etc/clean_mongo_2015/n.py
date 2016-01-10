from furrypoll2015 import models

responses = models.Response.objects
n = 0

while True:
    try:
        response = responses.next()
        touchpoints = map(lambda tp: tp.touchpoint_type, response.metadata.touchpoints)
        if -4 in touchpoints:
            n += 1
            if -5 in touchpoints:
                print "Canceled and also completed, hmm?"
    except:
        break

print "n = {}".format(n)
