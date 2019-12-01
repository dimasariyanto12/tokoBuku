<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>profil Anda</h3>

	<div class="row">
	<div class="col-md-6">
		<div class="panel panel-info">
				<div class="panel-heading">
					<h3>Informasi tentang anda</h3>
				</div>
			<div class="panel-body">
				<table class="table" cellpadding="8" cellspacing="8">
					<tr>
						<th>Nama</th> <td>:</td> <td><?php echo $profil['nama']; ?></td>
					</tr>
					<tr>
						<th>Alamat</th> <td>:</td> <td><?php echo $profil['alamat']; ?></td>
					</tr>
					<tr>
						<th>Telepon</th> <td>:</td> <td><?php echo $profil['telepon']; ?></td>
					</tr>
				</table>
				<a class="btn btn-sm btn-primary" href="">Edit data saya</a>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-info">
				<div class="panel-heading">
					<h3>Edit Username Atau password</h3>
				</div>
			<div class="panel-body">
				<fieldset>
					<legend>Edit Username</legend>
					<form class="form" method="post">
						<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">User saat ini</span>
							  <input type="text" readonly class="form-control" value="<?php echo $profil['username'] ?>" aria-describedby="basic-addon1">
						</div>
						<br>
						<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">User baru</span>
							  <input type="text" name="userbaru" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
						</div>
						<br>
						<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">Password anda</span>
							  <input type="password" name="pass" class="form-control" placeholder="Password anda" aria-describedby="basic-addon1">
						</div>
						<br>
							  <input type="submit" name="edit_user" value="simpan" class="btn btn-sm btn-success">
						
					</form>

						<!-- fungsi edit username -->
						<?php 
							if(isset($_POST[edit_user])){
								$userbaru = $_POST['userbaru'];
								$pass = $_POST['pass'];
								if(md5($pass)==$profil['password']){
									mysqli_query($koneksi,"UPDATE tb_kasir SET username='$userbaru' WHERE id_kasir='$profil[id_kasir]'");
									?>
									<script type="text/javascript">
										alert('Username anda berhasil dirubah !');
										document.location.href="../inc/keluar.php";
									</script>
									<?php
								}
								else{
									echo "tidak menjalankan fungsi !";
								}
							}
						 ?>

				</fieldset>
				<hr>
				<fieldset>
					<legend>Edit Password</legend>
					<form class="form">
						<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">passoword Baru</span>
							  <input type="password" class="form-control" placeholder="password baru" aria-describedby="basic-addon1">
						</div>
						<br>
						<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">ketik ulamg password baru</span>
							  <input type="password" class="form-control" placeholder="ketikkan ulang" aria-describedby="basic-addon1">
						</div>
						<br>
						<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">Password anda saat ini</span>
							  <input type="text" class="form-control" placeholder="password saat ini" aria-describedby="basic-addon1">
						</div>
						<br>
							  <input type="submit" value="simpan" class="btn btn-sm btn-success">
						
					</form>
				</fieldset>
			</div>
		</div>
	</div>

</body>
</html>