CREATE TABLE make_index(
    id int auto_increment primary key not null,
    name varchar(60) not null,
    email varchar(60) not null,
    phone varchar(13) null,
    index(name)

);

-- indexing  is the most important thing
-- index  a specfic column it will sort the column
-- so the search will be most efficient
-- sorting is two type physical sorting and the logical sorting
-- primary key is the physical sorting and we can see that
-- but the logical sorting is different and we cant see that 
-- but multiple logical sorting can slow the insert update and delete
-- cause we have to sort multiple time
-- most imporant column will be have to be indexing
-- 

CREATE TABLE make_index(
    id int auto_increment primary key not null,
    name varchar(60) not null,
    email varchar(60) not null,
    phone varchar(13) null,
    index(name)

);



-- unique key embed key
-- id 
-- email
-- unique
-- in table the column other than the primary key which is unique 
-- so we can search the database if it is unique
-- then it will not let you do duplicate

 CREATE TABLE make_unique(
    id int auto_increment primary key not null,
    name varchar(60) not null,
    email varchar(60) not null unique,
    phone varchar(13) null unique,
    index(name)

);


-- foreign key

-- alter table -- this access will be for developer -- not the user

-- changing the table make_unique

alter table make_unique add column passport_number varchar(60) not null unique;

--multiple add

alter table make_unique add column id_number varchar(60) not null,add column pager_number varchar(60) not null unique;


-- drop 

alter table make_unique drop column id_number varchar(60) not null,drop column pager_number varchar(60) not null unique;

-- create a status table

create table fb_status(
    id int primary key auto_increment,
    body varchar(60)
);


-- update the statuc


update fb_status set body = "hi hello" where id=1;


-- update multiple column

update fb_status set body='hi hello',modification_date='2019-10-10' where id=1;



--modify table for changing size 