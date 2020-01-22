# example-env
Example of using environmental variables

## Required

* docker (https://hub.docker.com/)
* composer (https://getcomposer.org/)

## Installation

From the terminal
1. `get clone https://github.com/sketchings/example-env.git`
2. `cd example-env`
3. `docker-compose up`
4. `docker exec -it env_db_1 bash -l`
5. `mysql`
6. `use env-test;`
7. `CREATE TABLE custom_vars (
    var_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    var_name VARCHAR(100) NOT NULL,
    var_value VARCHAR(100) NOT NULL,
    var_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);`
8. `INSERT INTO custom_vars (var_name, var_value) Values('group','phpdx');`

In a browser visit http://127.0.0.1/
