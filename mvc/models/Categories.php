<?php 
class Categories extends DB{
	public function listAll(){
		$query="SELECT * FROM categories";
		$rows= mysqli_query($this->conn,$query);
		$mang=array();
		while($row=mysqli_fetch_array($rows)){
			$mang[]=$row;
		}
		return $mang;
	}
	function listcategories($id_category){
		$query = "SELECT * FROM categories where id_category='$id_category'";
		$rows =mysqli_query($this->conn,$query);
		$mang=array();
		while($row=mysqli_fetch_array($rows)){
			$mang[]=$row;
		}
		return $mang;
	}
	function insertcategories($category_name,$unsigned_category_name,$image){
		$query = "INSERT INTO categories VALUES(null,'$category_name','$unsigned_category_name','$image')";
		mysqli_query($this->conn,$query);
	}
	function delcategories($id_category){
		$query = "DELETE FROM categories where id_category='$id_category'";
		mysqli_query($this->conn,$query);
	
	}
	function updatecategories($id_category,$category_name,$unsigned_category_name,$image){
		$query = "UPDATE  categories SET category_name='$category_name',unsigned_category_name='$unsigned_category_name',image='$image' where id_category='$id_category'";
		mysqli_query($this->conn,$query);	
	}
}
?>
