CREATE TABLE `BruidenDb`.`users`
(
    `id`           INT          NOT NULL AUTO_INCREMENT,
    `display_name` VARCHAR(255) NOT NULL,
    `email`        VARCHAR(255) NOT NULL UNIQUE,
    `password`     VARCHAR(255) NOT NULL,
    `unieke_code`         VARCHAR(255) NOT NULL UNIQUE,
     PRIMARY KEY (`id`)
);
;-- -. . -..- - / . -. - .-. -.--
CREATE TABLE `BruidenDb`.`wishes`
(
    `id`           INT          NOT NULL AUTO_INCREMENT,
    `cadeau_naam`  VARCHAR(255) NOT NULL,
    `gekocht` BOOL,

    PRIMARY KEY (`id`)
);
;-- -. . -..- - / . -. - .-. -.--
CREATE TABLE `BruidenDb`.`wishes`
(
    `id`           INT          NOT NULL AUTO_INCREMENT,
    `cadeau_naam`  VARCHAR(255) NOT NULL,
    `gekocht` BOOL DEFAULT FALSE,

    PRIMARY KEY (`id`)
);
;-- -. . -..- - / . -. - .-. -.--
CREATE TABLE `BruidenDb`.`wishes`
(
    `id`          INT          NOT NULL AUTO_INCREMENT,
    `user_id`     INT          NOT NULL,
    `item` VARCHAR(255) NOT NULL,
    `is_bought`   TINYINT(1)   NOT NULL DEFAULT FALSE,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES users(`id`)
);
;-- -. . -..- - / . -. - .-. -.--
CREATE TABLE `BruidenDb`.`users`
(
    `id`           INT          NOT NULL AUTO_INCREMENT,
    `display_name` VARCHAR(255) NOT NULL,
    `email`        VARCHAR(255) NOT NULL UNIQUE,
    `password`     VARCHAR(255) NOT NULL,
    `unieke_code`  VARCHAR(255) AUTO_INCREMENT UNIQUE ,
     PRIMARY KEY (`id`)
);
;-- -. . -..- - / . -. - .-. -.--
CREATE TABLE `BruidenDb`.`users`
(
      `unieke_code`  VARCHAR(255) AUTO_INCREMENT UNIQUE ,
   );
;-- -. . -..- - / . -. - .-. -.--
;;
;-- -. . -..- - / . -. - .-. -.--
CREATE TABLE `happy_brides`.`users`
(
    `id`           INT          NOT NULL AUTO_INCREMENT,
    `display_name` VARCHAR(255) NOT NULL,
    `email`        VARCHAR(255) NOT NULL UNIQUE,
    `password`     VARCHAR(255) NOT NULL,
    `unieke_code`  VARCHAR(255) NOT NULL UNIQUE  AUTO_INCREMENT,
      PRIMARY KEY (`id`)
);
;-- -. . -..- - / . -. - .-. -.--
CREATE TABLE `happy_brides`.`users`
(
    `id`           INT          NOT NULL AUTO_INCREMENT,
    `display_name` VARCHAR(255) NOT NULL,
    `email`        VARCHAR(255) NOT NULL UNIQUE,
    `password`     VARCHAR(255) NOT NULL,
    `unieke_code`  VARCHAR(255) UNIQUE  AUTO_INCREMENT,
      PRIMARY KEY (`id`)
);
;-- -. . -..- - / . -. - .-. -.--
CREATE TABLE `happy_brides`.`users`
(
    `id`           INT          NOT NULL AUTO_INCREMENT,
    `display_name` VARCHAR(255) NOT NULL,
    `email`        VARCHAR(255) NOT NULL UNIQUE,
    `password`     VARCHAR(255) NOT NULL,
    `unique_code`  VARCHAR(255) UNIQUE  AUTO_INCREMENT,
      PRIMARY KEY (`id`)
);
;-- -. . -..- - / . -. - .-. -.--
CREATE TABLE `happy_brides`.`users`
(
    `id`           INT          NOT NULL AUTO_INCREMENT,
    `display_name` VARCHAR(255) NOT NULL,
    `email`        VARCHAR(255) NOT NULL UNIQUE,
    `password`     VARCHAR(255) NOT NULL,
    `unique_code`  VARCHAR(255) NOT NULL AUTO_INCREMENT,
      PRIMARY KEY (`id`)
);
;-- -. . -..- - / . -. - .-. -.--
CREATE TABLE `happy_brides`.`users`
(
    `id`           INT          NOT NULL AUTO_INCREMENT,
    `display_name` VARCHAR(255) NOT NULL,
    `email`        VARCHAR(255) NOT NULL UNIQUE,
    `password`     VARCHAR(255) NOT NULL,
    `unique_code`  INT NOT NULL AUTO_INCREMENT,
      PRIMARY KEY (`id`)
);
;-- -. . -..- - / . -. - .-. -.--
CREATE TABLE `happy_brides`.`users`
(
    `id`           INT          NOT NULL AUTO_INCREMENT,
    `display_name` VARCHAR(255) NOT NULL,
    `email`        VARCHAR(255) NOT NULL UNIQUE,
    `password`     VARCHAR(255) NOT NULL,
    `unique_code`  VARCHAR(255) NOT NULL UNIQUE ,
      PRIMARY KEY (`id`)
);
;-- -. . -..- - / . -. - .-. -.--
CREATE TABLE `BruidenDb`.`users`
(
    `id`           INT          NOT NULL AUTO_INCREMENT,
    `display_name` VARCHAR(255) NOT NULL,
    `email`        VARCHAR(255) NOT NULL UNIQUE,
    `password`     VARCHAR(255) NOT NULL,
    `unique_code`  VARCHAR(255) NOT NULL UNIQUE ,
      PRIMARY KEY (`id`)
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