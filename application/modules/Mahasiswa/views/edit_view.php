<h1>Dashboard</h1>
<br>

<form action="" method="POST">
	<table>
			<tr>
			<td>Nama :</td>
			<td><input type="text" name="nama" value="<?php echo $siswa['nama'];?>"/></td>
			</tr>
			
			<tr>
			<td>TTL :</td>
			<td><input type="text" name="ttl" value="<?php echo $ttl;?>"/></td>
			</tr>
			
			
			<tr>
			<td>Alamat :</td>
			<td><input type="text" name="alamat" value="<?php echo $alamat;?>"/></td>
			</tr>
			
			<tr>
			<td>Telepon :</td>
			<td><input type="text" name="telepon" value="<?php echo $telepon;?>"/></td>
			</tr>
			
			<tr>
			<td>Email :</td>
			<td><input type="text" name="email" value="<?php echo $email;?>"/></td>
			
			<tr>
			<td></td>
			<td><input type="submit" name="input" value="INPUT"/></td>
			</tr>
			
	</table>
</form>
