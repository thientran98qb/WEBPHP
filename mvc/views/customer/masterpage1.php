
<!DOCTYPE html>
<html>
<head>
	<title> CDIO </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script src="<?=BASE_URL?>/public/vendor/jquery-351.min.js"></script>
	<script type="text/javascript" src="<?=BASE_URL?>/public/vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?=BASE_URL?>/public/1.js"></script>
	<link rel="stylesheet" href="<?=BASE_URL?>/public/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?=BASE_URL?>/public/vendor/font-awesome.css">
	<link rel="stylesheet" href="<?=BASE_URL?>/public/1.css">
	<link rel="stylesheet" href="<?=BASE_URL?>/public/item.css">
	

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <SCRIPT LANGUAGE = "Javascript">
$(document).ready(function() {
	  $("a[href*='#']:not([href='#])").click(function() {
	    let target = $(this).attr("href");
	    $('html,body').stop().animate({
	      scrollTop: $(target).offset().top
	    }, 100);
	    event.preventDefault();
	  });	  
});
</SCRIPT>

</head>
<body >
	<?php require_once "./mvc/views/customer/blocks/header.php"; ?>
	<!--het danh muc-->
	
	
	<!-- Header section end -->
		<?php require_once "./mvc/views/customer/pages/".$data["page"].".php"; ?>
	<!-- Hero section -->
		<?php require_once "./mvc/views/customer/blocks/footer.php"; ?>	



	<!-- comments -->

	<!-- <div class="thucdon1" id="menu1page1">
		<div class="container">
			<div class="row">
				<div class="col-sm-4"> -->
	

	<!--het footer-->
</body>
</html>