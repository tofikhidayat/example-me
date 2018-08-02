<?php

class  library{

	public function __construct(){
		$this->db =  new pdo('mysql:host=localhost;dbname=crud','root','mazenda9999');
	}

	public function add($name,$description)
	{
		$sql = "INSERT INTO demo (name,description,created_at) VALUE('$name','$description',now())";
		$query = $this->db->query($sql);
		if (!$query) {
			return "error";
		}
		else
		{
			return "success";
		}
	}

	public function list()
	{
		$sql = "SELECT  * FROM demo ";
		$query = $this->db->query($sql);
		return $query;
	}

	public function view($id)
	{
		$sql = "SELECT * FROM demo WHERE id='$id'";
		$query = $this->db->query($sql);
		return $query;
	}
	public function search($data)
	{
		$sql =  "SELECT * FROM demo WHERE name LIKE '%".$data."%' OR description LIKE '%".$data."%' ";
		$query  = $this->db->query($sql);
		return $query;
	}
	public function update($id,$name,$description)
	{
		$sql  =  "UPDATE demo SET name='$name' , description='$description' , updated_at=now()";
		$query =  $this->db->query($sql);
		if (!$query) {
			return "error";
		}
		else
		{
			return "success";
		}
	}
	public function delete($id){
		$sql  =  "DELETE FROM demo WHERE id='$id'";
		$query = $this->db->query($sql);
		if (!$query) {
			return "error";
		}
		else
		{
			return "success";
		}
	}

}




?>