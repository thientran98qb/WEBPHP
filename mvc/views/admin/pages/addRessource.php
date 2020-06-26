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
            <form action="<?=BASE_URL?>/Admin/addRessource" method="POST">
        <div class="form-group">
          <label for="usn">
            id_dish
          </label>
           <select name="id_dish">
          <?php 
            $roleU=$data['dish'];
            foreach ($roleU as $r) {
           ?>         
              <option value="<?php echo $r['id_dish']; ?>"><?php echo $r['name_dish']; ?></option>          
          <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="em">
            quatity
          </label>
          <input type="text" name="quatity"  class="form-control">
        </div>
        <div class="form-group">
          <label for="role">
            id_category
          </label>
          <select name="id_vegetable">
          <?php 
            $roleU=$data['vege'];
            foreach ($roleU as $r) {
           ?>         
              <option value="<?php echo $r['id_vegetable']; ?>"><?php echo $r['name_vegetable']; ?></option>          
          <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="role">
            id_category
          </label>
          <select name="id_seafood">
          <?php 
            $roleU=$data['sea'];
            foreach ($roleU as $r) {
           ?>         
              <option value="<?php echo $r['id_seafood']; ?>"><?php echo $r['name_seafood']; ?></option>          
          <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="role">
            id_category
          </label>
          <select name="id_meat">
          <?php 
            $roleU=$data['meat'];
            foreach ($roleU as $r) {
           ?>         
              <option class="form-control" value="<?php echo $r['id_meat']; ?>"><?php echo $r['name_meat']; ?></option>          
          <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="role">
            id_category
          </label>
          <select name="id_spice">
          <?php 
            $roleU=$data['spice'];
            foreach ($roleU as $r) {
           ?>         
              <option value="<?php echo $r['id_spice']; ?>"><?php echo $r['name_spice']; ?></option>          
          <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <input type="submit" name="addCateg" class="btn btn-secondary">
        </div>
      </form>
          </div>       
        </div>
 
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
