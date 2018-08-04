<?php
require ("app/app.php");
$lib = new library()
?>

<!DOCTYPE html>
<html>
<head>
	<title>test crud</title>
</head>
<body>
<?php
if (isset($_GET['page'])) {
$page =  $_GET['page'];	
	if ($page == 'add') {
		include('layouts/add.php');
	}
	if ($page == 'list') {
		include('layouts/list.php');
	}
}


?>

</body>
</html>