/*
create table route(train_id int, stop_num int, station_id varchar(8) not null, 
arrival_time time not null, dep_time time not null, day1 int not null, distance int not null, primary key(train_id,stop_num),
 foreign key(train_id) references train(train_id) on update cascade on delete cascade); 
 */
 insert into route values(19020,0,"DDN",'10:00:00','10:30:00',1,0);
 insert into route values(19020,1,"HW",'11:55:00','12:25:00',1,51.7);
 insert into route values(19020,2,"MTC",'18:25:00','19:10:00',1,245.1);
 insert into route values(19020,3,"KOTA",'07:35:00','07:45:00',2,773.5);
 insert into route values(19020,4,"BDTS",'04:20:00','05:00:00',2,1682);
 
 insert into route values(12431,0,"TVC",'07:00:00','07:15:00',1,0);
 insert into route values(12431,1,"UD",'07:02:00','07:04:00',2,706);
 insert into route values(12431,2,"BRC",'03:35:00','03:53:00',3,2163);
 insert into route values(12431,3,"KOTA",'10:45:00','10:55:00',3,2691);
 insert into route values(12431,4,"NZM",'16:55:00','18:00:00',3,3149);
 
 insert into route values(12010,0,"ADI",'02:00:00','02:40:00',1,0);
 insert into route values(12010,1,"ANND",'07:02:00','07:04:00',1,46);
 insert into route values(12010,2,"BRC",'16:11:00','16:16:00',1,100);
 insert into route values(12010,3,"BVI",'20:35:00','20:37:00',1,462);
 insert into route values(12010,4,"BCT",'21:20:00','22:00:00',1,491);
 
 insert into route values(15008,0,"LJN",'22:00:00','23:05:00',1,0);
 insert into route values(15008,1,"LC",'23:19:00','23:21:00',1,6);
 insert into route values(15008,2,"GD",'02:15:00','02:30:00',2,125);
 insert into route values(15008,3,"GKP",'06:15:00','06:35:00',2,279);
 insert into route values(15008,4,"BCY",'13:00:00','14:00:00',2,506);
 
 insert into route values(11464,0,"JBP",'11:00:00','12:00:00',1,0);
 insert into route values(11464,1,"BPL",'18:35:00','18:45:00',1,337);
 insert into route values(11464,2,"UJN",'22:45:00','22:55:00',1,521);
 insert into route values(11464,3,"BRC",'05:20:00','05:50:00',2,879);
 insert into route values(11464,4,"SMNH",'18:00:00','19:00:00',2,1415);
 
 insert into route values(19580,0,"DEE",'12:10:00','13:10:00',1,0);
 insert into route values(19580,1,"DEC",'13:28:00','13:30:00',1,10);
 insert into route values(19580,2,"JP",'18:15:00','18:30:00',1,303);
 insert into route values(19580,3,"RJT",'10:15:00','00:00:00',2,1106);
 insert into route values(19580,4,"BVC",'13:35:00','14:35:00',2,1159);
 
 insert into route values(51033,0,"CSTM",'21:55:00','22:55:00',1,0);
 insert into route values(51033,1,"KYN",'23:52:00','23:55:00',1,34);
 insert into route values(51033,2,"ABH",'00:14:00','00:16:00',2,60);
 insert into route values(51033,3,"PUNE",'04:05:00','04:20:00',2,192);
 insert into route values(51033,4,"SNSI",'10:55:00','11:55:00',2,455);
 
 insert into route values(14096,0,"KLK",'15:50:00','16:50:00',1,0);
 insert into route values(14096,1,"CDG",'17:22:00','17:30:00',1,38);
 insert into route values(14096,2,"PNP",'20:21:00','20:23:00',1,214);
 insert into route values(14096,3,"SNP",'21:18:00','21:20:00',1,259);
 insert into route values(14096,4,"DEE",'22:40:00','23:40:00',1,305);
 
 insert into route values(12509,0,"BBS",'02:30:00','02:35:00',1,0);
 insert into route values(12509,1,"KGP",'08:15:00','08:30:00',1,324);
 insert into route values(12509,2,"HWH",'10:55:00','11:15:00',1,439);
 insert into route values(12509,3,"BPRD",'03:00:00','03:02:00',2,1295);
 insert into route values(12509,4,"GHY",'06:00:00','07:00:00',2,1408);
 
 insert into route values(19019,0,"BDTS",'23:05:00','00:05:00',1,0);
 insert into route values(19019,1,"BRC",'06:45:00','06:55:00',1,381);
 insert into route values(19019,2,"KOTA",'19:05:00','19:35:00',1,909);
 insert into route values(19019,3,"MTC",'08:43:00','08:45:00',2,1436);
 insert into route values(19019,4,"DDN",'17:35:00','18:35:00',2,1682);