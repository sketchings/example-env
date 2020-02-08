# example-env
Example of using environmental variables

## Required

* docker (https://hub.docker.com/)

## Installation

From the terminal
1. `git clone https://github.com/sketchings/example-env.git`
2. `cd example-env`
3. `docker run --rm -v $(pwd):/app composer install`
4. `docker-compose up`
5. `docker exec -it env_db_1 bash -l`
6. `mysql`
7. `use env-test;`
8. `CREATE TABLE custom_vars (
    var_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    var_name VARCHAR(100) NOT NULL,
    var_value VARCHAR(100) NOT NULL,
    var_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);`
9. `INSERT INTO custom_vars (var_name, var_value) Values('group','phpdx');`

In a browser visit http://127.0.0.1/
