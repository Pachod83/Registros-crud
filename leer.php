<?php
// include database connection
include 'Database.php';
 
// delete message prompt will be here
 
// select all data
$query = "SELECT id, nombres, apellidos,direccion,telefono,fechanac FROM personas ORDER BY id DESC";
$stmt = $conn->setAttribute($query);
$stmt->execute();


 
// this is how to get number of rows returned
$num = $stmt->rowCount();
 
// link to create record form
echo "<a href='create.php' class='btn btn-primary m-b-1em'>Create New Product</a>";
 
//check if more than 0 record found
if($num>0){
 
    // data from database will be here
 
}
 
// if no records found
else{
    echo "<div class='alert alert-danger'>No records found.</div>";
}
?>