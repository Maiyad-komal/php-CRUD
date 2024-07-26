drop database if exists`person`;
create database `person`;
use `person`;
create table    
`personDetails`(
    `id` int primary key auto_increment,
    `name` varchar(255) not null,
    `address`varchar(255) not null,
    `pincode`varchar(255) not null,
    `state`varchar(50) not null,
    `city` varchar(50) not null,
    `mobilenumber`varchar(255) not null,
    `gender`varchar(50) not null,
    `hobby`varchar(100) not null
);

