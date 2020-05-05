<?php
require_once("mysqli_connect.php");
// delete function

if(isset($_GET['del'])){
    $id = $_GET['del'];
    $sql = ("DELETE FROM students WHERE id =$id");
    $result = mysqli_query($dbc, $sql) or die ("Cannot delete your order" .mysqli_error());
    header("Location: ../addstudent.php");
}

?>