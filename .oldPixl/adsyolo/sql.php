DROP   TABLE IF     EXISTS openOffers;
CREATE TABLE IF NOT EXISTS openOffers (
   id          INT NOT NULL AUTO_INCREMENT,
   title       VARCHAR(255) NOT NULL,
   company     VARCHAR(255) NOT NULL,
   reward      INT NOT NULL,
   url         VARCHAR(255) NOT NULL,
   thumb_url   VARCHAR(255) NOT NULL,
   isApp       BOOL NOT NULL,
   isSurvey    BOOL NOT NULL,
   isVideo     BOOL NOT NULL,
   PRIMARY KEY ( id )
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP   TABLE IF     EXISTS users;
CREATE TABLE IF NOT EXISTS users (
   id          	 INT NOT NULL AUTO_INCREMENT,
   username      VARCHAR(255) NOT NULL,
   password      VARCHAR(255) NOT NULL,
   first_name    VARCHAR(255) NOT NULL,
   last_name     VARCHAR(255) NOT NULL,
   date_created  VARCHAR(255) NOT NULL,
   PRIMARY KEY ( id )
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;