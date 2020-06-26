<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
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
          <h3 class="card-title">Edit Category</h3><br>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
          <!-- Button trigger modal -->
          <div>
                    <?php
              $mangCategory=$data['category'];
              ?>
              <?php foreach ($mangCategory as $category) {
              ?>
           	<form action="<?=BASE_URL?>/Admin/editCate" method="POST" enctype="multipart/form-data">    
              <input type="hidden" name="CategoryID" value="<?php echo $category['id_category']; ?>">
              <input type="hidden" name="img-url" value="<?php echo $category['image']; ?>">       
				<div class="form-group">          
					<label for="ct">
						Category Name
					</label>
					<input type="text" name="ct"  value="<?php echo $category['category_name']; ?>" class="form-control">
				</div>
				<div class="form-group">
					<label for="uct">
						Unsinged Category Name
					</label>
					<input type="text" name="uct"  value="<?php echo $category['unsigned_category_name']; ?>" class="form-control">
				</div>
				<div class="form-group">
					<label for="im">
						Imagee
					</label>
					<input type="file" name="im" id="imCate"  class="form-control">
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
