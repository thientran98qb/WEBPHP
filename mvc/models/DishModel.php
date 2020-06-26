 <?php 
class DishModel extends DB{
	
	function dishs(){	
		$query = "SELECT * FROM dishs";
		$rows =mysqli_query($this->conn,$query);
		$mang= array();
		while ($row=mysqli_fetch_array($rows)) {
			$mang[]=$row;
		}
		return $mang;
	}
	function listdishs($id_dish ){
		$query = "SELECT * FROM dishs INNER JOIN detail_categories ON dishs.id_detail_category=detail_categories.id_detail_category where id_dish ='$id_dish '";
		$rows=mysqli_query($this->conn,$query);
		$mang=array();
		while($row=mysqli_fetch_array($rows)){
			$mang[]=$row;
		}
		return $mang;
	}
	function listdishsAllbyId($id_category ){
		$query = "SELECT dishs.id_dish,dishs.name_dish,dishs.image ,categories.category_name FROM dishs INNER JOIN detail_categories ON dishs.id_detail_category=detail_categories.id_detail_category INNER JOIN categories ON detail_categories.id_category=categories.id_category where categories.id_category='$id_category'";
		$rows=mysqli_query($this->conn,$query);
		$mang=array();
		while($row=mysqli_fetch_array($rows)){
			$mang[]=$row;
		}
		return $mang;
	}
	function listdishsbyId($id_detail_category ){
		$query = "SELECT * FROM dishs INNER JOIN detail_categories ON dishs.id_detail_category=detail_categories.id_detail_category where dishs.id_detail_category='$id_detail_category'";
		$rows=mysqli_query($this->conn,$query);
		$mang=array();
		while($row=mysqli_fetch_array($rows)){
			$mang[]=$row;
		}
		return $mang;
	}
	function insertdishs($name_dish,$description ,$preprocessing,$link_video,$image,$id_detail_category  ){
		$query = "INSERT INTO dishs VALUES(null,'$name_dish','$description','$preprocessing','$link_video','$image','$id_detail_category')";
		mysqli_query($this->conn,$query);	
	}
	function deldishs($id_dish ){
		$query = "DELETE FROM dishs where id_dish ='$id_dish'";
		mysqli_query($this->conn,$query);	
	}
	function updatedishs($id_dish,$name_dish ,$description,$preprocessing ,$link_video,$image,$id_detail_category){
		$query = "UPDATE  dishs SET name_dish='$name_dish',description='$description',preprocessing='$preprocessing',link_video='$link_video',image='$image',id_detail_category='$id_detail_category' where id_dish ='$id_dish '";
		mysqli_query($this->conn,$query);	
	}
}
?>