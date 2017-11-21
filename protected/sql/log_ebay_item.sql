
DROP TABLE IF EXISTS `log_ebay_item`;
CREATE TABLE `log_ebay_item` 
(
    `id`                                            INT NOT NULL AUTO_INCREMENT,
    `itemID`                                        VARCHAR(128),
    `data_time`                                     VARCHAR(128),
    `field_name`                                    VARCHAR(128),
    `old_value`                                     VARCHAR(128),
    `new_value`                                     VARCHAR(128),
    primary key (`id`)
) engine=InnoDB DEFAULT CHARSET= utf8;