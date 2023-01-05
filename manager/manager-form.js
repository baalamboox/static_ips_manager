function save_data() {
    $.ajax({
        type: 'post',
        url: 'control/control-form-add.php',
        data: {
            'hostname': $('#hostname').val(),
            'ip_address': $('#ip_address').val()
        },
        success: result => {
            if(result == 1) {
                Swal.fire({
                    icon: 'success',
                    title: '¡Genial!',
                    text: 'Se guardo correctamente la IP.'
                }).then(() => {
                    $('#hostname').val('');
                    $('#ip_address').val('');
                    $('#show_table').load('view/table.php');
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: '¡Upps!',
                    text: 'Error al guardar la IP.'
                });
            }
        }
    });
    return false; // Detiene la recargar de onsubmit
}
function get_data(static_ip_id) {
    $.ajax({
        type: 'POST',
        url: 'control/control-form-get-data.php',
        data: {
            'ip_id': static_ip_id
        },
        success: result => {

        }
    });
}
function update_data() {
    
}
function delete_data(static_ip_id) {
    Swal.fire({
        title: '¿Estas seguro?',
        text: "Se borrará para siempre.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, borrar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'POST',
                url: 'control/control-form-delete.php',
                data: {
                    'ip_address': static_ip_id
                },
                success: result => {
                    console.log(result);
                    if(result == 1) {
                        Swal.fire('¡Genial!', 'Se ha borrado con éxito.', 'success');
                        $('#show_table').load('view/table.php');
                    } else {
                        Swal.fire({
                            title: '¡Upps!',
                            text: 'No se pudo eliminar correctamente.',
                            icon: 'error'
                        });
                    }
                }
            });
        }
    });
    
}
function clear_form() {
    $('#hostname').val('');
    $('#ip_address').val('');
}
$(document).ready(() => {
    $('#data_table').hide();
    $('#botton_show').click(() => {
        $('#ip_form').hide();
        $('#data_table').show();
        $('#show_table').load('view/table.php');
    });
    $('#home').click(() => {
        $('#data_table').hide();
        $('#ip_form').show();
    });
});