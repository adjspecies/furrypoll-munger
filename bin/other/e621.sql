drop table if exists submissions;
drop table if exists tags;
drop table if exists tagged_submissions;
drop table if exists sources;
drop table if exists submission_sources;
drop table if exists artists;
drop table if exists submission_artists;

create table submissions (
    id integer not null,
    sample_width integer,
    sample_height integer,
    sample_url text not null,
    preview_width integer,
    preview_height integer,
    preview_url text not null,
    width integer,
    height integer,
    file_url text not null,
    has_notes boolean not null,
    has_comments boolean not null,
    fav_count integer not null,
    change integer not null,
    status text not null,
    parent_id integer null,
    has_children boolean not null,
    file_size integer not null,
    creator_id integer not null,
    created_at_n integer not null,
    created_at_s integer not null,
    md5 text not null,
    description text not null,
    rating text not null,
    file_ext text not null,
    score integer not null,
    author text not null
);
create table tags (
    tag text not null
);
create table tagged_submissions (
    submission integer not null,
    tag integer not null,
    foreign key(submission) references submissions,
    foreign key(tag) references tags
);
create table sources (
    source text not null
);
create table submission_sources (
    submission integer not null,
    source integer not null,
    foreign key(submission) references submissions,
    foreign key(source) references sources
);
create table artists (
    artist text not null
);
create table submission_artists (
    submission integer not null,
    artist integer not null,
    foreign key(submission) references submissions,
    foreign key(artist) references artists
);
