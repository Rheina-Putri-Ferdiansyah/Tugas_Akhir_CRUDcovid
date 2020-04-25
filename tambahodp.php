<?php  
include 'koneksi.php';
include 'header.php';

$query = mysqli_query($koneksi, "SELECT * FROM odp");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data ODP</title>
</head>
<body>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						<h2><i class="fas fa-user-plus"></i> Tambah Data ODP</h2>
					</div>
					<div class="card-body">
						<form method="post" action="proses-tambahodp.php">
							<table class="table">
							<tr>
								<td>Nama</td>
								<td><input type="text" name="nama"></td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td> <select name="jenis_kelamin">
                                <option value="">-------- pilih gender -------</option>
                                <option value=""> P </option>
                                <option value=""> L </option>
                                </select>
							</tr>
							<tr>
								<td>Alamat</td>
								<td><input type="int" name="alamat"></td>
							</tr>
							<tr>
								<td>Telepon</td>
								<td><input type="text" name="telp"></td>
							</tr>
                            <tr>
								<td>Suhu Tubuh</td>
								<td><input type="text" name="suhu"></td>
							</tr>
                            <tr>
                <td>Kategori</td>
                <td><input type="text" name="kategori" ></td>
              </tr>
              
								<th><input type="submit"class="btn btn-primary" name="simpan" value="simpan"></th>
							</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php  
include 'footer.php';
?>