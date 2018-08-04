<?php   
require ("../app/app.php");
$lib = new library();

if (isset($_GET['id'])) {
	$id =  $_GET['id'];
	$edit  =  $lib->edit($id);
$data =  $edit->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html>
<head>
	<title>edit </title>
</head>
<body>
	<form method="post" action="../app/config/update.php">
		<input type="hidden" name="id" value="<?=  $data->id ?>">
		<br>
		<input type="text" name="name" value="<?= $data->name ?>">
		<br>
		<input type="text" name="hobby" value="<?= $data->hobby ?>">
		<br>
		<textarea cols="50"r rows="10"><?=  $data->description  ?></textarea>
		<br>
		<button type="submit" name="update">Update</button>
	</form>

</body>
</html>

<?php
}
?>


