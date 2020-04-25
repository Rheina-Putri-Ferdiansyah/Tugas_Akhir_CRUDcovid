<?php  
include 'header.php';
include 'koneksi.php';

$id_odp = $_GET['id_odp'];

$sql = "SELECT * FROM odp ";
$res = mysqli_query($koneksi, $sql);
$odp = mysqli_fetch_assoc($res);
// var_dump($detail);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Anggota</title>
</head>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-7">
			<h2>Detail ODP</h2>
			<hr class="bg-ligth">
			<table class="table table-bordered">
				<tr>
					<td><strong>Nama</strong></td>
					<td><?=$odp['nama'];?></td>
				</tr>
				<tr>
					<td><strong>Jenis_Kelamin</strong></td>
					<td><?=$odp['jenis_kelamin']?></td>
				</tr>
				<tr>
					<td><strong>Alamat</strong></td>
					<td><?=$odp['alamat']?></td>
				</tr>
				<tr>
					<td><strong>Tanggal Karantina</strong></td>
					<td><?=$odp['tanggal']?></td>
				</tr>
				<tr>
					<td><strong>No. Telepon</strong></td>
					<td><?=$odp['telp']?></td>
				</tr>
				<tr>
					<td><strong>Suhu Tubuh</strong></td>
					<td><?=$odp['suhu']?></td>
				</tr>
				<tr>
					<td><strong>Kategori</strong></td>
					<td><?=$odp['kategori'];?></td>
				</tr>
				<tr>
					<td class="text-rigth" colspan="2">
						<a href="odp.php" class="btn btn-success"><i class="fas fa-angle-double-left"></i>Kembali</a>

					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>
<?php  
include 'footer.php';
?>