drop view view_companies;

create view view_companies as
select count(`a`.`id`) AS `agenttotal`,`a`.`companyid` AS `companyid`,`b`.`officename` AS `officename`,`c`.`username` AS `username`,`c`.`username4m` AS `username4m`,`c`.`originalpwd` AS `originalpwd`,`c`.`regtime` AS `regtime`,`c`.`status` AS `status`,`c`.`online` AS `online`,`b`.`street` AS `street`,`b`.`city` AS `city`,`b`.`state` AS `state`,`b`.`country` AS `country`,`b`.`payeename` AS `payeename`,`b`.`contactname` AS `contactname`,`b`.`man1stname` AS `man1stname`,`b`.`manlastname` AS `manlastname`,`b`.`manemail` AS `manemail`,`b`.`mancellphone` AS `mancellphone`,
b.manmidname, b.bankname, b.bankaddr, b.bankcity, b.bankprovince, b.bankcountry, b.bankswift, b.bankaccountname, b.bankaccountnum, b.agents, b.otherwebs, b.salesaday, b.dobestornot, b.immsg
from `agents` `a`, `companies` `b`, `accounts` `c`
where ((`a`.`companyid` = `b`.`id`) and (`b`.`id` = `c`.`id`)) 
group by `a`.`companyid` 
union 
select 0 AS `0`,`b`.`id` AS `companyid`,`b`.`officename` AS `officename`,`c`.`username` AS `username`,`c`.`username4m` AS `username4m`,`c`.`originalpwd` AS `originalpwd`,`c`.`regtime` AS `regtime`,`c`.`status` AS `status`,`c`.`online` AS `online`,`b`.`street` AS `street`,`b`.`city` AS `city`,`b`.`state` AS `state`,`b`.`country` AS `country`,`b`.`payeename` AS `payeename`,`b`.`contactname` AS `contactname`,`b`.`man1stname` AS `man1stname`,`b`.`manlastname` AS `manlastname`,`b`.`manemail` AS `manemail`,`b`.`mancellphone` AS `mancellphone`,
b.manmidname, b.bankname, b.bankaddr, b.bankcity, b.bankprovince, b.bankcountry, b.bankswift, b.bankaccountname, b.bankaccountnum, b.agents, b.otherwebs, b.salesaday, b.dobestornot, b.immsg 
from `companies` `b`, `accounts` `c`
where ((`b`.`id` = `c`.`id`) and (not(`b`.`id` in (select distinct `agents`.`companyid` AS `companyid` from `agents`))));