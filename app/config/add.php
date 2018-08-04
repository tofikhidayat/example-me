<?php
require ("../app.php");
$lib = new library();
if (isset($_POST['submit'])) {
	$name =  $_POST['name'];
	$hobby = $_POST['hobby'];
	$description =  $_POST['description'];
	$add =  $lib->store($name,$hobby,$description);
	if ($add == "error") {
		print("error");
	}
	else{
		header('location:../../index.php?page=list');
	}
}




?>