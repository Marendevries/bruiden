create table Todos
(
    TodoId int auto_increment
        primary key,
    Description varchar(50) not null,
    Done bit default b'0' not null,
    constraint Description
        unique (Description)
);

