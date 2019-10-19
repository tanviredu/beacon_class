
    create table Department(id int primary key auto_increment,name varchar(60) not null);
    create table doctor(id int primary key auto_increment,name varchar(60) not null,department int ,foreign key department references Department(id));
    create table patient(patient_id int primary key auto_increment,name varchar(60) not null,doctor int,foreign key doctor references doctor(id));


    -- make reference with only primary key not the name
    -- of course with the primary key no name no varchar value
    -- you have to fetch the value by seleting the primary key
    -- because the primary key is the unique
    -- name cant be unique
     

