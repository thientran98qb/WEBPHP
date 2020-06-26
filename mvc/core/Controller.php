<?php 
	class Controller 
	{
		public function model($mode){
			require_once "./mvc/models/".$mode.".php";
			return new $mode;
		}
		public function view($view,$data=[]){
			require_once "./mvc/views/customer/".$view.".php";			
		}
		public function viewadmin($view,$data=[]){
			require_once "./mvc/views/admin/".$view.".php";			
		}
		public function viewadmins($view,$data=[]){
			require_once "./mvc/views/admin/pages/".$view.".php";			
		}
	}
?>