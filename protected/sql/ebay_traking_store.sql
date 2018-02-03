/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  ubuvolt
 * Created: 26-Jan-2018
 */

DROP TABLE IF EXISTS `ebay_traking_store`;

CREATE TABLE `ebay_traking_store` 
(
    `id`                    INT NOT NULL AUTO_INCREMENT,
    `ebayItemID`            VARCHAR(16),
    `store`                 INT(11),
    `modified`              TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    primary key (`id`)
) engine=InnoDB DEFAULT CHARSET=utf8;
