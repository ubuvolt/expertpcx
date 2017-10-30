/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  ubuvolt
 * Created: 13-Aug-2017
 */

CREATE TABLE `tbl_user` 
(
    `id`            INT NOT NULL AUTO_INCREMENT,
    `username`      VARCHAR(128) NOT NULL,
    `password`      VARCHAR(128) NOT NULL,
    `email`         VARCHAR(128) NOT NULL,
    primary key (`id`)
) engine=InnoDB DEFAULT CHARSET=utf8;