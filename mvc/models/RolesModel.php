<?php 
/**
 * 
 */
class RolesModel extends DB
{
	function listRoles(){
		$query="SELECT * FROM roles";
		$rows=mysqli_query($this->conn,$query);
		$mang=array();
		while($row=mysqli_fetch_array($rows)){
			$mang[]=$row;
		}
		return $mang;
	}
	function listRolesid($id_role){
		$query="SELECT * FROM roles WHERE id_role='$id_role'";
		$rows=mysqli_query($this->conn,$query);
		// $row=mysqli_fetch_array($rows);
		$row=mysqli_fetch_assoc($rows);
		return $row;
	}
	function insertRole($namerole){
		$query="INSERT INTO roles VALUES(null,'$namerole')";
		mysqli_query($this->conn,$query);
	}
	function delRole($idRole){
		$query="DELETE FROM roles WHERE id_role='$idRole' ";
		mysqli_query($this->conn,$query);
	}
	function updateRole($namerole,$idrole){
		$query="UPDATE roles SET role_name='$namerole' WHERE id_role='$idrole'";
		mysqli_query($this->conn,$query);
	}
	function checkURole($username){
		$query="SELECT * FROM roles WHERE role_name='$username'";
		$rows=mysqli_query($this->conn,$query);
		// $row=mysqli_fetch_array($rows);
		$row=mysqli_num_rows($rows);
		return $row;
	}
}
?>