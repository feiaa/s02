/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2017/4/30 10:12:32                           */
/*==============================================================*/


drop table if exists contests;

drop table if exists metainfo;

drop table if exists submission;

drop table if exists users;

/*==============================================================*/
/* Table: contests                                              */
/*==============================================================*/
create table contests
(
   contest_id           int not null,
   user_id              int not null,
   abstract             text,
   description          text,
   title                varchar(50),
   result               int not null,
   start_time           datetime,
   end_time             datetime,
   primary key (contest_id)
);

alter table contests comment 'result: the # of tables where stores the results of this con';

/*==============================================================*/
/* Table: metainfo                                              */
/*==============================================================*/
create table metainfo
(
   varible_name         varchar(50) not null,
   varible_value        varchar(50),
   primary key (varible_name)
);

/*==============================================================*/
/* Table: submission                                            */
/*==============================================================*/
create table submission
(
   submission_id        bigint not null,
   user_id              int not null,
   contest_id           int not null,
   date                 datetime,
   rank                 int,
   description          text,
   primary key (submission_id)
);

/*==============================================================*/
/* Table: users                                                 */
/*==============================================================*/
create table users
(
   user_id              int not null,
   mail                 varchar(50) not null,
   passward             varchar(50),
   role                 smallint,
   student_id           varchar(20),
   name                 varchar(50),
   nickname             varchar(30),
   primary key (user_id)
);

alter table users comment 'role: Normal user or advanced user.';

alter table contests add constraint FK_creation foreign key (user_id)
      references users (user_id) on delete restrict on update restrict;

alter table submission add constraint FK_submission foreign key (user_id)
      references users (user_id) on delete restrict on update restrict;

alter table submission add constraint FK_submit_to foreign key (contest_id)
      references contests (contest_id) on delete restrict on update restrict;

