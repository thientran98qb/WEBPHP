<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dish</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dish</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Dish</h3><br>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
          <!-- Button trigger modal -->
          <div>
            <?php $mangDish=$data['dish']; ?>
            <?php foreach ($mangDish as $dish) { ?>
           	<form action="<?=BASE_URL?>/Admin/editDish" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id_dish" value="<?php echo $dish['id_dish'];?>">
              <input type="hidden" name="img-url" value="<?php echo $dish['image']; ?>">
				<div class="form-group">
					<label for="usn">
						name_dish
					</label>
					<input type="text" value="<?php echo $dish['name_dish']; ?>" name="name_dish" class="form-control">
				</div>
				<div class="form-group">
					<label for="em">
						description
					</label>
          <textarea name="description" class="ckeditor" class="form-control">
            <?php echo $dish['description']; ?>
          </textarea>
				</div>
        <div class="form-group">
          <label for="em">
            preprocessing
          </label>
          <input type="text" name="preprocessing" value="<?php echo $dish['preprocessing']; ?>" class="form-control">
        </div>
        <div class="form-group">
          <label for="em">
            link_video
          </label>
          <input type="text" name="link_video" value="<?php echo $dish['link_video']; ?>" class="form-control">
        </div>
        <div class="form-group">
          <label for="image">
            image
          </label>
          <input type="file" name="imagee"  class="form-control">
        </div>

				<div class="form-group">
					<label for="role">
						id_detail_category
					</label>
					<select name="id_detail_category">
            <option value="<?php echo $dish['id_detail_category']; ?>"><?php echo $dish['name_detail_category']; ?></option>
					<?php 
						$roleU=$data['detailcategory'];
						foreach ($roleU as $r) {
					 ?>					
							<option value="<?php echo $r['id_detail_category']; ?>"><?php echo $r['name_detail_category']; ?></option>					
					<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<input type="submit" name="addCateg" class="btn btn-secondary">
				</div>
			</form>
    <?php } ?>
          </div>       
        </div>
 
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
