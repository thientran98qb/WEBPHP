 <?php 
class MeatModel extends DB{
	
	function meats(){	
		$query = "SELECT * FROM meats";
		$rows =mysqli_query($this->conn,$query);
		$mang= array();
		while ($row=mysqli_fetch_array($rows)) {
			$mang[]=$row;

		}
		return $mang;
	}
	function listmeats($id_meat  ){
		$query = "SELECT * FROM meats where id_meat  ='$id_meat  '";
		$rows=mysqli_query($this->conn,$query);
		$mang=array();
		while($row=mysqli_fetch_array($rows)){
			$mang[]=$row;
		}
		return $mang;
	}
	function insertmeats($name_meat,$price){
		$query = "INSERT INTO meats VALUES(null,'$name_meat','$price')";
		mysqli_query($this->conn,$query);	
	}
	function delmeats($id_meat  ){
		$query = "DELETE FROM meats where id_meat  ='$id_meat  '";
		mysqli_query($this->conn,$query);	
	}
	function updatemeats($id_meat,$name_meat ,$price){
		$query = "UPDATE  meats SET name_meat='$name_meat',price='$price' where id_meat  ='$id_meat'";
		mysqli_query($this->conn,$query);	
	}
}
