<?php
$view = $lib->view($_GET['id']);

$data =  $view->fetch(PDO::FETCH_OBJ);

print("
<h1>".$data->name."</h1>
<br>
<p>".$data->description."</p>
<br>
<a href='index.php?page=edit&id=".$data->id."'>edit</a>

	");



?>