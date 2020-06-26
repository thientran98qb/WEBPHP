<div class="slide">
		<div id="slidehome" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li class="active" data-target="#slidehome" data-slide-to="0" aria-current="location"></li>
				<li data-target="#slidehome" data-slide-to="1"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="textslide Oswald">
						<span class="spanslide">Eat With Your Love</span>	
					</div>
					<img src="<?=BASE_URL?>/public/img/imageslide1.jpg" alt="">
					
				</div>
				<div class="carousel-item">
					<div class="textslide Oswald">
						<span class="spanslide">Eat With Your Love</span>	
					</div>
					<img src="<?=BASE_URL?>/public/img/imageslide3.jpg" alt="">
					<!-- <div class="carousel-caption d-none d-md-block">
						<h5>Eat With Your Love</h5>
						<p>Text</p>
					</div> -->
				</div>
			</div>
			<!-- <a class="carousel-control-prev" href="#slidehome" data-slide="prev" role="button">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#slidehome" data-slide="next" role="button">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a> -->

			<a class="carousel-control-prev" href="#slidehome" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#slidehome" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
		</div>
<div id="neo">Đây là neo</div>
	<div class="danhmuc" id="root" >
		<div class="container">
			<!-- <div class="row"> -->
				<?php $categoryD=$data['categories']; ?>
				<?php for ($i=0; $i <count($categoryD); $i++) { ?>
				<div class="col-sm-3">	
					<div class="dm" id="menu<?php echo ($i+1); ?>">
						<a href="<?=BASE_URL?>/Home/getAllsp&id_category=<?php 
						echo $categoryD[$i]['id_category']; ?>" id_category=<?php 
						echo $categoryD[$i]['id_category']; ?> class="dm1" id="mn<?php echo ($i+1); ?>" >
							<p id="text<?php echo ($i+1); ?>" class="doimau">
								<?php echo $categoryD[$i]['category_name']; ?></p> 
							<!-- <img src="img/icon menu.png" alt=""> -->
						</a>
						<div id="gachchan" class="gachchan"></div>
					</div>	
				</div>
				<?php } ?>
				<!-- <div class="col-sm-3">	
					<div class="dm" id="menu2" >
						<a href="#neo" class="dm1" id="mn2">
							<p id="text2" >Pha chế</p> 
						</a>
						<div class="gachchan"></div>
					</div>	
				</div> -->
				<!-- <div class="col-sm-3">	
					<div class="dm" id="menu3">
						<a href="#neo" class="dm1" id="mn3">
							<p id="text3" >Món ăn theo mùa</p> 
						</a>
						<div class="gachchan"></div>
					</div>	
				</div>
				<div class="col-sm-3">	
					<div class="dm" id="menu4"	>
						<a href="#neo" class="dm1" id="mn4">
							<p id="text4" >Món bánh</p> 
							
						</a>
						<div class="gachchan"></div>
					</div>	
				</div> -->
			<!-- </div> -->
		</div><!--het container-->
		<hr>
		<?php if(isset($_GET['id_category'])){ ?>
		<div class="container">
				<?php $categoryD=$data['detail_cate']; ?>
				<?php for ($i=0; $i <count($categoryD); $i++) { ?>
				<div class="col-sm-3">	
					<div class="dm" id="menu<?php echo ($i+1); ?>">
						<a href="<?=BASE_URL?>/Home/SayHi&id_detail_category=<?php 
						echo $categoryD[$i]['id_detail_category']; ?>" class="dm1" id="mn<?php echo ($i+1); ?>">
							<p id="text<?php echo ($i+1); ?>" class="doimau">
								<?php echo $categoryD[$i]['name_detail_category']; ?></p> 
							<!-- <img src="img/icon menu.png" alt=""> -->
						</a>
						<div id="gachchan" class="gachchan"></div>
					</div>	
				</div>
		<?php } ?>
		</div>	
		<?php } ?>	
	</div>
