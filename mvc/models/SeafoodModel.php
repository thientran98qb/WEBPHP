 <?php 
class SeafoodModel extends DB{
	
	function seafoods(){	
		$query = "SELECT * FROM seafoods";
		$rows =mysqli_query($this->conn,$query);
		$mang= array();
		while ($row=mysqli_fetch_array($rows)) {
			$mang[]=$row;
		}
		return $mang;
	}
	function listseafoods($id_seafood ){
		$query = "SELECT * FROM seafoods where id_seafood='$id_seafood '";
		$rows=mysqli_query($this->conn,$query);
		$mang=array();
		while($row=mysqli_fetch_array($rows)){
			$mang[]=$row;
		}
		return $mang;
	}
	function insertseafoods($name_seafood,$price){
		$query = "INSERT INTO seafoods VALUES(null,'$name_seafood','$price')";
		mysqli_query($this->conn,$query);	
	}
	function delseafoods($id_seafood  ){
		$query = "DELETE FROM seafoods where id_seafood  ='$id_seafood '";
		mysqli_query($this->conn,$query);	
	}
	function updateseafoods($id_seafood,$name_seafood,$price){
		$query = "UPDATE seafoods SET name_seafood='$name_seafood',price='$price' where id_seafood ='$id_seafood  '";
		mysqli_query($this->conn,$query);	
	}
}
?>