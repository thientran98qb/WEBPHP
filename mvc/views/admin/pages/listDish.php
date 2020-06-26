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

				<div class="card-header">
					<h3 class="card-title">Dish</h3><br>
					<!-- <div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fas fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fas fa-times"></i></button>
					</div> -->
					<!-- Button trigger modal -->
					<div>
						<!-- Modal -->
						<p><a href="<?=BASE_URL?>/Admin/formAddDish" class="btn btn-primary">Add Dish</a></p>
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
									id_dish
								</th>
								<th>
									name_dish
								</th>
								<th>
									description
								</th>
								<th>
									preprocessing
								</th>
								<th>
									link_video
								</th>
								<th>
									image
								</th>
								<th>
									id_detail_category
								</th>
								<th>
									Action
								</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$mangCategory=$data['dish'];
							?>
							<?php foreach ($mangCategory as $category) {
							?>
							<tr>
								<td>
									<?php echo $category['id_dish']; ?>
								</td>
								<td>
									<?php echo $category['name_dish']; ?>
								</td>
								<td>
									<?php echo htmlspecialchars($category['description']); ?>
								</td>
								<td>
									<?php echo $category['preprocessing']; ?>
								</td>
								<td>
									<?php echo $category['link_video']; ?>
								</td>
								<td>
									<img  src="<?=BASE_URL?>/public/img/<?php echo $category['image']; ?>" height="100px" width="100px">
								</td>
								<td>
									<section name="id_detail_category">
										<option value="<?php echo $category['id_detail_category']; ?>"><?php echo $category['id_detail_category']; ?></option>
									</section>
								</td>
								<td class="project-actions text-left">
									<a href="<?=BASE_URL?>/Admin/formEditDish&id_dish=<?php echo $category['id_dish']; ?>" class="btn btn-primary btn-sm">Edit</a>
									<form action="<?=BASE_URL?>/Admin/dellDish" method="post" style="float: left;">
										<input type="hidden" name="DishID" value="<?php echo $category['id_dish']; ?>">
										<input type="submit" value="Delete" class="btn btn-danger btn-sm">
									</form>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<!-- /.card-body -->

			<!-- /.card -->
		</section>
		<!-- /.content -->
	</div>