<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Role User</h1>
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
						<!-- Modal -->
						<p><a href="<?=BASE_URL?>/Admin/formAddUser" class="btn btn-primary">Add User</a></p>
					</div>
				</div>
				<div class="card-body p-0">
					<!-- <?php if (isset($countCate)){?>
						<?php if($countCate>0) {?>
							<p>Xoas thjanh cong</p>
						<?php } ?>
					<?php } ?> -->
					<table class="table table-striped projects">
						<thead>
							<tr>
								<th>
									id_user
								</th>
								<th>
									username
								</th>
								<th>
									email
								</th>
								<th>
									password
								</th>
								<th>
									full_name
								</th>
								<th>
									id_role
								</th>
								<th>
									actice
								</th>
								<th>
									Action
								</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$mangUser=$data['user'];
							?>
							<?php foreach ($mangUser as $us) {
							?>
							<tr>
								<td>
									<?php echo $us['id_user']; ?>
								</td>
								<td>
									<?php echo $us['username']; ?>
								</td>
								<td>
									<?php echo $us['email']; ?>
								</td>
								<td>
									<?php echo $us['password']; ?>
								</td>
								<td>
									<?php echo $us['full_name']; ?>
								</td>
								<td>
									<?php echo $us['id_role']; ?>
								</td>
								<td>
									<?php echo $us['active']; ?>
								</td>
								<td class="project-actions text-left">
									<a href="<?=BASE_URL?>/Admin/editFormUser&id_user=<?php echo $us['id_user']; ?>" class="btn btn-primary btn-sm">Edit</a>
									<form action="<?=BASE_URL?>/Admin/deleUser" method="post" style="float: left;">
										<input type="hidden" name="userID" value="<?php echo $us['id_user']; ?>">
										<input type="submit" value="Delete" class="btn btn-danger btn-sm">
									</form>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</section>
		<!-- /.content -->
	</div>