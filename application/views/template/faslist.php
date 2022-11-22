<div class="container">
	<h1 class="text-center" style="padding-bottom:25px;">Facilities List</h1>
	<a href="<?= site_url($this->session->userdata('role').'/addfacilitiesform')?>"><button class="btn btn-primary">
        <span class="glyphicon glyphicon-plus"></span>Facilities</button></a><br><br>
	<table id="reqlist" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Image</th>
				<th>Name</th>
				<th>Operation</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1;
			foreach ($facilities as $row) :?>
				<tr>
					<th><?= $i++?></th>
					<th><img src="<?=base_url($row['gambar'])?>" style="height : 100px;"></th>
					<th><?= $row['nama']?></th>
					<th>
					<a href="<?=base_url($this->session->userdata('role').'/editFacilitiesForm/'.$row['id_fasList'])?>"><button type="button" class="btn btn-success">Edit</button></a>
					<a href="<?=base_url($this->session->userdata('role').'/deleteFacilities/'.$row['id_fasList'])?>"><button type="button" class="btn btn-danger">Delete</button></a></th>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
