drop database if exists newdb;
create database newdb;
use newdb;
create table new_table(
user_id int,
user_name varchar(255),
password varchar(255)
);

insert into new_table values(1,"taro","123");
insert into new_table values(2,"jiro","456");
insert into new_table values(3,"hanako","789");