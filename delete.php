<?php
// Include the database connection file
//$mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));

// Get id from URL parameter


/*
if(isset($_GET['deleteid'])){

    $id = $_GET['deleteid'];

    if( mysqli_query($mysqli, "DELETE FROM users WHERE id= $id")){

        echo "deleted";
    }
}
header("Location:page2.php");
*/

include ('model.php');

$users= new model();

if(isset($_GET['deleteid'])){

    $id = $_GET['deleteid'];

    $users->deleteData($id);
}
?>