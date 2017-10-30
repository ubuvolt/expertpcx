/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  ubuvolt
 * Created: 20-Aug-2017
 */

CREATE TABLE `ebay_price_monitor` 
(
    `id`            INT NOT NULL AUTO_INCREMENT,
    `product`       VARCHAR(128) NOT NULL,
    `seller`        VARCHAR(128) NOT NULL,
    `url`           VARCHAR(2048) NOT NULL,
    `price`         FLOAT(7,3) NULL,
    primary key (`id`)
) engine=InnoDB DEFAULT CHARSET=utf8;