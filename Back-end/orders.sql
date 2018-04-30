/* create table orders(PNR varchar(25),seat_num int,item varchar(25) not null,quantity int not null,
primary key(PNR,item),foreign key(PNR,seat_num) references passenger(PNR,seat_num),foreign key(item)
 references food(item)); */
 
insert into orders values("4298691267",12,"Rice Pulao",3);
insert into orders values("4298691267",12,"Two egg curry",1);
insert into orders values("4298691268",3,"Rice Pulao",2);
insert into orders values("4298691269",8,"Bread Butter and Cutlet",2);
insert into orders values("4298691270",11,"Upma and vada",2);
insert into orders values("4298691273",8,"Poories & Potato Curry",1);
insert into orders values("4298691275",22,"Plain rice",1);
insert into orders values("4298691275",22,"Dal or Sambhar",2);
insert into orders values("4298691277",37,"Stuffed Paratha (4 nos.)",1);
insert into orders values("4298691276",11,"Two egg curry",2);
insert into orders values("4298691277",37,"Bread Butter and Cutlet",4);
insert into orders values("4298691278",89,"Chicken Sandwich",3);
insert into orders values("4298691279",90,"Veg Thalli",1);
insert into orders values("4298691280",12,"Upma and vada",2);
insert into orders values("4298691281",56,"Chicken Sandwich",1);
insert into orders values("4298691268",5,"Poories & Potato Curry",1);
insert into orders values("4298691269",10,"Two egg curry",1);
insert into orders values("4298691270",19,"Stuffed Paratha (4 nos.)",1);
insert into orders values("4298691271",24,"Rice Pulao",1);
insert into orders values("4298691271",23,"Dal or Sambhar",2);
 