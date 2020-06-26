 <?php 
class Vegetables extends DB{
	
	function listVegetables(){	
		$query = "SELECT * FROM vegetables ";
		$rows =mysqli_query($this->conn,$query);
		$mang= array();
		while ($row=mysqli_fetch_array($rows)) {
			$mang[]=$row;
		}
		return $mang;
	}
	function listsvegetables($id_vegetable){
		$query = "SELECT * FROM vegetables where id_vegetable ='$id_vegetable'";
		$rows=mysqli_query($this->conn,$query);
		$mang=array();
		while($row=mysqli_fetch_array($rows)){
			$mang[]=$row;
		}
		return $mang;
	}
	function insertvegetables($name_vegetable,$price){
		$query = "INSERT INTO vegetables VALUES(null,'$name_vegetable','$price')";
		mysqli_query($this->conn,$query);	
	}
	function delvegetables($id_vegetable){
		$query = "DELETE FROM vegetables where id_vegetable    ='$id_vegetable   '";
		mysqli_query($this->conn,$query);	
	}
	function updatevegetabless($id_vegetable,$name_vegetable,$price){
		$query = "UPDATE vegetables SET name_vegetable='$name_vegetable',price='$price' where id_vegetable   ='$id_vegetable'";
		mysqli_query($this->conn,$query);	
	}
}
?>