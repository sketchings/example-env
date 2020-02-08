# example-env
Example of using environmental variables

## Required

* docker (https://hub.docker.com/)

## Installation

From a terminal
1. `git clone https://github.com/sketchings/example-env.git`
2. `cd example-env`
3. `docker run --rm -v $(pwd):/app composer install`
4. `docker-compose up`

### To set up the database for the first time: 
In a new terminal
1. `docker exec -it example-env_db_1 bash -l`
2. `mysql`
3. `use env-test;`
4. `CREATE TABLE custom_vars (
    var_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    var_name VARCHAR(100) NOT NULL,
    var_value VARCHAR(100) NOT NULL,
    var_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);`
5. `INSERT INTO custom_vars (var_name, var_value) Values('group','phpdx');`
6. You can close this terminal

In a browser visit http://127.0.0.1/
