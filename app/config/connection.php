<?php
namespace app;
require ("config.php");
use pdo;
class connection {
	public function __construct(){
		$this->db = new pdo(sprintf("%s:host=%s;dbname=%s",DBTYPE,DBHOST,DBNAME),DBUSER,DBPASSWD);

	}
}




?> 
