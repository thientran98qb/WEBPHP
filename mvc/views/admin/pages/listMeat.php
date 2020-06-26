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
						<!-- Modal -->
						<p><a href="<?=BASE_URL?>/Admin/callAddMeat" class="btn btn-primary">Add Meat</a></p>
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
									id_Meat
								</th>
								<th>
									name_Meat
								</th>
								<th>
									price
								</th>
								
								<th>
									Action
								</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$mangUser=$data['vege'];
							?>
							<?php foreach ($mangUser as $us) {
							?>
							<tr>
								<td>
									<?php echo $us['id_meat']; ?>
								</td>
								<td>
								 	<?php echo  $us['name_meat']; ?>
								</td>
								<td>
									<?php echo number_format($us['price']); ?>
								</td>
							
								<td class="project-actions text-left">
									<a href="<?=BASE_URL?>/Admin/editFormMeat&id_vegetable=<?php echo $us['id_meat']; ?>" class="btn btn-primary btn-sm">Edit</a>
									<form action="<?=BASE_URL?>/Admin/dellMeat" method="post" style="float: left;">
										<input type="hidden" name="idVe" value="<?php echo $us['id_meat']; ?>">
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