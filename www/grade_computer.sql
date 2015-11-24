create database grade_computer;
use grade_computer;


create table student
(
  student_id int unsigned not null auto_increment primary key,
  last_name char(20) not null,
  first_name char(20) not null,
  password char(80) not null,
  email char(80) not null,
  phone char(20),
  sjsu_id char(20) not null  
);


grant select, insert, update, delete
on grade_computer.*
to grade_computer@localhost identified by 'password';
