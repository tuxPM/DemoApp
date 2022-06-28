create table if not exists deployment (
    id int primary key auto_incrmeent,
    name varchar(50),
    date datetime default current_timestamp 
);