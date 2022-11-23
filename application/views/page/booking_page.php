<!DOCTYPE html>

<html lang="en">
<head>
	<title>Kitabooking</title>
	<?= $style; ?>
	<?= $script; ?>
	<!-- testing -->
</head>
<body>
	<?= $navbar;
	$detail = $detail[0];?>
	<div class="container half">
		<?= form_open('booking'); ?>
		<h1 class="text-center" style="padding-bottom: 15px;">Book</h1>
		<div class="form-group">
			<label for="idfas">Id Fasilitas</label>
			<input type="text" value="<?= $detail['id_fasList']?>" class="form-control" name="idfas" id="idfas" placeholder="<?= $detail['id_fasList']?>" readonly>
			<label for="namfas">Nama Fasilitas</label>
			<input type="text" value="<?= $detail['nama']?>" class="form-control" name="namfas" id="namfas" placeholder="<?= $detail['nama']?>" readonly>
		</div>
		<div class="form-group">
			<label for="tanggal">Tanggal</label>
			<input type="date" class="form-control" name="tanggal" id="tanggal" required>
			<label for="start">Start</label>
			<input type="time" class="form-control" name="start" id="start" required>
			<label for="end">End</label>
			<input type="time" class="form-control" name="end" id="end" required>
		</div>
		<button type="submit" class="btn btn-success btn-block">Submit</button>
			<?= form_close(); ?>
			<?= $this->session->flashdata('error_message'); ?>
	</div>
</body>
</html>
