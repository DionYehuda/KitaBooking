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
	$userlist = $userlist[0];?>
	<div class="container half">
		<h1 class="text-center" style="padding-bottom: 15px;">Edit User</h1>
		<?= form_open_multipart($this->session->userdata('role').'/editUser/'.$userlist['id_akun'] ,$id);?>
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" class="form-control" name="username" id="username" placeholder="Enter username" value="<?=$userlist['username']?>">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="<?=$userlist['email']?>">
		</div>
		<div class="form-group">
			<label for="bdate">Birthday Date</label>
			<input type="date" class="form-control" name="bdate" id="bdate" value="<?=$userlist['tgl_Lahir']?>">
		</div>
		<div class="form-group">
			<label for="add">Address</label>
			<input type="text" class="form-control" name="add" id="add" placeholder="Enter Address" value="<?=$userlist['alamat']?>">
		</div>
		<button type="submit" class="btn btn-success btn-block">Edit</button><br>
		<a href="<?=$this->session->userdata('role').'/user';?>"><button class="btn btn-danger btn-block">Back</button></a>
		<?= form_close(); ?>
	</div>
</body>
</html>
