/* Database export results for db haseebiq_was_ws_17_18 */

/* Preserve session variables */
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS;
SET FOREIGN_KEY_CHECKS=0;

/* Export data */

/* Table structure for token */
CREATE TABLE `token` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  `action` varchar(100) NOT NULL,
  `expires_on` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/* Table structure for user */
CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/* create command for set_token_expiry */

DELIMITER $$
create trigger `set_token_expiry`
BEFORE INSERT on `token`
for each row
BEGIN
     SET NEW.`expires_on` = DATE_ADD(NOW(), INTERVAL 70 MINUTE); 
 /* 60 + 70 = 70 ; 60 min because of timezone  */ 
    END$$

DELIMITER ;

/* Restore session variables to original values */
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
