<!DOCTYPE html>

<html lang="en">
<head>
	<title>Kitabooking</title>
	<?= $style; ?>
	<?= $script; ?>
</head>
<body>
	<?= $navbar;?>
	<?php if($this->uri->segment(2) == "facilities" || $this->uri->segment(2) == "") echo $faslist; ?>
	<?php if($this->uri->segment(2) == "request") echo $requestlist; ?>
	<?php if($this->uri->segment(2) == "user") echo $userlist; ?>
</html>
