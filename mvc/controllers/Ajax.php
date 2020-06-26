<?php
/**
  * 
  */
 class Ajax extends Controller
 {
 	
 	public $role;
 	function __construct()
 	{
 		$this->role=$this->model("RolesModel");
 	}
 	function saveDataRole(){
 		$name=$_POST['namerole'];
 		$this->role->insertRole($name);		
 	}
 	function removeRole(){
 		$idr=$_POST['RoleID'];
 		$this->role->delRole($idr);
 		$this->viewadmin("masterpageadmin",[
			 	"page"=>"roles"]);
 	}
 	function upRole(){
 		$id=$_POST['id_role'];
 		$name=$_POST['role_namee'];
 		$this->role->updateRole($name,$id);	
 		$this->viewadmin("masterpageadmin",[
			 	"page"=>"roles"]);	
 	}
 	function listRolebyID(){
 		echo json_encode($this->role->listRolesid($_POST['id_role']));
 	}
 	function checkRoleName(){
 		$roleName=$_POST['roleName'];
 		echo $this->role->checkURole($roleName);	
 	}
 } 
 ?>
