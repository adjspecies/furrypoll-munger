import MySQLdb
import json

import pprint


vault = {
    'slug': 'furrypoll-2009',
    'name': 'Results from the 2009 Furry Poll',
    'description': 'The 2009 Furry Poll was run by Alex Osaki.',
    'fields': []
}
db = MySQLdb.connect(host='localhost',
                     user='vagrant',
                     passwd='',
                     db='furrypoll2009_2012')
cur = db.cursor()
cur.execute('select * from furrypoll2009')
numrows = cur.rowcount
for i in range(0, numrows):
    row = cur.fetchone()
    participant_id = row.pop(0)
    ip = row.pop(0)
    response_date = row.pop(0)

cur.close()
db.close()
