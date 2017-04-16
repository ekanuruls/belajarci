<div>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>Telepon</th>
		</tr>
		<?php foreach($list_mahasiswa as $k=>$v) { ?>
		<tr>
			<td><?php echo $v['id'];?></td>
			<td><?php echo $v['nama'];?></td>
			<td><?php echo $v['tempat_lahir'];?></td>
			<td><?php echo $v['tanggal_lahir'];?></td>
			<td><?php echo $v['alamat'];?></td>
			<td><?php echo $v['email'];?></td>
			<td><?php echo $v['telepon'];?></td>
		</tr>
		<?php } ?>
	</table>
</div>