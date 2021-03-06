drop database if exists socnetdb;
create database socnetdb;
connect socnetdb;

drop table if exists users;
create table `users`(
    id int primary key auto_increment,
    username varchar(32) unique,
    password varchar(32),
    gender tinyint
);

drop table if exists friendships;
create table friendships(
    user1 int,
    user2 int,
    confirmed tinyint default 0,
    primary key(user1, user2),
    foreign key(user1) references users(id),
    foreign key(user2) references users(id)
);

drop table if exists posts;
create table `posts`(
    post_id int primary key auto_increment,
    id int,
    post varchar(200),
    post_date datetime NOT NULL,
    foreign key(id) references users(id)
); 

grant all privileges on socnetdb.* to 'socnet'@'%' identified by 'secret';
