<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
          <h3 class="card-title">User</h3><br>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
          <!-- Button trigger modal -->
          <div>
          	<?php $mangUser=$data['userbyID']; ?>
           		<?php foreach ($mangUser as $us) {?>
           	<form action="<?=BASE_URL?>/Admin/editUser" method="POST">   
           		<input type="hidden" name="idUser" value="<?php echo $us['id_user']; ?>">       		
				<div class="form-group">
					<label for="usn">
						User Name
					</label>
					<input type="text" name="usn" id="usn" value="<?php echo $us['username']; ?>" class="form-control">
				</div>
				<div class="form-group">
					<label for="em">
						Email
					</label>
					<input type="text" name="em" value="<?php echo $us['email']; ?>" id="em" class="form-control">
				</div>
				<div class="form-group">
					<label for="pass">
						Password
					</label>
					<input type="text" name="pass" value="<?php echo $us['password']; ?>" id="pass" class="form-control">
				</div>
				<div class="form-group">
					<label for="fullname">
						Full name
					</label>
					<input type="text" name="fullname" id="fullname" value="<?php echo $us['full_name']; ?>" class="form-control">
				</div>
				<div class="form-group">
					<label for="role">
						Role
					</label>
					<select name="id_role">		
						<option value="<?php echo $us['id_role'] ?>"><?php echo $us['role_name'] ?></option>
						<?php 
						$roleU=$data['role'];
						foreach ($roleU as $r) {
					 ?>				
						<option value="<?php echo $r['id_role'] ?>"><?php echo $r['role_name'] ?>
						</option>					
				<?php } ?>				
					</select>
				
				</div>
				<div class="form-group">
					<label for="active">
						Active
					</label>
					<?php if($us['active']==1){ ?>
						<input type="checkbox" value="<?php echo $us['active']; ?>" checked name="active">
					<?php }else{ ?>
						<input type="checkbox" value="<?php echo $us['active']; ?>" name="active">
					<?php } ?>
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
