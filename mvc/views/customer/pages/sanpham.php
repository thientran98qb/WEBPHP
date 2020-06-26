<div class="bread">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.html">Gallery</a></li>
                        <?php $mangDish=$data['dish']; ?>

                        <li class="breadcrumb-item active" aria-current="page"><?php echo $mangDish[0]['name_dish']; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- het breakcrumb  -->
<div class="background">
    <div class="noidung Roboto">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <?php $mangDish=$data['dish']; ?>
                    <?php foreach ($mangDish as $dish) { ?>
                    <div class="box1">
                        <div class="heading">
                            <h1><?php echo $dish['name_dish']; ?></h1>
                            <p> <b>Thông tin mô tả</b> </p>
                        </div>
                        <div class="bodynoidung">
                            <p><?php echo $dish['description']; ?></p>
                            <!--  <img src="<?=BASE_URL?>/public/img/<?php echo $dish['image']; ?>" alt=""><br><br> -->
                        </div>
                        
                    </div>
                    <?php } ?>
                </div>
                <div class="col-sm-4">
                    <div class="box2">
                        <div class="container">
                            <div class="row">
                                <h3 style="border-bottom: 2px solid red;">Món ăn liên quan</h3>
                                <?php $mangDish=$data['dishall']; ?>
                                <?php foreach ($mangDish as $dish) { ?>
                                <div>
                                    <a href="<?=BASE_URL?>/Home/sanPham&id=<?php echo $dish['id_dish'];?>">
                                        <img src="<?=BASE_URL?>/public/img/<?php echo $dish['image']; ?>"
                                        alt="" class="img-fluid monan abc">
                                        <div class="text">
                                            <p class="bigtext">
                                                <?php echo $dish['name_dish'];?>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                            </div>
                        </div>                  
                    </div>
                    </div> <!--het row-->
                    </div> <!--het container-->
                    </div> <!--het noi dung-->
</div><!--het background