/* simple queries */
/* where clause */
/* displaying the details of staff having salary > 40000*/
select emp_name,designation from staff where salary > 40000; 

/* displaying details of staff who is a station master */
SELECT * FROM `staff` WHERE designation = "Station Master"; 


/*update statement */
/* update the price of Paratha to 35 */
update food set price = 35 where item = "Paratha (4 nos.)"; 

/*hiking the salary of the female employees */
update staff set salary = salary + .10 * salary where gender = 'F';

/* aggregate operators */

/*selecting the maximum salary from the database*/
select max(salary) from staff;

/*count of female passengers*/
SELECT count(PNR) FROM passenger WHERE gender = 'F'

/* group-by and having:*/
/* train_id and number of days a train is available for the train available on more than 2 days */
select train_id , count(days) from days_available group by(train_id) having count(days) > 2;

/* displaying the number of bookings by a user */
SELECT user_email,count(*) FROM `passenger` group by (user_email);

/* NESTED QUERIES */
/* staff details who work in Agra City station */
select emp_id,emp_name from staff,station where staff.station_id = station.station_id and
 station.station_name = "Agra City";
 
 /* display the departure time,arrival time,details of passenger in that train along with train_details*/
 SELECT r.train_id,train_name,passenger_name,arrival_time,dep_time from train t, route r, passenger p 
 where p.train_id = r.train_id and t.train_id = r.train_id group by(r.train_id)
 
 /* =============================================================================== */
 
 /*Nested queries*/ 
 /* details of passengers who have booked tickets from themselves */
 select * from user_details u where u.email_id in (select email_id from user_details u,passenger where u.name = passenger.passenger_name)
 
 /* MySQL doesn’t support the INTERSECT and MINUS set operators.*/
 
 /*finding the train from a given source - UD to destination - kota(joining 2 tables and
 2 views) */
 /*
 create view train_enquiry as select src.train_id,train_name,src.station_id,station_name 
 as source, dest.stop_num as destination_no,src.dep_time as departure_time, dest.arrival_time
 as arrival_time from src,dest,train,station where src.train_id = train.train_id and 
 src.stop_num < dest.stop_num and src.train_id = dest.train_id and 
 src.station_id = station.station_id;*/
 create view train_enquiry as select src.train_id,train_name,src.station_id,station_name 
 as source,dest.station_id as destination,dest.stop_num as destination_no,src.dep_time as departure_time, dest.arrival_time
 as arrival_time from src,dest,train,station where src.train_id = train.train_id and 
 src.stop_num < dest.stop_num and src.train_id = dest.train_id and 
 src.station_id = station.station_id;
 
 /*creating view for pantry */
 create view pantry as select PNR,t.train_id,train_name,seat_num,quantity,price from train t,orders o,
 passengers p where p.PNR = o.PNR and t.train_id = p.train_id group by(PNR);
 
 /* CONFIRMED PASSENGERS- USE OF NOT IN*/
 select * from passenger where PNR not in (select PNR FROM passenger where seat_num = 'NA')
 
 /* waiting list of passengers */
 create view waiting_list as (select * FROM passenger where seat_num = 'NA')
 
 /*trains running on weekends - union operator*/
 select t.train_id,train_name,days from train t,days_available d where 
 t.train_id = d.train_id and days = 'Saturday' union (select t.train_id,train_name,
 days from train t,days_available d where t.train_id = d.train_id and days = 'Sunday')

/* maximum salary of female employee -AGGREGATE OPERATOR */
select emp_id,emp_name,salary from staff where gender = 'F' 
and salary = (select max(salary) from staff where gender = 'F');

/*all trains that have a stop at vadodara - PATTERN MATCHING*/
select r.train_id,train_name from train t, station s, route r where r.train_id = t.train_id
and s.station_id = r.station_id and station_name like 'Vadodara%'
 
/* *********************************************************************** */
/* passenger and the class */
SELECT p.PNR,passenger_name,class_type from passenger p,ticket_details t where p.PNR = t.PNR

/*salary and route details */
select emp_id,emp_name,salary,station_name,r.train_id,train_name,stop_num from staff s,
station st,route r,train t where st.station_id = s.station_id and s.station_id = r.station_id
 and r.train_id = t.train_id and salary = (select max(salary) from staff)
 
 /*  */

