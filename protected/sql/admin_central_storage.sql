/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  ubuvolt
 * Created: 13-Nov-2017
 */
DROP TABLE IF EXISTS `admin_central_storage`;

CREATE TABLE `admin_central_storage` 
(
    `id`            INT NOT NULL AUTO_INCREMENT,
    `User_ID`       INT(11),
    `Name`          VARCHAR(512),
    `Value`         TEXT,
    primary key (`id`)
) engine=InnoDB DEFAULT CHARSET=utf8;