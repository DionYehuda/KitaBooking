<!DOCTYPE html>

<html lang="en">
<head>
	<title>Welcome</title>
	<?= $style; ?>
	<?= $script; ?>
</head>
<body>
	<div class="background align-center">
		<div class='containerLanding mx-auto'>
			<h1 style="font-family:Consolas; color:SteelBlue; text-shadow: 2px 2px #000000;">Kita Bookings</h1>
			<h1 style="font-family:Consolas; font-size:small"><small>Silahkan masuk untuk melanjutkan</small></h1>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginmodal">Login</button>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registermodal">Register</button>
		</div>
		<?= $login; ?>
		<?= $register; ?>
	</div>
</body>
</html>
