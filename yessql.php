<?php
include('connection.php');


 mysqli_query($connection,"insert into answer_table (answer, whenClicked) values ('yes', '" . date('Y-m-d H:i:s') . "')");

 header("Location: index.php");

?>