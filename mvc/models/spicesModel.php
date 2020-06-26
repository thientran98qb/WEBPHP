 <?php 
class spicesModel extends DB{
	
	function spices(){	
		$query = "SELECT * FROM spices";
		$rows =mysqli_query($this->conn,$query);
		$mang= array();
		while ($row=mysqli_fetch_array($rows)) {
			$mang[]=$row;

		}
		return $mang;
	}
	function listspices($id_spice){
		$query = "SELECT * FROM spices where id_spice='$id_spice  '";
		$rows=mysqli_query($this->conn,$query);
		$mang=array();
		while($row=mysqli_fetch_array($rows)){
			$mang[]=$row;
		}
		return $mang;
	}
	function insertspices($name_spice,$price){
		$query = "INSERT INTO spices VALUES(null,'$name_spice','$price')";
		mysqli_query($this->conn,$query);	
	}
	function delspices($id_spice  ){
		$query = "DELETE FROM spices where id_spice   ='$id_spice  '";
		mysqli_query($this->conn,$query);	
	}
	function updatemeats($id_spice,$name_spice ,$price){
		$query = "UPDATE  spices SET name_spice='$name_spice',price='$price' where id_spice  ='$id_spice   '";
		mysqli_query($this->conn,$query);	
	}
}
