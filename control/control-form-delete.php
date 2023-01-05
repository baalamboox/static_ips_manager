<?php
    require_once '../app/connection.php';
    $connection = connect_db();
    $sql = 'DELETE FROM static_ips_table WHERE static_ip_id = ?';
    $query = $connection->prepare($sql);
    $query->bind_param('i', $_POST['ip_address']);
    $query_executed = $query->execute();
    $query->close();
    echo $query_executed;
?>