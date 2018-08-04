<?php
require ("../app.php");
$lib =  new library();
$id = $_POST['id'];
$name = $_POST['name'];
$hobby =  $_POST['hobby'];
$description =  $_POST['description'];
$update =  $lib->update($id,$name,$hobby,$description);
if ($update == "error") {
	print("error");
}
else
{
	header("location:../../index.php?page=list");
}



?>