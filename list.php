<form method="get" action="index.php">
	<input type="hidden" name="page" value="list">
	<input type="text" name="query" placeholder="search..." value="<?php  print($_GET['query']);  ?>">
	<button type="submit">submit</button>
	
</form>

<table border="1">
<th>no</th>
<th>id</th>
<th>name</th>
<th>description</th>
<th>created at</th>
<th>updated at</th>
<th>action</th>


<?php

try{
	$search = $_GET['query'];
	if ($search != '') {
		$list =  $lib->search($search);
	}
	else
	{
		$list =  $lib->list();
	}
	
	
}
catch(Exception $e)
{
	$list =  $lib->list();
}


$i = 0;

while($data =  $list->fetch(PDO::FETCH_OBJ))
{
++$i;

print("<tr>



 <td> ".$i."</td>
 <td>  ".$data->id."</td>
 <td> ".$data->name."</td>
 <td> ".substr($data->description,0,50)."</td>
 <td> ".$data->created_at."</td>
 <td> ".$data->updated_at."</td>
 <td> <a href='index.php?page=view&id=".$data->id."'>view</a></td>
 <td> <a href='index.php?page=edit&id=".$data->id."'>edit</a></td>
 <td> <a href='index.php?action=deletew&id=".$data->id."'>delete</a></td>

 
 ");


}



?>
</table>
<a href="index.php?page=add">add</a>