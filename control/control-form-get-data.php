<?php
    require_once '../app/connection.php';
    $connection = connect_db();
    $sql = 'SELECT static_ip_hostname, static_ip_address FROM static_ips_table WHERE static_ip_id = ' . $_POST['ip_id'];
    $data = 
?>