<!DOCTYPE html>

<html lang="en">
<head>
	<title>Kitabooking</title>
	<?= $style; ?>
	<?= $script; ?>
</head>
<body>
	<?= $navbar;?>
	<?php foreach ($detail as $row) : ?>
		<div style="padding-top : 50px; padding-bottom : 50px;">
			<div class="container" style="border:1px solid black;">
				<div class="text-center">
					<h1><?= $row['nama'];?></h1>
					<img src="<?php echo base_url($row['gambar']); ?>" alt="Fasilitas" class="img-thumbnail" style="height : 300px;">
					<h4><?= $row['deskripsi']; ?></h4>
					<a href="<?= site_url('user/booking/'.$row['id_fasList'])?>">
						<button class="btn btn-info">Book</button>
					</a>
					<a href="<?= site_url('user')?>/facilities"><button class="btn btn-danger">Return to listing</button></a>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
	</div>
</html>
