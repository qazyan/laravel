AWESOME TODO SYSTEM - DEPLOYMENT MANUAL
Dear user, thanks for choosing the product of our team. Please follow the instruction below, to deploy my system on your own environment.

step1  IDE  
php  mysql 

step2  download   
github:	https://github.com/qazyan/laravel

step3  config  
1.  modify the .env file  
DB_CONNECTION=mysql	  
DB_HOST=127.0.0.1 	##database_hostname
DB_PORT=3306		
DB_DATABASE=project	##database_name
DB_USERNAME=root	##database_username
DB_PASSWORD=root	##database_password

2.  build tables in mysql
##build user table
CREATE TABLE `project`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NULL,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) VISIBLE,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE);
##build thing table
CREATE TABLE `project`.`thing` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `work` VARCHAR(45) NULL,
  `status` VARCHAR(45) NULL,
  `share` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE);
##build todolist table
CREATE TABLE `project`.`todolist` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `item` VARCHAR(45) NULL,
  `status` VARCHAR(45) NOT NULL,
  `thing_id` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE);
##build friend table
CREATE TABLE `project`.`friend` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `friend` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE);

step4  start   
start the service from the command line using the following command  
php artisan serve  

welcome to use.