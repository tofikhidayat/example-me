<form method="post" action="index.php?page=list">
<?php
$view  =  $lib->view($_GET['id']);
$data = $view->fetch(PDO::FETCH_OBJ);
print("
	<input name='id' value='".$data->id." type='hidden>
	<input type='text' name='update_name' value='".$data->name."'>
	<br>
	<textarea name='update_description' rows='10' cols='20'>".$data->description."</textarea>
<br>
<input type='submit' name='update' value='update'>
	");
?>
</form>