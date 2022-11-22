<nav class="navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
		<a class="navbar-brand">KitaBooking</a>
		</div>
		<ul class="nav navbar-nav">
			<?php if($this->uri->segment(1) == "admin"){?>
				<li class="<?php if($this->uri->segment(2) == "user") echo "active"; ?>">
				<a href="<?= site_url($this->session->userdata('role'))?>/user">User</a></li>
			<?php }; ?>
			<li class="<?php if($this->uri->segment(2) == "facilities" || $this->uri->segment(2) == "") echo "active"; ?>">
				<a href="<?= site_url($this->session->userdata('role'))?>/facilities">Facilities</a></li>
			<li class="<?php if($this->uri->segment(2) == "request") echo "active"; ?>">
				<a href="<?= site_url($this->session->userdata('role'))?>/request">Request</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a>Hello, <?=$this->session->userdata('username')?></a></li>
			<li><a href="<?= base_url($this->session->userdata('role').'/logout') ?>">Sign Out</a></li>
		</ul>
	</div>
</nav>
