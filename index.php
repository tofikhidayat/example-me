<?php
require('_config/config.php');
$lib = new library();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

if(isset($_GET['page'])){

if ($_GET['page'] == 'add') {
	include('add.php');
}

if ($_GET['page'] == 'list') {
	include('list.php');
}
if ($_GET['page'] == 'view') {
	include ('view.php');
	
}
if($_GET['page']=='edit')
{
	include('edit.php');
}



}
//crud function


if(isset($_POST['submit']))
{

	$name =  $_POST['name'];
	$description = $_POST['description'];
	$add  =  $lib->add($name,$description);
	if ($add == "error") {
	 	print("error");
	 } 
	 else
	 {
	 	print("success");
	 	header('location:index.php?page=list');
	 }
}

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$update_name =  $_POST['update_name'];
	$update_description = $_POST['update_description'];
	$update =  $lib->update($id,$update_name,$update_description);
	if ($update == 'error') {
		print("error");
	}
	else
	{
		header('location:index.php?page=list');
	}
}

if (isset($_GET['action']) == 'delete')
{
	$del =  $lib->delete($_GET['id']);
	if ($del == 'error') {
		print("error");
		
	}

	else
	{
		header('location:index.php?page=list');
	}

}
?>



</body>
</html>