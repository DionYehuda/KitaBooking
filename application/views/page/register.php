<div class="modal fade" id="registermodal" >
	<div class="modal-dialog" style="margin-top: 10em;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title ">Register</h4>
			</div>
			<div class="modal-body">
				<?= form_open('Register'); ?>
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" name="username" id="username" placeholder="Enter username" required>
				</div>
				<div class="form-group">
					<label for="tanggal">Birthday date</label>
					<input type="date" class="form-control" name="tanggal" id="tanggal" required>
				</div>
				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" class="form-control" name="address" id="address" placeholder="Enter address" required>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
					<div class="text-danger"><?php echo form_error('email'); ?></div>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
					<div class="text-danger"><?=form_error('password'); ?></div>
				</div>
				<div class="form-group">
					<label for="conpassword">Confirmation Password</label>
					<input type="password" class="form-control" name="conpassword" id="conpassword" required placeholder="Enter confirmation password">
					<div class="text-danger"><?=form_error('password'); ?></div>
				</div>
				<button type="submit" class="btn btn-success btn-block">Submit</button>
				<?= form_close(); ?>
				<?= $this->session->flashdata('error_message'); ?>
			</div>
		</div>
	</div>
</div>
