create table Todos
(
    TodoId int auto_increment
        primary key,
    Description varchar(50) not null,
    Done bit default b'0' not null,
    constraint Description
        unique (Description)
);
;-- -. . -..- - / . -. - .-. -.--
CREATE TABLE BruidenDb.users
(
    id           INT          NOT NULL AUTO_INCREMENT,
    display_name VARCHAR(255) NOT NULL,
    email        VARCHAR(255) NOT NULL UNIQUE,
    password     VARCHAR(255) NOT NULL,
    listname     VARCHAR(255) NOT NULL UNIQUE ,
    PRIMARY KEY (id)
);
;-- -. . -..- - / . -. - .-. -.--
CREATE TABLE `BruidenDb`.`wishes`
(
    `id`          INT          NOT NULL AUTO_INCREMENT,
    `user_id`     INT          NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `is_bought`   TINYINT(1)   NOT NULL DEFAULT FALSE,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES users(`id`)
);
;-- -. . -..- - / . -. - .-. -.--
CREATE TABLE BruidenDb.users
(
    id           INT          NOT NULL AUTO_INCREMENT,
    display_name VARCHAR(255) NOT NULL,
    email        VARCHAR(255) NOT NULL UNIQUE,
    password     VARCHAR(255) NOT NULL,
    listname     VARCHAR(255) NOT NULL UNIQUE,
    PRIMARY KEY (id)
);
;-- -. . -..- - / . -. - .-. -.--
CREATE TABLE `BruidenDb`.`wishes`
(
    `list_id`      INT          NOT NULL AUTO_INCREMENT,
    `priority`     INT          NOT NULL,
    `listname`     VARCHAR(255) NOT NULL,
    `is_bought`    TINYINT(1)   NOT NULL DEFAULT FALSE,
    PRIMARY KEY (`list_id`),
    FOREIGN KEY (`listname`) REFERENCES users(`listname`)
);
;-- -. . -..- - / . -. - .-. -.--
CREATE TABLE `BruidenDb`.`wishes`
(
    `list_id`      INT          NOT NULL AUTO_INCREMENT,
    `priority`     INT          NOT NULL,
    `listname`     VARCHAR(255) NOT NULL,
    `is_bought`    TINYINT(1)   NOT NULL DEFAULT FALSE,
    `description`  VARCHAR(255) NOT NULL,
    PRIMARY KEY (`list_id`),
    FOREIGN KEY (`listname`) REFERENCES users(`listname`)
);