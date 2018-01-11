from etc.furrypoll2015 import models

count = 0
responses = models.Response.objects
n = 0

while True:
    try:
        response = responses.next()
    except:
        break
    touchpoints = map(lambda tp: tp.touchpoint_type, response.metadata.touchpoints)
    if -1 not in touchpoints:
        continue
    if 'anthrocon14' in response.overview.conventions:
            count += 1
    n += 1


print('n={} anthrocon={}'.format(n, count))
