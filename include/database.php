#pentru crearea tabelei cu useri
CREATE TABLE 
	Customers 
    (
    	`id` 			smallint UNSIGNED NOT NULL AUTO_INCREMENT ,
        `email` 	 	varchar(255) NOT NULL,
        `first_name`	varchar(255) NOT NULL,
        `last_name`		varchar(255) NOT NULL,
        PRIMARY KEY(`id`)
    ) SET utf8 COLLATE utf8_general_cs ,TYPE=innodb, COMMENT 'This table stores the users.' 
	
	
	