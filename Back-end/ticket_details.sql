create table ticket_details(PNR varchar(25) primary key, doj date, source_id varchar(8),class_type varchar(25) not null,
dest_id varchar(8),foreign key(source_id) references station(station_id),foreign key(dest_id) 
references station(station_id) ,res_status varchar(25) not null, train_id int not null, foreign key(train_id) references train(train_id) 
 on update cascade on delete cascade);
 
 
insert into ticket_details values("4298691267","2017-04-15","LJN","AC","BCY","CNF",15008);
insert into ticket_details values("4298691268","2017-04-15","LJN","AC","GD","CNF",15008);
insert into ticket_details values("4298691269","2017-04-15","LJN","AC","GKP","CNF",15008);
insert into ticket_details values("4298691270","2017-04-15","LJN","AC","BCY","CNF",15008);
insert into ticket_details values("4298691271","2017-04-15","LJN","AC","BCY","CNF",15008);
insert into ticket_details values("4298691272","2017-04-15","LJN","AC","BCY","WL",15008);
insert into ticket_details values("4298691282","2017-04-15","LJN","AC","BCY","WL",15008);
insert into ticket_details values("4298691283","2017-04-15","LJN","AC","GD","WL",15008);
insert into ticket_details values("4298691284","2017-04-15","LJN","AC","GD","Wl",15008);
insert into ticket_details values("4298691285","2017-04-15","LJN","AC","GKP","WL",15008);
insert into ticket_details values("4298691273","2017-04-10","DDN","AC","BDTS","CNF",19020);
insert into ticket_details values("4298691274","2017-04-11","BDTS","Sleeper","DDN","CNF",19019);
insert into ticket_details values("4298691275","2017-04-13","TVC","AC","NZM","CNF",12431);
insert into ticket_details values("4298691276","2017-04-10","ADI","AC","BCT","CNF",12010);
insert into ticket_details values("4298691277","2017-04-14","BBS","AC","GHY","CNF",12509);
insert into ticket_details values("4298691278","2017-04-16","JBP","Sleeper","SMNH","CNF",11464);
insert into ticket_details values("4298691279","2017-04-14","DEE","Sleeper","BVC","CNF",19580);
insert into ticket_details values("4298691280","2017-04-11","CSTM","Sleeper","SNSI","CNF",51033);
insert into ticket_details values("4298691281","2017-04-11","KLK","Sleeper","DEE","CNF",14096);
