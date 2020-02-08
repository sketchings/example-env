<?php
require __DIR__ . '/vendor/autoload.php';

/**
 * Immutability refers to if Dotenv is allowed to overwrite existing environment variables.
 * If you want Dotenv to overwrite existing environment variables,
 * use createMutable instead of createImmutable
 */
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
//$dotenv = Dotenv\Dotenv::createMutable(__DIR__);
if (getenv('CONFIG_ENV') != "production") {
    $dotenv->load();
    /**
     * Load a second file, can be relative or absolute
     * Should be in a non web accessible folder
     * Specify filename, default is .env
     */
    //$dotenv = Dotenv\Dotenv::createMutable(__DIR__."/secure_folder","elephpant");
    //$dotenv->load();
    //echo getenv('FAVORITE_COLOR');
}
$dotenv->required(['DB_SERVER', 'DB_NAME', 'DB_USERNAME', 'DB_PASSWORD']);

header("Content-Type: text/plain");
var_dump(getenv('S3_BUCKET'));

try {
    $db = new PDO(
        "mysql:host=".getenv('DB_SERVER')
        . ";dbname=".getenv('DB_NAME'),
        getenv('DB_USERNAME'),
        getenv('DB_PASSWORD')
    );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
var_dump($db->query("SELECT * FROM custom_vars")->fetchAll());