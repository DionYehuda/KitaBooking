<div class="container">
	<h1 class="text-center">Facilities List</h1>
	<div class="row">
		<?php foreach ($facilities as $row) : ?>
			<div class="padding-top:500px;">
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail" style="height : 350px;">
						<a href="<?= site_url('user/facilitiesdetail/'.$row['id_fasList'])?>">
							<i class="fa fa-close fa-2x"></i>
							<img src="<?php echo base_url($row['gambar']); ?>" alt="Fasilitas">
							<div class="caption">
								<h3><?= $row['nama']; ?></h3>
							</div>
						</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
