<?php

    function connection () {
        $servername = 'localhost';
        $database = 'note';
        $username = 'root';
        $password = '';
    
        //database conection
        $dsn = "mysql:host=$servername;dbname=$database;charset=utf8mb4";
        $pdo = new PDO($dsn, $username, $password);
        // PDO exceptions
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
?>