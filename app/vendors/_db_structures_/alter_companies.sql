ALTER TABLE `companies` ADD `manmidname` VARCHAR( 32 ) NULL AFTER `man1stname`;
ALTER TABLE `companies` ADD `bankname` VARCHAR( 32 ) NOT NULL ,
ADD `bankaddr` VARCHAR( 64 ) NOT NULL ,
ADD `bankcity` VARCHAR( 32 ) NOT NULL ,
ADD `bankprovince` VARCHAR( 32 ) NOT NULL ,
ADD `bankcountry` VARCHAR( 2 ) NOT NULL ,
ADD `bankswift` VARCHAR( 32 ) NOT NULL ,
ADD `bankaccountname` VARCHAR( 32 ) NOT NULL ,
ADD `bankaccountnum` VARCHAR( 32 ) NOT NULL ,
ADD `agents` INT NOT NULL ,
ADD `otherwebs` VARCHAR( 64 ) NOT NULL ,
ADD `salesaday` FLOAT NOT NULL ,
ADD `dobestornot` TINYINT NOT NULL ,
ADD `immsg` TEXT NOT NULL;