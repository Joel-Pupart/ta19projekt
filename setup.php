<?php

$createUsers = "
    CREATE TABLE `d83405_ta19prj`.`users`(
        `id` SERIAL,
        `email` VARCHAR(100) NOT NULL,
        `password` VARCHAR(60) NOT NULL,
        `added` DATETIME NOT NULL,
        `added_by` INT NOT NULL,
        `edited` DATETIME ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        `edited_by` INT NOT NULL
    ) ENGINE = InnoDB;
";

$createPosts = "
    CREATE TABLE `d83405_ta19prj`.`posts` ( 
        `id` SERIAL NOT NULL , 
        `title` VARCHAR(50) NOT NULL , 
        `body` VARCHAR(500) NOT NULL , 
        `status` VARCHAR(20) NOT NULL , 
        `added` DATETIME NOT NULL , 
        `added_by` INT NOT NULL , 
        `edited` DATETIME ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, 
        `edited_by` INT NOT NULL 
    ) ENGINE = InnoDB;
"
//blog body is a little short, need to change that
;