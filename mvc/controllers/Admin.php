<?php 
class Admin extends Controller
{
	public $User;
	public $Role;
	public $Category;
	public $Vege;
	public $Meat;
	public $Spice;
	public $SeaFood;
	public $DetailCategory;
	public $Dish;
	public $Ressource;
		function __construct(){
			$this->User=$this->model("UserModel");
			$this->Role=$this->model("RolesModel");
			$this->Category=$this->model("Categories");
			$this->Vege=$this->model("Vegetables");
			$this->Meat=$this->model("MeatModel");
			$this->Spice=$this->model("spicesModel");
			$this->SeaFood=$this->model("SeafoodModel");
			$this->DetailCategory=$this->model("DetailCategory");
			$this->Dish=$this->model("DishModel");
			$this->Ressource=$this->model("RessourceModel");
		}
	function Sayhi(){
			$this->viewadmin("masterpageadmin",[
				"page"=>"trangchu"
			]);
	}
	function Login(){		
			$this->viewadmin("login");		
	}
	function checkLogin(){
		if( isset($_POST['btnLogin']) ){

			$email=$_POST['email'];
			$pass=$_POST['password'];
			$a=$this->User->getLogin($email,$pass);
			if($a==true){
				$this->viewadmin("masterpageadmin",[
			 	"page"=>"trangchu"
				 ]);
			}else{
				$this->viewadmin("login");
			}			
		}else{
			
		}
	}
	function logout(){
		session_unset();
		session_destroy();
		$this->viewadmin("login");
	}
	function listRole(){
		$this->viewadmin("masterpageadmin",[
			 	"page"=>"roles", 
			 	"role"=>$this->Role->listRoles()
		]);
	}
	function listRoletalbe(){
		$this->viewadmins("table",[
			 	"role"=>$this->Role->listRoles()
		]);
	}
	function listCategoryTable(){
		$this->viewadmins("listcontentCategory",[
			 	"category"=>$this->Category->listAll()
		]);
	}
	function listCategory(){
		$this->viewadmin("masterpageadmin",[
			 	"page"=>"listCategory", 
			 	"category"=>$this->Category->listAll()
		]);
	}
	function formAddCategory(){
		$this->viewadmin("masterpageadmin",[
			 	"page"=>"addCategory", 
			 	"category"=>$this->Category->listAll()
		]);
	}
	function addCategory(){
		$nameCate=$_POST['ct'];
		$unameCate=$_POST['uct'];
		// $imageCate=$_POST['im'];
			//file have name,type,tmp_name,error,size
			$file=$_FILES['im'];
			$fileName=$_FILES['im']['name'];
			$fileType=$_FILES['im']['type'];
			$fileTmpName=$_FILES['im']['tmp_name'];
			$fileError=$_FILES['im']['error'];
			$fileSize=$_FILES['im']['size'];
			$endFileReal=explode(".",$fileName);
			$endFile=strtolower(end($endFileReal));
			$arrayEndFile=array("jpg","png","jpeg","pdf");
			if (in_array($endFile,$arrayEndFile)) {
				if($fileError===0){
					if($fileSize<1000000){
						$fileNameNew=uniqid('',true).".".$endFile;
						$fileDestination="./public/img/".$fileNameNew;
						move_uploaded_file($fileTmpName,$fileDestination);
						$this->Category->insertcategories($nameCate,$unameCate,$fileNameNew);
						$this->listCategory();
					}else{
						echo "file big size";
					}
				}else{
					echo "file error";
				}
			}
	}
	function deleCate(){
		$idCate=$_POST['CategoryID'];
		$countCate=$this->Category->delcategories($idCate);
		$this->viewadmin("masterpageadmin",[
			 	"page"=>"listCategory", 
			 	"category"=>$this->Category->listAll(), 
			 	"kq"=>$countCate
		]);
	}
	function editFormCate(){
		$idCate = filter_input(INPUT_GET, 'id_category');
		$this->viewadmin("masterpageadmin",[
			 	"page"=>"editCategory", 
			 	"category"=>$this->Category->listcategories($idCate)
		]);
	}
	function editCate(){
		$idCate=$_POST['CategoryID'];
		$nameCate=$_POST['ct'];
		$unameCate=$_POST['uct'];
		$oldfile = $_POST['img-url'];
		$file=$_FILES['im']['name'];
		if($file!="") {
	     	$file=$_FILES['im'];
			$fileName=$_FILES['im']['name'];
			$fileType=$_FILES['im']['type'];
			$fileTmpName=$_FILES['im']['tmp_name'];
			$fileError=$_FILES['im']['error'];
			$fileSize=$_FILES['im']['size'];
			$endFileReal=explode(".",$fileName);
			$endFile=strtolower(end($endFileReal));
			$arrayEndFile=array("jpg","png","jpeg","pdf");
			if (in_array($endFile,$arrayEndFile)) {
				if($fileError===0){
					if($fileSize<1000000){
						$fileNameNew=uniqid('',true).".".$endFile;
						$fileDestination="./public/img/".$fileNameNew;
						move_uploaded_file($fileTmpName,$fileDestination);
						$this->Category->updatecategories($idCate,$nameCate,$unameCate,$fileNameNew);
						$this->listCategory();
					}else{
						echo "file big size";
					}
				}else{
					echo "file error";
				}
			}
	    } else {
	   		 $file = $oldfile;
	   		 $this->Category->updatecategories($idCate,$nameCate,$unameCate,$file);
			$this->listCategory();
	    }
			
	}
	function listUser(){
		$this->viewadmin("masterpageadmin",
		["page"=>"listUser","user"=>$this->User->listAll()]);
	}
	function formAddUser(){
		$this->viewadmin("masterpageadmin", ["page"=>"addUser","role"=>$this->Role->listRoles()]);
	}
	function insertUser(){
		$username=$_POST['usn'];
		$email=$_POST['em'];
		$pass=$_POST['pass'];
		$full_name=$_POST['fullname'];
		$id_role=$_POST['id_role'];
		$active=$_POST['active'];
		if($active==''){
			$active=0;
		}else{
			$active=1;
		}
		$this->User->addUser($username,$email,$pass,$full_name,$id_role,$active);
		$this->listUser();
	}
	function deleUser(){
		$id_user=$_POST['userID'];
		$this->User->delUser($id_user);
		$this->listUser();
	}
	function editFormUser(){
		$id_user=filter_input(INPUT_GET,'id_user');
		$this->viewadmin("masterpageadmin", 
		[
			"page"=>"editUser",
			"userbyID"=>$this->User->listAllbyID($id_user),
			"role"=>$this->Role->listRoles()
		]);
	}
	function editUser(){
		$idU=$_POST['idUser'];
		$username=$_POST['usn'];
		$email=$_POST['em'];
		$pass=$_POST['pass'];
		$full_name=$_POST['fullname'];
		$id_role=$_POST['id_role'];		
		if($_POST['active']==''){
			$active=0;
		}else{
			$active=1;
		}
		//$active=$_POST['active'];
		$this->User->editUser($idU,$username,$email,$pass,$full_name,$id_role,$active);
		$this->listUser();
	}
	function listVegetable(){
		$this->viewadmin("masterpageadmin", [
			"page"=>"listVegetable", "vege"=>$this->Vege->listVegetables()]);
	}
	function callAddVege(){
		$this->viewadmin("masterpageadmin", [
			"page"=>"addVegetable"]);
	}
	function addVege(){
		$nameVe=$_POST['nameVe'];
		$price=$_POST['price'];
		$this->Vege->insertvegetables($nameVe,$price);
		$this->listVegetable();
	}
	function dellVege(){
		$idVe=$_POST['idVe'];
		$this->Vege->delvegetables($idVe);
		$this->listVegetable();
	}
	function editFormVege(){
		$id_vegetable=filter_input(INPUT_GET,'id_vegetable');
		$this->viewadmin("masterpageadmin",["page"=>"editVege","vegetable"=>$this->Vege->listsvegetables($id_vegetable)]);
	}
	function editVege(){
		$idVe=$_POST['idVe'];
		$nameVe=$_POST['nameVe'];
		$price=$_POST['price'];
		$this->Vege->updatevegetabless($idVe,$nameVe,$price);
		$this->listVegetable();
	}
	function listMeat(){
		$this->viewadmin("masterpageadmin", [
			"page"=>"listMeat", "vege"=>$this->Meat->meats()]);
	}
	function callAddMeat(){
		$this->viewadmin("masterpageadmin", [
			"page"=>"addMeat"]);
	}
	function addMeat(){
		$nameVe=$_POST['nameVe'];
		$price=$_POST['price'];
		$this->Meat->insertmeats($nameVe,$price);
		$this->listMeat();
	}
	function dellMeat(){
		$idVe=$_POST['idVe'];
		$this->Meat->delmeats($idVe);
		$this->listMeat();
	}
	function editFormMeat(){
		$id_vegetable=filter_input(INPUT_GET,'id_vegetable');
		$this->viewadmin("masterpageadmin",["page"=>"editMeat","vegetable"=>$this->Meat->listmeats($id_vegetable)]);
	}
	function editMeat(){
		$idVe=$_POST['idVe'];
		$nameVe=$_POST['nameVe'];
		$price=$_POST['price'];
		$this->Meat->updatemeats($idVe,$nameVe,$price);
		$this->listMeat();
	}
	// process spices
	function listSpice(){
		$this->viewadmin("masterpageadmin", [
			"page"=>"listSpice", "vege"=>$this->Spice->spices()]);
	}
	function callAddSpice(){
		$this->viewadmin("masterpageadmin", [
			"page"=>"addSpice"]);
	}
	function addSpice(){
		$nameVe=$_POST['nameVe'];
		$price=$_POST['price'];
		$this->Spice->insertspices($nameVe,$price);
		$this->listSpice();
	}
	function delSpice(){
		$idVe=$_POST['idVe'];
		$this->Spice->delspices($idVe);
		$this->listSpice();
	}
	function editFormSpice(){
		$id_vegetable=filter_input(INPUT_GET,'id_vegetable');
		$this->viewadmin("masterpageadmin",["page"=>"editSpice","vegetable"=>$this->Spice->listspices($id_vegetable)]);
	}
	function editSpice(){
		$idVe=$_POST['idVe'];
		$nameVe=$_POST['nameVe'];
		$price=$_POST['price'];
		$this->Spice->updatemeats($idVe,$nameVe,$price);
		$this->listSpice();
	}
	// Process seafood 
	function listSeaFood(){
		$this->viewadmin("masterpageadmin", [
			"page"=>"listSeaFood", "vege"=>$this->SeaFood->seafoods()]);
	}
	function callAddSeaFood(){
		$this->viewadmin("masterpageadmin", [
			"page"=>"addSeaFood"]);
	}
	function addSeaFood(){
		$nameVe=$_POST['nameVe'];
		$price=$_POST['price'];
		$this->SeaFood->insertseafoods($nameVe,$price);
		$this->listSeaFood();
	}
	function delSeaFood(){
		$idVe=$_POST['idVe'];
		$this->SeaFood->delseafoods($idVe);
		$this->listSeaFood();
	}
	function editFormSeaFood(){
		$id_vegetable=filter_input(INPUT_GET,'id_vegetable');
		$this->viewadmin("masterpageadmin",["page"=>"editSeaFood","vegetable"=>$this->SeaFood->listseafoods($id_vegetable)]);
	}
	function editSeaFood(){
		$idVe=$_POST['idVe'];
		$nameVe=$_POST['nameVe'];
		$price=$_POST['price'];
		$this->SeaFood->updateseafoods($idVe,$nameVe,$price);
		$this->listSeaFood();
	}
	// process Detail Category 
	function listDetailCategory(){
		$this->viewadmin("masterpageadmin",[
			 	"page"=>"listDetailCategory", 
			 	"category"=>$this->DetailCategory->detail_categories()
		]);
	}
	function formAddDetailCategory(){
		$this->viewadmin("masterpageadmin",[
			 	"page"=>"addDetailCategory", 
			 	"category"=>$this->Category->listAll()
		]);
	}
	function addDetailCategory(){
		$nameDetailCate=$_POST['name_detail_category'];
		$unameDetailCate=$_POST['name_unsigned'];
		$id_cate=$_POST['id_category'];
		$this->DetailCategory->insertdetail_categories($nameDetailCate,$unameDetailCate,$id_cate);
		$this->listDetailCategory();
	}
	function deleDetailCate(){
		$idCate=$_POST['CategoryID'];
		$countCate=$this->DetailCategory->deldetail_categories($idCate);
		$this->listDetailCategory();
	}
	function editFormDetailCate(){
		$idCate = filter_input(INPUT_GET, 'id_category');
		$this->viewadmin("masterpageadmin",[
			 	"page"=>"editDetailCategory", 
			 	"detailcategory"=>$this->DetailCategory->listdetail_categories($idCate),
			 	"category"=>$this->Category->listAll()
		]);
	}
	function editDetailCate(){
		$idDetailCate=$_POST['idDetailCate'];
		$nameCate=$_POST['name_detail_category'];
		$unameCate=$_POST['name_unsigned'];
		$idCate=$_POST['id_category'];
		$this->DetailCategory->updatedetail_categories($idDetailCate,$nameCate,$unameCate,$idCate);
	    $this->listDetailCategory();
	}
	// Process DIsh 
	function listDish(){
		$this->viewadmin("masterpageadmin", [
			"page"=>"listDish","dish"=>$this->Dish->dishs()
		]);
	}
	function formAddDish(){
		$this->viewadmin("masterpageadmin", [
			"page"=>"addDish",
			"detailcategory"=>$this->DetailCategory->detail_categories()
		]);
	}
	function addDish(){
		$namedish=$_POST['name_dish'];
		$description=$_POST['description'];
		$preprocessing=$_POST['preprocessing'];
		$link_video=$_POST['link_video'];
		$id_detail_category=$_POST['id_detail_category'];
		$file=$_FILES['image'];
			$fileName=$_FILES['image']['name'];
			$fileType=$_FILES['image']['type'];
			$fileTmpName=$_FILES['image']['tmp_name'];
			$fileError=$_FILES['image']['error'];
			$fileSize=$_FILES['image']['size'];
			$endFileReal=explode(".",$fileName);
			$endFile=strtolower(end($endFileReal));
			$arrayEndFile=array("jpg","png","jpeg","pdf");
			if (in_array($endFile,$arrayEndFile)) {
				if($fileError===0){
					if($fileSize<1000000){
						$fileNameNew=uniqid('',true).".".$endFile;
						$fileDestination="./public/img/".$fileNameNew;
						move_uploaded_file($fileTmpName,$fileDestination);
						$this->Dish->insertdishs($namedish,$description,$preprocessing,$link_video,$fileNameNew,$id_detail_category)	;
						$this->listDish();	
					}else{
						echo "file big size";
					}
				}else{
					echo "file error";
				}
			}
		

	}
	function dellDish(){
		$id=$_POST['DishID'];
		$this->Dish->deldishs($id);
		$this->listDish();	
	}
	function formEditDish(){
		$id=$_GET['id_dish'];
		$this->viewadmin("masterpageadmin", [
			"page"=>"editDish",
			"dish"=>$this->Dish->listdishs($id),
			"detailcategory"=>$this->DetailCategory->detail_categories() 
		]);
	}
	function editDish(){
		$id_dish=$_POST['id_dish'];
		$namedish=$_POST['name_dish'];
		$description=$_POST['description'];
		$preprocessing=$_POST['preprocessing'];
		$link_video=$_POST['link_video'];
		$id_detail_category=$_POST['id_detail_category'];	
		$oldfile = $_POST['img-url'];
		$file=$_FILES['imagee']['name'];
		if($file!="") {
	     	$file=$_FILES['imagee'];
			$fileName=$_FILES['imagee']['name'];
			$fileType=$_FILES['imagee']['type'];
			$fileTmpName=$_FILES['imagee']['tmp_name'];
			$fileError=$_FILES['imagee']['error'];
			$fileSize=$_FILES['imagee']['size'];
			$endFileReal=explode(".",$fileName);
			$endFile=strtolower(end($endFileReal));
			$arrayEndFile=array("jpg","png","jpeg","pdf");
			if (in_array($endFile,$arrayEndFile)) {
				if($fileError===0){
					if($fileSize<1000000){
						$fileNameNew=uniqid('',true).".".$endFile;
						$fileDestination="./public/img/".$fileNameNew;
						move_uploaded_file($fileTmpName,$fileDestination);
						$this->Dish->updatedishs($id_dish,$namedish,$description,$preprocessing,$link_video,$fileNameNew,$id_detail_category)	;
						$this->listDish();
					}else{
						echo "file big size";
					}
				}else{
					echo "file error";
				}
			}
	    } else {
	   		 $file = $oldfile;
	   		 $this->Dish->updatedishs($id_dish,$namedish,$description,$preprocessing,$link_video,$file,$id_detail_category)	;
			$this->listDish();
	    }
	}
	//xử lý ressource
	function listRessource(){
		$this->viewadmin("masterpageadmin", [
			"page"=>"listRessource", 
			"resource"=>$this->Ressource->ressources()
		]);
	}
	function formAddRessource(){
		$this->viewadmin("masterpageadmin", [
			"page"=>"addRessource", 
			"dish"=>$this->Dish->dishs(), 
			"vege"=>$this->Vege->listVegetables(), 
			"sea"=>$this->SeaFood->seafoods(), 
			"meat"=>$this->Meat->meats(), 
			"spice"=>$this->Spice->spices()
		]);
	}
	function addRessource(){
		$id_dish=$_POST['id_dish'];
		$quatity=$_POST['quatity'];
		$id_vegetable=$_POST['id_vegetable'];
		$id_seafood=$_POST['id_seafood'];
		$id_meat=$_POST['id_meat'];
		$id_spice=$_POST['id_spice'];
		$this->Ressource->insertressources($id_dish,$quatity,$id_vegetable,$id_seafood,$id_meat,$id_spice)	;
		$this->listRessource();	
	}
	function dellRessource(){
		$id=$_POST['id_ressource'];
		$this->Ressource->delressources($id);
		$this->listRessource();	
	}
	function editFormRessource(){
		$id=$_GET['id_ressource'];
		$this->viewadmin("masterpageadmin", [
			"page"=>"editRessource", 
			"resource"=>$this->Ressource->listressources($id),
			"dish"=>$this->Dish->dishs(), 
			"vege"=>$this->Vege->listVegetables(), 
			"sea"=>$this->SeaFood->seafoods(), 
			"meat"=>$this->Meat->meats(), 
			"spice"=>$this->Spice->spices()
		]);
	}
	function editRessource(){
		$id_ressource=$_POST['id_ressource'];
		$id_dish=$_POST['id_dish'];
		$quatity=$_POST['quatity'];
		$id_vegetable=$_POST['id_vegetable'];
		$id_seafood=$_POST['id_seafood'];
		$id_meat=$_POST['id_meat'];
		$id_spice=$_POST['id_spice'];
		$this->Ressource->updateressources($id_ressource,$id_dish,$quatity,$id_vegetable,$id_seafood,$id_meat,$id_spice)	;
		$this->listRessource();
	}
}
?>