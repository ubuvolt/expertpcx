/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  ubuvolt
 * Created: 13-Aug-2017
 */
CREATE TABLE `test`
(
    `id`                INT NOT NULL AUTO_INCREMENT,
    `type`              INT NOT NULL,
    `codart`            VARCHAR(16) NOT NULL,
    `platform`          VARCHAR(16) NOT NULL,
    `active`            INT NOT NULL,
    primary key (`id`)
) engine=InnoDB DEFAULT CHARSET=utf8;


