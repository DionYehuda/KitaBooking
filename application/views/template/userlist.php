<div class="container">
	<h1 class="text-center" style="padding-bottom:25px;">User List</h1>
	<table id="reqlist" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Role</th>
				<th>Operation</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1;foreach ($user as $row) : ?>
				<tr>
					<th><?= $i++?></th>
					<th><?= $row['username']?></th>
					<th><?= $row['email']?></th>
					<th><?= $row['role']?></th>
					<?php if($this->session->userdata('role') == 'management') {?>
					<th><button type="button">Approve</button> <button type="button">Reject</button></th>
					<?php };?>
					<?php if($this->session->userdata('role') == 'admin') {?>
					<th>
						<a href="<?=base_url('admin/editUserForm/'.$row['id_akun'])?>"><button type="button" class="btn btn-success">Edit</button></a>
						<a href="<?=base_url('admin/deleteUser/'.$row['id_akun'])?>"><button type="button" class="btn btn-danger">Delete</button></a>
					</th>
					<?php };?>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
