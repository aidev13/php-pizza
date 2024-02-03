   
-- Notes: in the CLI, type 'SOURCE schema.sql;' to run the schema file from the terminal.

-- For devlopment purposes only, we created a DROP DATABASE IF EXISTS code line to delete DB the CREATE DB again as we play around and figure out who we want to structure the DB so we are not creating a bunch of bad DBs.

-- You can see the databases in the CLI by running 'SHOW DATABASES;' in the CLI.

DROP DATABASE IF EXISTS php_pizza;
CREATE DATABASE php_pizza;

USE php_pizza;

CREATE TABLE pizzas(
   id INT NOT NULL AUTO_INCREMENT,
   title VARCHAR(255),
   ingredients VARCHAR(255),
   email VARCHAR(255),
   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY (id)
);


