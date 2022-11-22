<!DOCTYPE html>

<html lang="en">
<head>
	<title>Kitabooking</title>
	<?= $style; ?>
	<?= $script; ?>
</head>
<body>
	<?= $navbar;
	$id = array('id' => 'addform')?>
	<div class="container half">
		<h1 class="text-center" style="padding-bottom: 15px;">Add Facility</h1>
		<?= form_open_multipart($this->session->userdata('role').'/addingfacilities',$id); ?>
		<div class="form-group">
			<label for="name">Nama</label>
			<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
		</div>
		<div class="form-group" id="desc">
			<label for="desc">Description</label>
		</div>
		<textarea name="desc" class="form-control" form="addform" placeholder="Description" required></textarea><br>
		<div class="form-group">
			<label for="image">Image</label>
			<input type="file" class="form-control" name="image" id="image" required>
		</div>
		<button type="submit" class="btn btn-success btn-block">Add</button>
		<?= form_close(); ?>
	</div>
</body>
</html>