<div class="thucdon1" id="menu1page1">
	<?php if(!isset($_GET['id_category']) && !isset($_GET['id_detail_category']	)){?>
		<h1 style="margin-left:100px; ">Món ăn phổ biến</h1>
	<?php } ?>
		<div class="container">
			<div class="row">
				<?php $mangDish=$data['dish']; ?>
				<?php foreach ($mangDish as $dish) { ?>			
				<div class="col-sm-4">
					<a href="<?=BASE_URL?>/Home/sanPham&id=<?php echo $dish['id_dish'];?>">
						<img class="img-sp" src="<?=BASE_URL?>/public/img/<?php echo $dish['image']; ?>"
						 alt="" class="img-fluid monan">
						<div class="gray"></div>	
						<div class="text">
							<p class="bigtext">
								<?php echo $dish['name_dish'];?>
							</p>
							<p class="smalltext">
								XemThêm
							</p>
						</div>
					</a>
				</div>
			<?php } ?>
			</div>
		</div> <!--het container-->
</div>
<!--het thuc don 1-->

	<div class="thucdon1" id="menu2page1" style="display: none;">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/phache1.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Sữa Chua Chuối
								<!-- <img src="img/icon menu.png" alt="">  -->
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/phache2.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Cafe Sữa
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/phache3.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Chè Khúc Bạch
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
			</div><!--het row 1-->
			<div class="row">
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/mon3.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Xà Lách Trộn
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/mon4.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Đùi Gà Nướng Mật Ong
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/mon5.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Mì Trộn Thập Cẩm
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
			</div><!--het row 2-->
			<div class="row">
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/mon6.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Sườn Non Rim
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/mon7.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Thịt Kho Trứng Cút
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/mon8.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Cơm Cuộn
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
			</div><!--het row 3-->
			<div class="row4">
				<div class="pagination">
					<a class="pre" href="#">&laquo;</a>
					<a class="active page1" href="#">1</a>
					<a class="" href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					<a href="#">5</a>
					<a href="#">6</a>
					<a class="page7" href="#">7</a>
					<a class="next" href="#">&raquo;</a>
				</div>
			</div> <!--het row 4-->
		</div> <!--het container-->
	</div> <!--het thuc don 2-->

	
	<div class="thucdon1" id="menu3page1" style="display: none;">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/montheomua1.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Chắc là cà chua
								<!-- <img src="img/icon menu.png" alt="">  -->
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/montheomua4.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Món này không biết
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/montheomua3.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Bánh trưng nè
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
			</div><!--het row 1-->
			<div class="row">
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/mon3.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Xà Lách Trộn
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/mon4.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Đùi Gà Nướng Mật Ong
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/mon5.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Mì Trộn Thập Cẩm
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
			</div><!--het row 2-->
			<div class="row">
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/mon6.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Sườn Non Rim
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/mon7.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Thịt Kho Trứng Cút
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/mon8.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Cơm Cuộn
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
			</div><!--het row 3-->
			<div class="row4">
				<div class="pagination">
					<a class="pre" href="#">&laquo;</a>
					<a class="active page1" href="#">1</a>
					<a class="" href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					<a href="#">5</a>
					<a href="#">6</a>
					<a class="page7" href="#">7</a>
					<a class="next" href="#">&raquo;</a>
				</div>
			</div> <!--het row 4-->
		</div> <!--het container-->
	</div> <!--het thuc don 3-->

	<div class="thucdon1" id="menu4page1" style="display: none;">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/monbanh1.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Chắc là cà chua
								<!-- <img src="img/icon menu.png" alt="">  -->
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/monbanh2.png" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Món này không biết
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/monbanh3.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Bánh trưng nè
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
			</div><!--het row 1-->
			<div class="row">
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/mon3.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Xà Lách Trộn
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/mon4.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Đùi Gà Nướng Mật Ong
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/mon5.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Mì Trộn Thập Cẩm
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
			</div><!--het row 2-->
			<div class="row">
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/mon6.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Sườn Non Rim
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/mon7.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Thịt Kho Trứng Cút
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#">
						<img src="<?=BASE_URL?>/public/img/mon8.jpg" alt="" class="img-fluid monan">
						<div class="gray"></div>
						<div class="text">
							<p class="bigtext">
								Cơm Cuộn
							</p>
							<p class="smalltext">
								READMORE
							</p>
						</div>
					</a>
				</div>
			</div><!--het row 3-->
			<div class="row4">
				<div class="pagination">
					<a class="pre" href="#">&laquo;</a>
					<a class="active page1" href="#">1</a>
					<a class="" href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					<a href="#">5</a>
					<a href="#">6</a>
					<a class="page7" href="#">7</a>
					<a class="next" href="#">&raquo;</a>
				</div>
			</div> <!--het row 4-->
		</div> <!--het container-->
	</div> <!--het thuc don 4-->
