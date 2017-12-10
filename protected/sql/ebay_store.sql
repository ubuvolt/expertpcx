
DROP TABLE IF EXISTS `ebay_store`;
CREATE TABLE `ebay_store` 
(
    `id`                        INT NOT NULL AUTO_INCREMENT,
    `shopName`                  VARCHAR(128),   
    `CategoryID`                VARCHAR(128),
    `Name`                      VARCHAR(128),
    `Order`                     INT(3),
    primary key (`id`)
) engine=InnoDB DEFAULT CHARSET=utf8;