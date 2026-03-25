<!doctype html>
<html lang="es">
<head>
    <title>Reto: PHP + Postgres</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
    </style>
</head>

<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-normal"><span>Mi App Docker</span></h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="index.php">Inicio</a>
        </nav>
    </div>

    <div class="container px-3 py-3 text-center">
        <h1 class="display-4">Registro con Render</h1>
        <p class="lead text-primary">PostgreSQL + PHP + Docker</p>
    </div>

    <div class="container">
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Formulario de Registro</div>
            <div class="card-body">
                <form autocomplete="off" action="index-post.php" method="post">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>DNI</label>
                            <input type="text" name="doc" maxlength="8" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Nombre</label>
                            <input type="text" name="nom" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Apellidos</label>
                            <input type="text" name="ape" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <label>Dirección</label>
                            <input type="text" name="dir" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Celular</label>
                            <input type="text" name="cel" maxlength="9" class="form-control" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success float-right">Registrar Datos</button>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Usuarios Registrados</div>
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Dirección</th>
                            <th>Celular</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("conexion.php");
                        $con = conexion();
                        $result = pg_query($con, "SELECT * FROM persona ORDER BY idpersona DESC");
                        while($row = pg_fetch_assoc($result)){
                            echo "<tr>
                                    <td>{$row['idpersona']}</td>
                                    <td>{$row['documento']}</td>
                                    <td>{$row['nombre']}</td>
                                    <td>{$row['apellido']}</td>
                                    <td>{$row['direccion']}</td>
                                    <td>{$row['celular']}</td>
                                  </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <footer class="pt-4 my-md-5 border-top">
            <small class="d-block mb-3 text-muted">&copy; 2026 - Tecsup Proyect</small>
        </footer>
    </div>
</body>
</html>