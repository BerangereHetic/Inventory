<?php
    define('DB_HOST','localhost'); //variable globale
    define('DB_NAME','inventory');
    define('DB_USER','root');
    define('DB_PASS','root'); // '' par défaut sur windows
    define('DB_PORT','8889');

    try
    {
        // Try to connect to database
        $pdo = new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME,DB_USER,DB_PASS);

        // Set fetch mode to object
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    }
    catch (Exception $e)
    {
        // Failed to connect
        die('Could not connect');
    }
//die('All good ;)');


