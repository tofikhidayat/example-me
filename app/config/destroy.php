<?php
require ("../app.php");
$lib = new library();
if (isset($_POST)) {
	$id =  $_POST['id'];
	$del = $lib->destroy($id);
	if ($del == "error") {
		print("error");
		
	}
	else
	{
		header("location:../../index.php?page=list");
	}
}








?>