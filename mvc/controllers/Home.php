<?php 
	class Home extends Controller
	{
		public $Category;
		public $Dish;
		public $DetailCate;
		function __construct(){
			$this->Category=$this->model("Categories");
			$this->Dish=$this->model("DishModel");
			$this->DetailCate=$this->model("DetailCategory");
		}
		function Sayhi(){
			if(isset($_GET['id_category'])){
				$id=$_GET['id_category'];
			}else{
				$id=1;
			}
			if(isset($_GET['id_detail_category'])){
				$id_de=$_GET['id_detail_category'];
			}else{
				$id_de=1;
			}					
			$this->view("masterpage1",[
				"page"=>"trangchu",
				"categories"=>$this->Category->listAll(),
				"dish"=>$this->Dish->listdishsbyId($id_de),
				"detail_cate"=>$this->DetailCate->listdetail($id)
			]);
		}
		function getAllsp(){
			if(isset($_GET['id_category'])){
				$id=$_GET['id_category'];
			}else{
				$id=1;
			}
			if(isset($_GET['id_detail_category'])){
				$id_de=$_GET['id_detail_category'];
			}else{
				$id_de=1;
			}					
			$this->view("masterpage1",[
				"page"=>"trangchu",
				"categories"=>$this->Category->listAll(),
				"dish"=>$this->Dish->listdishsAllbyId($id),
				"detail_cate"=>$this->DetailCate->listdetail($id)
			]);
		}
		function sanPham(){
			$id=$_GET['id'];
			$this->view("masterpage1",[
				"page"=>"sanpham",
				"dish"=>$this->Dish->listdishs($id),
				"dishall"=>$this->Dish->dishs()
			]);
		}
	}
?>