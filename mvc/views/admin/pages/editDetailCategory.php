<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail Category</li>
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
          <h3 class="card-title">Detail Category</h3><br>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
          <!-- Button trigger modal -->
          <div>
          	<?php $mangUser=$data['detailcategory']; ?>
           		<?php foreach ($mangUser as $us) {?>
           	<form action="<?=BASE_URL?>/Admin/editDetailCate" method="POST">   
           		<input type="hidden" name="idDetailCate" value="<?php echo $us['id_detail_category']; ?>">       		
				<div class="form-group">
					<label for="usn">
						name_detail_category
					</label>
					<input type="text" name="name_detail_category" value="<?php echo $us['name_detail_category']; ?>" class="form-control">
				</div>
				<div class="form-group">
					<label for="em">
						name_unsigned
					</label>
					<input type="text" name="name_unsigned" value="<?php echo $us['name_unsigned']; ?>" id="em" class="form-control">
				</div>
				<div class="form-group">
					<label for="role">
						Role
					</label>
					<select name="id_category">		
						<option value="<?php echo $us['id_category'] ?>"><?php echo $us['category_name'] ?></option>
						<?php 
						$roleU=$data['category'];
						foreach ($roleU as $r) {
					 ?>				
						<option value="<?php echo $r['id_category'] ?>"><?php echo $r['category_name'] ?>
						</option>					
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
