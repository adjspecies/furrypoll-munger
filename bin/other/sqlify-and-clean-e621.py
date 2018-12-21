import json
import sqlite3
import sys


jsonfile = sys.argv[1]
dbfile = sys.argv[2]

db = sqlite3.connect(dbfile)

seen_md5s = []
seen_tags = []
seen_sources = []
seen_artists = []
with open(jsonfile) as jsonfd:
    source = json.load(jsonfd)
    c = db.cursor()
    for submission in source:
        if submission['md5'] in seen_md5s:
            continue
        seen_md5s.append(submission['md5'])
        print('Processing ID {}'.format(submission['id']))
        tags = submission['tags'].split(' ')
        c.execute('''
            insert into submissions values (
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?
            )''',
            (
                submission['id'],
                submission['sample_width'],
                submission['sample_height'],
                submission['sample_url'],
                submission['preview_width'],
                submission['preview_height'],
                submission['preview_url'],
                submission['width'],
                submission['height'],
                submission['file_url'],
                submission['has_notes'],
                submission['has_comments'],
                submission['fav_count'],
                submission['change'],
                submission['status'],
                submission['parent_id'],
                submission['has_children'],
                submission['file_size'],
                submission['creator_id'],
                submission['created_at']['n'],
                submission['created_at']['s'],
                submission['md5'],
                submission['description'],
                submission['rating'],
                submission['file_ext'],
                submission['score'],
                submission['author']
            ))
        submission_id = c.lastrowid
        for tag in tags:
            print('  Adding tag: {}'.format(tag))
            if tag not in seen_tags:
                print('    New tag, creating...')
                c.execute('''insert into tags values (?)''', (tag,))
                seen_tags.append(tag)
            c.execute('''select rowid from tags where tag=?''', (tag,))
            tag_id = c.fetchone()[0]
            c.execute('''
                insert into tagged_submissions values (
                    ?,
                    ?
                )''', (submission_id, tag_id))
        if 'sources' in submission:
            for source in submission['sources']:
                print('  Adding source: {}'.format(source))
                if source not in seen_sources:
                    print('    New source, creating...')
                    c.execute('''insert into sources values (?)''', (source,))
                    seen_sources.append(source)
                c.execute('''select rowid from sources where source=?''', (source,))
                source_id = c.fetchone()[0]
                c.execute('''
                    insert into submission_sources values (
                        ?,
                        ?
                    )''', (submission_id, source_id))
        if 'artist' in submission:
            for artist in submission['artist']:
                print('  Adding artist: {}'.format(artist))
                if artist not in seen_artists:
                    print('    New artist, creating...')
                    c.execute('''insert into artists values (?)''', (artist,))
                    seen_artists.append(artist)
                c.execute('''select rowid from artists where artist=?''', (artist,))
                artist_id = c.fetchone()[0]
                c.execute('''
                    insert into submission_artists values (
                        ?,
                        ?
                    )''', (submission_id, artist_id))

db.commit()
db.close()
