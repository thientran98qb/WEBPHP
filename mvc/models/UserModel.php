<?php 
/**
 * 
 */
class UserModel extends DB
{
	function getLogin($username,$passWord){
		$query="SELECT * FROM users WHERE username=?;";
		$stmt=mysqli_stmt_init($this->conn);
		mysqli_stmt_prepare($stmt,$query);
		mysqli_stmt_bind_param($stmt,'s',$username);
		mysqli_execute($stmt);
		$result=mysqli_stmt_get_result($stmt);
		if($row=mysqli_fetch_assoc($result)){
			$checkPass=false;
			if($passWord===$row['password']){
				$checkPass=true;
			}
			if($checkPass==true){
				$_SESSION['username']=$row['username'];
				$_SESSION['fullname']=$row['full_name'];
				return true;
				exit();
			}else{
				return false;
				exit();
			}
		}else{
			return false;
			exit();
		}
	}
	function listAll(){
		$query="SELECT * FROM users";
		$rows=mysqli_query($this->conn,$query);
		$mang=array();
		while($row=mysqli_fetch_array($rows)){
			$mang[]=$row;
		}
		return $mang;
	}
	function addUser($username,$email,$password,$fullname,$id_role,$active){
		$query="INSERT INTO users VALUES (null,'$username','$email','$password','$fullname','$id_role','$active')";
		mysqli_query($this->conn,$query);
	}
	function delUser($id_user){
		$query="DELETE FROM users WHERE id_user='$id_user'";
		mysqli_query($this->conn,$query);
	}
	function listAllbyID($id_user){
		$query="SELECT * FROM users INNER JOIN roles ON users.id_role=roles.id_role WHERE users.id_user='$id_user'";
		$rows=mysqli_query($this->conn,$query);
		$mang=array();
		while($row=mysqli_fetch_array($rows)){
			$mang[]=$row;
		}
		return $mang;
	}
	function editUser($id_user,$username,$email,$password,$fullname,$id_role,$active){
		$query="UPDATE users SET username='$username',email='$email',password='$password',full_name='$fullname',id_role='$id_role',active='$active' WHERE id_user='$id_user'";
		mysqli_query($this->conn,$query);
	}
}
?>