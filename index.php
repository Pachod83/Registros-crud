<!DOCTYPE HTML>
<html>
<head>
    <title>PDO - Read Records - PHP CRUD Tutorial</title>
 
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 
    <!-- custom css -->
    <style>
    .m-r-1em{ margin-right:1em; }
    .m-b-1em{ margin-bottom:1em; }
    .m-l-1em{ margin-left:1em; }
    .mt0{ margin-top:0; }
    </style>
 
</head>
<body>
 
    <!-- container -->
  
 
        <!-- PHP code to read records will be here -->
    <div class="container">
 
        <div class="page-header">
            <h1>Listado de personas</h1>
        </div>
 
        <?php
                include_once 'Database.php';
                include_once 'Personas.php';

                $action = isset($_GET['action']) ? $_GET['action'] : "";
 
                // if it was redirected from delete.php
                if($action=='deleted'){
                    echo "<div class='alert alert-success'>Record was deleted.</div>";
                }


                $database = new Database();
                $db = $database->getConnection();

                $item = new Personas($db);
                $stmt =$item->getPersona(); 
                $num = $stmt->rowCount();
                 
                // link to create record form
                echo "<a href='insertar.php' class='btn btn-primary m-b-1em'>Crear una persona</a>";
                 
                //check if more than 0 record found
                if($num>0){
                 
                    // data from database will be here
                    //start table
                echo "<table class='table table-hover table-responsive table-bordered'>";
                 
                    //creating our table heading
                    echo "<tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Fecha de Nacimiento</th>
                    </tr>";
                 
                    // table body will be here
                    // retrieve our table contents
                // fetch() is faster than fetchAll()
                // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    // extract row
                    // this will make $row['firstname'] to
                    // just $firstname only
                    extract($row);
                 
                    // creating new table row per record
                    echo "<tr>
                        <td>{$id}</td>
                        <td>{$nombres}</td>
                        <td>{$apellidos}</td>
                        <td>{$direccion}</td>
                        <td>{$telefono}</td>
                        <td>{$fechanac}</td>
                        <td>";
                            // read one record
                            echo "<a href='Lector.php?id={$id}' class='btn btn-info m-r-1em'>Leer persona</a>";
                 
                            // we will use this links on next part of this post
                            echo "<a href='eliminar.php?id={$id}'  class='btn btn-primary m-r-1em'>Editar Registro</a>";
                 
                            // we will use this links on next part of this post
                            echo "<a href='eliminar.php' onclick='delete_user({$id});'  class='btn btn-danger'>Eliminar Registro</a>";
                        echo "</td>";
                    echo "</tr>";
                }
                 
                // end table
                echo "</table>";
                 
                }
                 
                // if no records found
                else{
                    echo "<div class='alert alert-danger'>No se encontraron registros.</div>";
                }


            ?>
 

 
    </div> <!-- end .container -->
 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<!-- confirm delete record will be here -->

<script type='text/javascript'>
function delete_user( id ){
 
    var answer = confirm('¿Esta seguro?');
    if (answer){
        // if user clicked ok,
        // pass the id to delete.php and execute the delete query
        window.location = 'eliminar.php?id=' + id;
    }
}

 
</body>
</html>