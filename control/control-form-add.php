<?php
    require_once '../app/connection.php';
    $connection = connect_db();
    $sql = 'INSERT INTO static_ips_table(static_ip_hostname, static_ip_address) VALUES (?, ?)';
    $query = $connection->prepare($sql);
    $query->bind_param('ss', $_POST['hostname'], $_POST['ip_address']);
    $query_executed = $query->execute();
    $query->close();
    echo $query_executed;
?>