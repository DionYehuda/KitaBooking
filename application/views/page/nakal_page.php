<!DOCTYPE html>

<html lang="en">
<head>
	<title>Nakal</title>
	<?= $style; ?>
	<?= $script; ?>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
		<h1 class="display-4">Nakal yaaa.. :D</h1>
		<p class="lead">Yuk balik</p>
		<p class="lead">
			<a class="btn btn-primary btn-lg" href="<?= base_url($this->session->userdata('role'))?>" role="button">ayo</a>
		</p>
		</div>
	</div>
</html>
