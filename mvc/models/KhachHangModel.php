<?php 
class KhachHangModel extends DB{
	public function getKH(){
		$query="SELECT * FROM khachhang";
		return mysqli_query($this->conn,$query);
	}
}
?>