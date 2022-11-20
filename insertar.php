<!DOCTYPE HTML>
<html>
<head>
    <title>Tarea 2, segundo parcial</title>
 
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 
</head>
<body>
 
    <!-- container -->
    <div class="container">
 
        <div class="page-header">
            <h1>Crear una persona</h1>
        </div>

        <form action="crear_persona.php" method="POST">
 
  
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>Nombres</td>
            <td><input type='text' name='txtnombre' class='form-control' /></td>
        </tr>
        <tr>
            <td>Apellidos</td>
            <td><input type='text' name='txtapellido' class='form-control' /></td>
        </tr>
        <tr>
            <td>Direccion</td>
            <td><input type='text' name='txtdireccion' class='form-control' /></td>
        </tr>
        <tr>
            <td>Telefono</td>
            <td><input type='text' name='txttelefono' class='form-control' /></td>
        </tr>
        <tr>
            <td>Fecha nacimiento</td>
            <td><input type='date' name='fechanac' class='form-control' /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Enviar' class='btn btn-primary' />
                <a href='index.php' class='btn btn-danger'>Regresar a pagina principal</a>
            </td>
        </tr>
    </table>
</form>
 
    </div> <!-- end .container -->

 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>