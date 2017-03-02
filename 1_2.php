1 задание (решение):
CREATE TABLE `practice_db`.`users` (
    `id` INT(10) NOT NULL AUTO_INCREMENT ,
    `email` VARCHAR(50) NOT NULL ,
    `password` VARCHAR(32) NOT NULL ,
    `last_visit` TIMESTAMP NOT NULL ,
    PRIMARY KEY (`id`));

2 задание (решение):
INSERT INTO `users`(`email`, `password`, `last_visit`)
       VALUES ('test@mail.ua', '098f6bcd4621d373cade4e832627b4f6', '2016-06-04 18:25:08')
Без md5 пароль test