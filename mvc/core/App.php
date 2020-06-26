<?php 
	class App{
			protected $controller="Home";
			protected $action ="Sayhi";
			protected $params=[];
		function __construct(){			
			$arr=$this->processURL();
			if(file_exists("./mvc/controllers/".$arr[0].".php")){
				$this->controller=$arr[0];
				unset($arr[0]);				
			}		
			require_once "./mvc/controllers/".$this->controller.".php";
			if($this->controller=="Admin"){				
				require_once "./mvc/controllers/Admin.php";
				$admin=new Admin();
				$admin->checkLogin();
				if(isset($_SESSION['username'])){
					$this->controller=new $this->controller;
					if(isset($arr[1])){
						if(method_exists($this->controller,$arr[1])){
							$this->action=$arr[1];
						}							
						unset($arr[1]);
					}
					$this->params=$arr?array_values($arr):[];
					call_user_func_array([$this->controller,$this->action],$this->params);
				}else{
					$this->controller=new $this->controller;
					$this->action="Login";
					$this->params=$arr?array_values($arr):[];
					call_user_func_array([$this->controller,$this->action],$this->params);
				}
				
			}else{
				$this->controller=new $this->controller;
				if(isset($arr[1])){
					if(method_exists($this->controller,$arr[1])){
						$this->action=$arr[1];
					}							
					unset($arr[1]);
				}
				$this->params=$arr?array_values($arr):[];
				call_user_func_array([$this->controller,$this->action],$this->params);
			}					
		}
		function processURL(){
			if(isset($_GET["url"])){
				$u=$_GET["url"];
			 return  explode("/",filter_var(trim($u,"/"))); 
			}
		}
	}
?>