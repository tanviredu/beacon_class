create database University;

create  table registrations(
    id int primary key auto_increment,
    name varchar(60),
    email varchar(60),
);

create table students (id int primary key auto_increment, joined_at date,
    registration_id int unique, -- this will be connected to the id of the registration
    foreign key (registration_id) references registrations(id)
);

-- if i give unique then its one to one
-- this is one to one
-- have to be foreign key and unique



create  table registrations(
    id int primary key auto_increment,
    name varchar(60),
    email varchar(60),
);

-- one table can have related to multiple column like  email have multiple subscription


create table students (id int primary key auto_increment, joined_at date,
    registration_id int, -- this will be connected to the id of the registration
    foreign key (registration_id) references registrations(id)
);


-- if this is not unique then it can be one to many so one key can have multiple relation

--like tanvir -id-1 (registration)

--(student)
--joined at 20-12-12 id 1
--joined at 20-9-9 id 1

-- if foreign key is inserted then you cannt add the name and email in the student you have to
-- add in the registration table 








---------------------------------------------------



create  table registrations(
    id int primary key auto_increment,
    name varchar(60),
    email varchar(60),
);

-- one table can have related to multiple column like  email have multiple subscription


create table students (id int primary key auto_increment, joined_at date,
    registration_id int, -- this will be connected to the id of the registration
    foreign key registration_id references registrations(id) on delete cascade;
);

-- if there is no relation then if one is deleted then other still will be there
-- but if there is foreign key and on delete cascade then it will be removed from other column
-- if we delete the parent the whole  child will be deleted but if the child is deleted 
-- no parent will be deleted





-- many to many relationsip (mysql has no default many to many) it does by joining other table
-- in mysql they call middle table in MSSQL its called  join table 




--  many to many

-- this is called cross join 

-- one student can contribute multiple thewsis paper
-- multiple thesis paper can have single contributor;


create table authors(
    id int primary key auto_increment,
    name varchar(60)
);

create table books (
    id int primary key auto_increment,
    name varchar(60)

);

-- now make another table to join two


-- by this table we can join
create table author_book(
    author_id int,
    book_id int,
foreign key author_id references authors(id),
foreign key book_id references books(id)

);





-- one to one defination
-- joining query
Select * from books join authors on books.author_id==author_id;



SELECT books.id ,books.name,authors.name from books join authors on <logic> books.author_id==author.id;


SELECT books.id ,books.name,authors.name from books join authors on books.author_id==authod.id where book.name='js';


-- if we give join then all the matching  but left join and rightr join case

-- in left join left e sob thak be right e matched thakbe
-- ruigh join  right e sob thakbe left e matched thakbe