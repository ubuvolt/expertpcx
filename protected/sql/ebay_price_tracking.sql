/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  ubuvolt
 * Created: 20-Aug-2017
 */


DROP TABLE IF EXISTS `ebay_price_tracking`;

CREATE TABLE `ebay_price_tracking` 
(
    `id`                    INT NOT NULL AUTO_INCREMENT,
    `ebay_item_id`          VARCHAR(64),
    `modified`              TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `flow`                  TINYINT(1),
    `referral_ebay_item_id` VARCHAR(64),
    `price`                 FLOAT(7,2),
    `log`                   TEXT,
    primary key (`id`)
) engine=InnoDB DEFAULT CHARSET=utf8;