/* create table train(train_id int primary key, train_name varchar(50) not null, train_type varchar(50) not null, 
source_id varchar(8), dest_id varchar(8), seats_class1 int not null,seats_class2 int not null, 
fare_class1 int not null, fare_class2 int not null,foreign key(source_id) 
references station(station_id) on update cascade on delete cascade, foreign key(dest_id) references station(station_id) 
on update no action on delete no action); */

insert into train values(19020,"Dehradun Express","Express","DDN","BDTS",40,100,1500,555);
insert into train values(19019,"Dehradun Express","Express","BDTS","DDN",40,100,1715,640);

insert into train values(12431,"Rajdhani Express","Express","TVC","NZM",100,100,6770,4500);
insert into train values(12010,"Shatabdi Express","Express","ADI","BCT",50,100,1855,1025);
insert into train values(15008,"LJN BCY Express","Express","LJN","BCY",25,100,810,300);
insert into train values(11464,"JBP Somnath Express","Express","JBP","SMNH",25,100,1400,520);

insert into train values(19580,"DEE RJT Express","Express","DEE","BVC",25,100,1335,495);
insert into train values(51033,"Shirdi Fast Passenger","Passenger","CSTM","SNSI",50,100,720,175);
insert into train values(14096,"Himalayan Queen","Special","KLK","DEE",50,100,440,120);
insert into train values(12509,"Guwahati Express","Express","BBS","GHY",40,100,1580,600);

