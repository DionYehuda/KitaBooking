<!DOCTYPE html>

<html lang="en">
<head>
	<title>Kitabooking</title>
	<?= $style; ?>
	<?= $script; ?>
</head>
<body>
	<?= $navbar;
	$id = array('id' => 'addform');
	$facilist = $facilist[0];?>
	<div class="container half">
		<h1 class="text-center" style="padding-bottom: 15px;">Edit Facility</h1>
		<?= form_open_multipart($this->session->userdata('role').'/editFacilities/'.$facilist['id_fasList'] ,$id);?>
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="<?=$facilist['nama']?>">
		</div>
		<div class="form-group" id="desc">
			<label for="desc">Description</label>
			<textarea name="desc" class="form-control" form="addform" placeholder="Description"><?=$facilist['deskripsi']?></textarea>
		</div>
		<div class="form-group">
			<label for="curimage">Current Image</label><br>	
			<img src="<?=base_url($facilist['gambar']);?>" style="width:30%" >
		</div>
		<div class="form-group">
			<label for="image">Image</label>
			<input type="file" class="form-control" name="image" id="image">
		</div>
		<button type="submit" class="btn btn-success btn-block">Edit</button><br>
		<a href="<?=$this->session->userdata('role').'/facilities';?>"><button class="btn btn-danger btn-block">Back</button></a>
		<?= form_close(); ?>
	</div>
</body>
</html>
