CREATE TABLE `BruidenDb`.`wishes`
(
    `id`          INT          NOT NULL AUTO_INCREMENT,
    `user_id`     INT          NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `is_bought`   TINYINT(1)   NOT NULL DEFAULT FALSE,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES users(`id`)
);