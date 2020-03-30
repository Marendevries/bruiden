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