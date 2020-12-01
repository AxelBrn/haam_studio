<?php
    function getConnection() {
        $dsn = 'mysql:dbname=testdb;host=localhost';
        $user = 'root';
        $password = '';

        try {
            return new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            return 'Connection fail : ' . $e->getMessage();
        }
    }

