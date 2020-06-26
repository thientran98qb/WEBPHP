<?php 
class RessourceModel extends DB{
	
	function ressources(){	
		$query = "SELECT * FROM ressources INNER JOIN dishs ON dishs.id_dish=ressources.id_dish INNER JOIN vegetables ON vegetables.id_vegetable=ressources.id_vegetable INNER JOIN seafoods ON seafoods.id_seafood=ressources.id_seafood INNER JOIN meats ON meats.id_meat=ressources.id_meat INNER JOIN spices ON spices.id_spice=ressources.id_spice";
		// $query = "SELECT * FROM ressources";
		$rows =mysqli_query($this->conn,$query);
		$mang= array();
		while ($row=mysqli_fetch_array($rows)) {
			$mang[]=$row;
		}
		return $mang;
	}
	function listressources($id_ressource){
		$query = "SELECT * FROM ressources INNER JOIN dishs ON dishs.id_dish=ressources.id_dish INNER JOIN vegetables ON vegetables.id_vegetable=ressources.id_vegetable INNER JOIN seafoods ON seafoods.id_seafood=ressources.id_seafood INNER JOIN meats ON meats.id_meat=ressources.id_meat INNER JOIN spices ON spices.id_spice=ressources.id_spice where id_ressource  ='$id_ressource'";
		$rows =mysqli_query($this->conn,$query);
		$mang=array();
		while($row=mysqli_fetch_array($rows)){
			$mang[]=$row;
		}
		return $mang;
	}
	function insertressources($id_dish,$quatity,$id_vegetalbe,$id_seafood ,$id_meat,$id_spice ){
		$query = "INSERT INTO ressources VALUES(null,'$id_dish','$quatity','$id_vegetalbe','$id_seafood','$id_meat','$id_spice')";
		mysqli_query($this->conn,$query);	
	}
	function delressources($id_ressource  ){
		$query = "DELETE FROM ressources where id_ressource  ='$id_ressource  '";
		mysqli_query($this->conn,$query);	
	}
	function updateressources($id_ressource  ,$id_dish,$quatity,$id_vegetable,$id_seafood ,$id_meat,$id_spice){
		$query = "UPDATE  ressources SET id_dish='$id_dish',quatity='$quatity',id_vegetable='$id_vegetable',id_seafood='$id_seafood',id_meat='$id_meat',id_spice='$id_spice' where id_ressource  ='$id_ressource'";
		mysqli_query($this->conn,$query);	
	}
}
?>