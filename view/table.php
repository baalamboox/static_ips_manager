<?php
    require_once '../app/connection.php';
    $connection = connect_db();
    $sql = 'SELECT * FROM static_ips_table';
    $data = $connection->query($sql);
    while($show_data = mysqli_fetch_assoc($data)) {
?>
        <tr>
            <td><?php echo $show_data['static_ip_id'];?></td>
            <td><?php echo $show_data['static_ip_hostname'];?></td>
            <td><?php echo $show_data['static_ip_address'];?></td>
            <td><?php echo $show_data['static_ip_insert'];?></td>
            <td>
                <span class="btn btn-dark btn-sm" onclick="get_data('<?php echo $show_data['static_ip_id'];?>')"><i class="fas fa-edit" style="margin-right: 0px"></i></span>
            </td>
            <td>
                <span class="btn btn-success btn-sm" onclick="delete_data('<?php echo $show_data['static_ip_id'];?>')"><i class="fas fa-trash" style="margin-right: 0px"></i></span>
            </td>
        </tr>
<?php
    }
?>