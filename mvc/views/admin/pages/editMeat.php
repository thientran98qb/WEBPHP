<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Meat</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Meat</li>
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
          <h3 class="card-title">Meat</h3><br>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
          </div>
          <!-- Button trigger modal -->
          <div>
            <?php $mangVege=$data['vegetable']; ?>
              <?php foreach ($mangVege as $veg) {
              ?>
            <form action="<?=BASE_URL?>/Admin/editMeat" method="POST">
              <input type="hidden" name="idVe" value="<?php echo $veg['id_meat']; ?>">
              <div class="form-group">
                <label for="ct">
                  Meat Name
                </label>
                <input type="text" name="nameVe" value="<?php echo $veg['name_meat'];  ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="uct">
                  Price
                </label>
                <input type="text" name="price" value="<?php echo $veg['price'];  ?>"  class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-secondary">
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