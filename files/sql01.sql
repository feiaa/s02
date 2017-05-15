show databases;
use webdata;
show tables;
desc users;
insert into users values (1, "mail1@web", "1", 1, 1, "1", "1");
insert into users values (2, "mail2@web", "2", 2, 2, "2", "2");
insert into contests values 
	(1, 1, "abstract", "description", "title",	0, null, null);
insert into contests values 
	(2, 1, "abstract", "description", "title",	1, null, null);	
insert into submission values
	(0, 1, 1, null, 1, null);
insert into submission values
	(1, 1, 1, null, 2, null);
insert into submission values
	(2, 1, 1, null, 3, null);	
select * from users;
select * from contests;
select * from submission;
\q;