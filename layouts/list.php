
<form method="get" action="index.php">
	<input type="hidden" name="page" value="list">
	<input type="text" name="query" placeholder="search..." value="<?=  $_GET['query']  ?>">
	<input type="submit" value="search" >
</form>

<table border="1">
<th>no</th>
<th>id</th>
<th>name</th>
<th>hobby</th>
<th>description</th>
<th>created at</th>
<th>updated at</th>
<th>action</th>

<?php
$i = 0;
if (isset($_GET['query'])) {
	if ($_GET['query']  != "") {
		$list = $lib->search($_GET['query']);
	}
	else
	{
		$list  =  $lib->index();
	}
}
else
{
	$list  =  $lib->index();
}


while($data = $list->fetch(PDO::FETCH_OBJ)):
	++$i;
?>
<tr>
	<td><?= $i ?></td>
	<td><?= $data->id  ?></td>
	<td><?= $data->name  ?></td>
	<td><?= $data->hobby  ?></td>
	<td><?= substr($data->id,0,20);  ?></td>
	<td><?= $data->created_at  ?></td>
	<td><?= $data->updated_at  ?></td>
	<td>
		<a href="app/config/destroy.php?id=<?= $data->id ?>">Delete</a>
		<a href="views/edit.php?id=<?= $data->id ?>">Edit</a>
	</td>
</tr>


<?php
endwhile;


?>

</table>
<a href="index.php?page=add">add new user </a>