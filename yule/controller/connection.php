<?php
    function getConnection() {
        $dsn = 'mysql:dbname=yule_bdd;host=localhost';
        $user = 'root';
        $password = '';

        try {
            return new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            return 'Connection fail : ' . $e->getMessage();
        }
    }

