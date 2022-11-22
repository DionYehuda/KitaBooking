<div class="modal fade" id="loginmodal" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title ">Login</h4>
			</div>
			<div class="modal-body">
				<?= form_open_multipart('landing'); ?>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
					<div class="text-danger"><?php echo form_error('email'); ?></div>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
					<div class="text-danger"><?=form_error('password'); ?></div>
				</div>
				<button type="submit" class="btn btn-success btn-block">Submit</button>
				<?= form_close(); ?>
				<?= $this->session->flashdata('error_message'); ?>
			</div>
		</div>
	</div>
</div>
