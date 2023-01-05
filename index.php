<?php
    require_once 'app/connection.php';
?>
<!DOCTYPE html>
<html lang="es-MX" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de IP's</title>
    <link rel="stylesheet" href="lib/bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-4" id="ip_form">
            <div class="col-sm-4">
                <div class="card text-center shadow animate__animated animate__fadeInDown animate__delay-1s" id="form_card">
                    <div class="card-header w-100">Registro de IP's estáticas</div>
                    <div class="card-body text-left">
                        <form methode="post" onsubmit="return save_data()">
                            <div class="form-group">
                                <label for="hostname"><i class="fas fa-desktop"></i>Host:</label>
                                <input type="text" class="form-control form-control-sm" id="hostname" placeholder="Ingresar nombre de host" required>
                            </div>
                            <div class="form-group">
                                <label for="ip_address"><i class="fas fa-location-arrow"></i>IP:</label>
                                <input type="text" class="form-control form-control-sm" id="ip_address" placeholder="0.0.0.0" required>
                            </div>
                            <div class="btn-group btn-block mt-4">
                                <span class="btn btn-dark" onclick="clear_form()"><i class="fas fa-times"></i>Cancelar</span>
                                <button class="btn btn-success"><i class="fas fa-save"></i>Guardar</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer w-100">
                        <div class="my-4">
                            <span class="btn btn-dark" id="botton_show"><i class="fas fa-th-list"></i>Dispositivos</span>
                        </div>
                        <div class="text-right">
                            <small class="text-muted"><i class="fas fa-skull"></i>Creado por Guillermo Jiménez</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4" id="data_table">
            <div class="col-sm-8">
                <div class="jumbotron animate__animated animate__fadeInLeft" id="jumbotron_table">
                    <div>
                       <h1><i class="fas fa-th-list"></i> Mis dispositivos</h1> 
                    </div>
                    <div class="mt-4">
                        <table class="table table-responsive-sm table-striped" style="color: white;">
                            <thead class="thead">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre de host</th>
                                    <th>Dirección IP</th>
                                    <th>Fecha de registro</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody id="show_table">
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center my-4">
                        <span class="btn btn-dark" id="home"><i class="fas fa-home"></i>Inicio</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="lib/jquery-3.6.0/jquery-3.6.0.min.js"></script>
    <script src="lib/bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="manager/manager-form.js"></script>
</body>

</html>