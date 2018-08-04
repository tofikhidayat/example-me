<?php
use app\connection;
require('config/connection.php');

class library extends connection{
	public function store($name,$hobby,$description){
		$sql = "INSERT INTO demo (name,hobby,description,created_at) VALUES ('$name','$hobby','$description',now())";
		$query = $this->db->query($sql);
		if (!$query) {
			return "error";
		}
		else
		{
			return "success";
		}

	}
	public function index()
	{
		$sql = "SELECT * FROM demo ";
		$query  =  $this->db->query($sql);
		return $query;
	}

	public function edit ($id)
	{
		$sql =  "SELECT * FROM demo WHERE id = '$id' ";
		$query  =  $this->db->query($sql);
		return $query;
	}
	public function update($id,$name,$hobby,$description){
		$sql  = "UPDATE demo SET name='$name' , hobby='$hobby',description='$description' , updated_at = now()  WHERE id = $id  ";
		$query = $this->db->query($sql);
		if (!$query) {
			return "error";
		}
		else
		{
			return "success";
		}
	}

	public function destroy($id){
		$sql = "DELETE FROM demo WHERE id = $id";
		$query  =  $this->db->query($sql);
		if (!$query) {
			return "error";
		}
		else
		{
			return "success";
		}
	}
	public function search($data)
	{
		$sql  = "SELECT * FROM demo WHERE name  LIKE '%".$data."%' OR hobby LIKE '%".$data."%' OR description LIKE '%".$data."%'  ";
		$query   =  $this->db->query($sql);
		return $query;
	}



} 



?> 
