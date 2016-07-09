from furrypoll2016 import models

responses = models.Response.objects

while True:
    try:
        response = responses.next()
        touchpoints = map(lambda tp: tp.touchpoint_type, response.metadata.touchpoints)
        if (-5 in touchpoints or response.overview is None):
            print "Deleting cancelled: {}".format(response.id)
            response.delete()
    except:
        break
