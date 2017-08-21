DROP DATABASE IF EXISTS `wedding2018`;
DROP USER `zac_wedding`@`localhost`;

CREATE DATABASE `wedding2018`;
CREATE USER `zac_wedding`@`localhost` IDENTIFIED BY 'budgie';
GRANT ALL PRIVILEGES ON `wedding2018`.* TO `zac_wedding`@`localhost`;

USE `wedding2018`;

CREATE TABLE `RSVP` (
  id               INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  first_name       VARCHAR(255)                   NOT NULL,
  last_name        VARCHAR(255)                   NOT NULL,
  email            VARCHAR(255)                   NOT NULL,
  coming           BOOLEAN                        NOT NULL DEFAULT FALSE,
  UNIQUE KEY (first_name, last_name, email)
)
  ENGINE = InnoDB
  CHARSET = utf8mb4;

