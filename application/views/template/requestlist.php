<div class="container">
	<h1 class="text-center" style="padding-bottom:25px;">Request List</h1>
	<a href="<?= site_url('user/facilities')?>"><button class="btn btn-primary">
        <span class="glyphicon glyphicon-plus"></span>Request</button></a><br><br>
	<table id="list" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
				<th>Requested Facility</th>
				<th>Date</th>
				<th>Start Time</th>
				<th>End Time</th>
				<th>Approve?</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($request as $row) : ?>
				<tr>
					<th><?= $row['namafaslist']?></th>
					<th><?= $row['tanggal']?></th>
					<th><?= date('H:i',strtotime($row['jamMulai']))?></th>
					<th><?= date('H:i',strtotime($row['jamSelesai']));?></th>
					<th><?php if($row['confirm'] == '') echo '<div class="text-primary">Waiting for approval</div>';
					if($row['confirm'] == '1') echo '<div class="text-success">Approved</div>';
					if($row['confirm'] == '0') echo '<div class="text-danger">Rejected</div>';
					?></th>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
