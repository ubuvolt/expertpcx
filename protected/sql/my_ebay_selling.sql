
DROP TABLE IF EXISTS `my_ebay_selling`;
CREATE TABLE `my_ebay_selling` 
(
    `id`                                    INT NOT NULL AUTO_INCREMENT,
    `buyItNowPrice`                         FLOAT(7,2) NULL,
    `itemID`                                VARCHAR(128),
    `shopName`                                VARCHAR(128),
    `startTime`                             VARCHAR(128),
    `viewItemURL`                           VARCHAR(2048),
    `viewItemURLForNaturalSearch`           VARCHAR(2048),
    `listingDuration`                       VARCHAR(128),
    `listingType`                           VARCHAR(128),
    `quantity`                              INT(11),
    `currentPrice`                          FLOAT(5),
    `shippingServiceCost`                   FLOAT(5),
    `shippingType`                          VARCHAR(32),
    `timeLeft`                              VARCHAR(32),
    `title`                                 VARCHAR(255),
    `watchCount`                            INT(11),
    `quantityAvailable`                     INT(11),
    `galleryURL`                            VARCHAR(2048),
    `classifiedAdPayPerLeadFee`             FLOAT(5),
    `shippingProfileID`                     VARCHAR(128),
    `shippingProfileName`                   VARCHAR(255),
    `returnProfileID`                       VARCHAR(128),
    `returnProfileName`                     VARCHAR(255),
    `paymentProfileID`                      VARCHAR(128),
    `paymentProfileName`                    VARCHAR(255),
    primary key (`id`)
) engine=InnoDB DEFAULT CHARSET=utf8;