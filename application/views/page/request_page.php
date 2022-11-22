<!DOCTYPE html>

<html lang="en">
<head>
	<title>Kitabooking</title>
	<?= $style; ?>
	<?= $script; ?>
</head>
<body class="background">
	<?= $navbar;?>
	<?php if($this->uri->segment(2) == "facilities" || $this->uri->segment(2) == "") echo $facilities; ?>
</html>
