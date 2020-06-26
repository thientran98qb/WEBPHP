 <?php 
class DetailCategory extends DB{
	
	function detail_categories(){	
		$query = "SELECT * FROM detail_categories";
		$rows =mysqli_query($this->conn,$query);
		$mang= array();
		while ($row=mysqli_fetch_array($rows)) {
			$mang[]=$row;
		}
		return $mang;
	}
	function listdetail($id_category ){
		$query = "SELECT * FROM detail_categories INNER JOIN categories ON detail_categories.id_category=categories.id_category where detail_categories.id_category ='$id_category'";
		$rows=mysqli_query($this->conn,$query);
		$mang=array();
		while($row=mysqli_fetch_array($rows)){
			$mang[]=$row;
		}
		return $mang;
	}
	function listdetail_categories($id_detail_category ){
		$query = "SELECT * FROM detail_categories INNER JOIN categories ON detail_categories.id_category=categories.id_category where id_detail_category ='$id_detail_category'";
		$rows=mysqli_query($this->conn,$query);
		$mang=array();
		while($row=mysqli_fetch_array($rows)){
			$mang[]=$row;
		}
		return $mang;
	}
	function insertdetail_categories($name_detail_category,$name_unsigned,$id_category){
		$query = "INSERT INTO detail_categories VALUES(null,'$name_detail_category','$name_unsigned','$id_category')";
		mysqli_query($this->conn,$query);	
	}
	function deldetail_categories($id_detail_category ){
		$query = "DELETE FROM detail_categories where id_detail_category ='$id_detail_category '";
		mysqli_query($this->conn,$query);	
	}
	function updatedetail_categories($id_detail_category ,$name_detail_category,$name_unsigned,$id_category){
		$query = "UPDATE  detail_categories SET name_detail_category='$name_detail_category',name_unsigned='$name_unsigned',id_category='$id_category' where id_detail_category ='$id_detail_category '";
		mysqli_query($this->conn,$query);	
	}
}
?>