<?php
$id = $_GET['id'];
$connection = mysqli_connect('localhost', 'root', '', 'person');
$query = "delete from `personDetails` where `id`= $id";
$row = mysqli_query($connection, $query);

if($row >0)
       return header("Location:./index.php");
else
       echo "failed to delete data";





?>