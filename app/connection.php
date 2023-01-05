<?php
    function connect_db() {
        $connection = new mysqli('localhost', 'root', '', 'static_ips_manager');
        if($connection->connect_errno) {
            echo 'Error: '. $connection->connect_error;
        } else {
            return $connection;
        }
    }
?>