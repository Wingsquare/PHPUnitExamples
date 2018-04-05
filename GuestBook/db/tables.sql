drop table if exists guestbook;
create table guestbook(
    id      integer primary key auto_increment,
    name    varchar(100),
    address text,
    phone   varchar(50),
    ttime   timestamp default now()
)engine="innodb";