CREATE TABLE BruidenDb.users
(
    id           INT          NOT NULL AUTO_INCREMENT,
    display_name VARCHAR(255) NOT NULL,
    email        VARCHAR(255) NOT NULL UNIQUE,
    password     VARCHAR(255) NOT NULL,
    listname     VARCHAR(255) NOT NULL UNIQUE,
    PRIMARY KEY (id)
);