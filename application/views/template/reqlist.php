<div class="container">
	<h1 class="text-center" style="padding-bottom:25px;">Request List</h1><br><br>
	<table id="list" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Requester</th>
				<th>Requested Facility</th>
				<th>Date</th>
				<th>Start Time</th>
				<th>End Time</th>
				<th>Operation</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; foreach ($requestall as $row) :?>
				<tr>
					<th><?= $i++;?></th>
					<th><?= $row['requester']?></th>
					<th><?= $row['namafaslist']?></th>
					<th><?= $row['tanggal']?></th>
					<th><?= date('H:i',strtotime($row['jamMulai']))?></th>
					<th><?= date('H:i',strtotime($row['jamSelesai']));?></th>
					<?php if($this->session->userdata('role') == 'management'){
						if($row['confirm'] == ''){?>
					<th><a href="<?=base_url('management/Approve/'.$row['id_reqList'])?>"><button type="button" class="btn btn-success">Approve</button></a>
					<a href="<?=base_url('management/Reject/'.$row['id_reqList'])?>"><button type="button" class="btn btn-danger">Reject</button></a></th>
					<?php };if($row['confirm'] == '1'){?>
						<th><div class="text-success">Approved</div></th>
					<?php };if($row['confirm'] == '0'){?>
						<th><div class="text-danger">Rejected</div></th>
					<?php };};?>
					<?php if($this->session->userdata('role') == 'admin'){?>
					<th>
					<a href="<?=base_url('admin/deleteRequest/'.$row['id_reqList'])?>"><button type="button" class="btn btn-danger">Delete</button></a>
					</th>
					<?php };?>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
