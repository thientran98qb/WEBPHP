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
						<!-- Modal -->
						<p><a href="<?=BASE_URL?>/Admin/formAddDetailCategory" class="btn btn-primary">Add Detail Category</a></p>
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
									id_detail_category
								</th>
								<th>
									category_name
								</th>
								<th>
									unsigned_category_name
								</th>
								<th>
									id_category
								</th>
								<th>
									Action
								</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$mangCategory=$data['category'];
							?>
							<?php foreach ($mangCategory as $category) {
							?>
							<tr>
								<td>
									<?php echo $category['id_detail_category']; ?>
								</td>
								<td>
									<?php echo $category['name_detail_category']; ?>
								</td>
								<td>
									<?php echo $category['name_unsigned']; ?>
								</td>
								<td>
									<section name="categoryy">
										<option value="<?php echo $category['id_category']; ?>"><?php echo $category['id_category']; ?></option>
									</section>
								</td>
								<td class="project-actions text-left">
									<a href="<?=BASE_URL?>/Admin/editFormDetailCate&id_category=<?php echo $category['id_detail_category']; ?>" class="btn btn-primary btn-sm">Edit</a>
									<form action="<?=BASE_URL?>/Admin/deleDetailCate" method="post" style="float: left;">
										<input type="hidden" name="CategoryID" value="<?php echo $category['id_detail_category']; ?>">
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