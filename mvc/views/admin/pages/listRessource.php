<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Ressource</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Ressource</li>
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
					<h3 class="card-title">Ressource</h3><br>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fas fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fas fa-times"></i></button>
					</div>
					<!-- Button trigger modal -->
					<div>
						<!-- Modal -->
						<p><a href="<?=BASE_URL?>/Admin/formAddRessource" class="btn btn-primary">Add Ressource</a></p>
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
									id_ressource
								</th>
								<th>
									id_dish
								</th>
								<th>
									quatity	
								</th>
								<th>
									id_vegetalbe
								</th>
								<th>
									id_seafood
								</th>
								<th>
									id_meat
								</th>
								<th>
									id_spice
								</th>
								<th>
									Action
								</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$mangCategory=$data['resource'];
							?>
							<?php foreach ($mangCategory as $category) {
							?>
							<tr>
								<td>
									<?php echo $category['id_ressource']; ?>
								</td>
								<td>
									<?php echo $category['name_dish']; ?>
								</td>
								<td>
									<?php echo $category['quatity']; ?>
								</td>
								<td>
									<?php echo $category['name_vegetable']; ?>
								</td>
								<td>
									<?php echo $category['name_seafood']; ?>
								</td>
								<td>
									<?php echo $category['name_meat']; ?>
								</td>
								<td>
									<?php echo $category['name_spice']; ?>
								</td>
								
								<td class="project-actions text-left">
									<a href="<?=BASE_URL?>/Admin/editFormRessource&id_ressource=<?php echo $category['id_ressource']; ?>" class="btn btn-primary btn-sm">Edit</a>
									<form action="<?=BASE_URL?>/Admin/dellRessource" method="post" style="float: left;">
										<input type="hidden" name="id_ressource" value="<?php echo $category['id_ressource']; ?>">
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