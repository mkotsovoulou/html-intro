mysql -h mysql -u root -pmysecretpassword

use moviedb
-- -----------------------------------------------------
-- Table Movie_Categories
-- -----------------------------------------------------
DROP TABLE IF EXISTS Movie_Categories ;

CREATE TABLE IF NOT EXISTS Movie_Categories (
  category_id INT NOT NULL AUTO_INCREMENT,
  category_name VARCHAR(45) NOT NULL,
  PRIMARY KEY (category_id))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table Movies
-- -----------------------------------------------------
DROP TABLE IF EXISTS Movies ;

CREATE TABLE IF NOT EXISTS Movies (
  movie_id INT NOT NULL AUTO_INCREMENT,
  title VARCHAR(45) NOT NULL,
  rating DECIMAL(3,2) DEFAULT 0,
  votes INT DEFAULT 0,
  category_id INT NULL,
  photo VARCHAR(100) NULL,
  production_year INT NULL,
  rental_price DECIMAL(6,2) NULL DEFAULT 2,
  summary VARCHAR(45) NULL,
  PRIMARY KEY (movie_id),
  INDEX fk_Movies_Movie_Categories_idx (category_id ASC),
  CONSTRAINT fk_Movies_Movie_Categories
    FOREIGN KEY (category_id)
    REFERENCES Movie_Categories (category_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table subscribers
-- -----------------------------------------------------
DROP TABLE IF EXISTS subscribers ;

CREATE TABLE IF NOT EXISTS subscribers (
  subscriber_id INT NOT NULL AUTO_INCREMENT,
  email VARCHAR(45) NOT NULL,
  created_on TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (subscriber_id),
  UNIQUE INDEX email_UNIQUE (email ASC))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Sample Data
-- -----------------------------------------------------
insert into Movie_Categories values (1, 'Drama');
insert into Movie_Categories values (2, 'Action');
insert into Movie_Categories values (3, 'Horror');
insert into Movie_Categories values (4, 'Comedy');

insert into Movies (movie_id, title, category_id) values (1, 'Rainy Days', 1);
insert into Movies (movie_id, title, category_id) values (2, 'Harry Poter', 2);
insert into Movies (movie_id, title, category_id) values (3, 'Kill Bill', 3);
insert into Movies (movie_id, title, category_id) values (4, 'Days of our Lives', 4);
insert into Movies (movie_id, title, category_id) values (6, 'Inception', 2);
insert into Movies (movie_id, title, category_id) values (7, 'Mission Impossible I', 2);
insert into Movies (movie_id, title, category_id) values (8, 'Mission Impossible II', 2);
insert into Movies (movie_id, title, category_id) values (9, 'Crazy Mission', 4);
insert into Movies (movie_id, title, category_id) values (10, 'Its raining men', 4);

insert into subscribers (email) values ('mkotsovoulou@acg.edu');
insert into subscribers (email) values ('louvaris@acg.edu');
insert into subscribers (email) values ('chris@acg.edu');

