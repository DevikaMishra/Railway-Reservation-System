/*drop table feedback;
drop table orders;
drop table food;
drop table passenger;
drop table days_available;
drop table train;
drop table station;
drop table user_details;*/

create table user_details(email_id varchar(30) primary key, password varchar(15) not null, name varchar(30) 
not null, gender char(1) not null, age int not null, mobile varchar(14) not null, city varchar(20) not null,
state varchar(25) not null,CHECK(gender='M' or gender='F'));


create table feedback(email_id varchar(30),feedback_text varchar(200),foreign key(email_id) references 
user_details(email_id),primary key(email_id));


create table station(station_id varchar(8) primary key, station_name varchar(25));


create table train(train_id int primary key, train_name varchar(50) not null, train_type varchar(50) not null, 
source_id varchar(8), dest_id varchar(8), seats_class1 int not null,seats_class2 int not null, 
fare_class1 int not null, fare_class2 int not null,foreign key(source_id) 
references station(station_id) on update cascade on delete cascade, foreign key(dest_id) references station(station_id) 
on update no action on delete no action);

create table days_available(train_id int, days varchar(20), primary key(train_id,days),foreign key(train_id)
 references train(train_id));


create table passenger(PNR varchar(25), seat_num varchar(20), passenger_name varchar(50) not null, 
age int not null, gender char(1) not null,train_id int not null, CHECK(gender='M' or gender='F'),user_email varchar(30) not null,
 primary key(PNR,seat_num), foreign key(train_id) references train(train_id) on update cascade on delete cascade,
 foreign key(user_email)references user_details(email_id));

create table food(item varchar(25) primary key, price numeric(5,2) not null);

create table orders(PNR varchar(25),seat_num varchar(20),item varchar(25) not null,quantity int not null,
primary key(PNR,item),foreign key(PNR,seat_num) references passenger(PNR,seat_num),foreign key(item)
 references food(item));

create table ticket_details(PNR varchar(25) primary key, source_id varchar(8),class_type varchar(25) not null,
dest_id varchar(8),foreign key(source_id) references station(station_id),foreign key(dest_id) 
references station(station_id) ,res_status varchar(25) not null, train_id int not null, foreign key(train_id) references train(train_id) 
 on update cascade on delete cascade);

create table train_status(train_id int, available_date varchar(20), booked_seats1 int, waiting_seats1 int,
 available_seats1 int, booked_seats2 int, waiting_seats2 int, available_seats2 int,
 primary key(train_id,available_date),foreign key(train_id) references train(train_id) 
 on update cascade on delete cascade); 

create table route(train_id int, stop_num int, station_id varchar(8) not null, 
arrival_time time not null, dep_time time not null, day1 int not null, distance int not null,
 primary key(train_id,stop_num),foreign key(train_id) references train(train_id) on update cascade on delete cascade); 


create table part_of(train_id int, station_id varchar(8), stop_num int not null,
primary key(train_id,station_id));

create table staff(emp_id varchar(30) primary key,emp_name varchar(30) not null, station_id varchar(8) not null,
 foreign key(station_id) references station(station_id), phone varchar(15), address varchar(200), gender char(1), 
 designation varchar(30) not null, salary decimal(8,2), CHECK(gender='M' or gender='F'));
 

