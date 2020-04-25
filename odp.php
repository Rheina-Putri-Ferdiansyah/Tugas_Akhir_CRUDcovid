<?php
include 'koneksi.php';

$sql="SELECT * FROM odp ORDER BY id_odp";

    $res = mysqli_query($koneksi,$sql);
    $odp = array();

    while($data = mysqli_fetch_assoc($res)){
        $odp[]=$data;
    }
include 'header.php';
?>
<link rel="stylesheet" href="stylebuku.css">
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        </div>
    </div>
</div>
<div class="card">
<div class="card-header">
<h2 class="card-title"><i class="far fa-edit"></i>Data ODP (Orang Dalam Pengawasan) <a href="tambahodp.php"><button type="button" class="btn btn-outline-info"><i class="fas fa-plus"></i></button></a></h2>

  <div class="card-body">
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Waktu Karantina</th>
      <th scope="col">Suhu Tubuh</th>
      <th scope="col">Kategori</th>
      <th scope="col">Aksi</th>
    </tr>
</thead>
    <tbody>
    <?php
        $no=1;
        foreach($odp as $o){?>
        <tr>
            <td scope="row"><?=$no?></td>
            <td><?=$o['nama']?></th>
            <td><?=$o['alamat']?></th>
            <td><?=$o['tanggal']?></th>
            <td><?=$o['suhu']?></th>
            <td><?=$o['kategori']?></th>
            <td>   
              <a href="detailodp.php?id_odp=<?= $o["id_odp"];?>" class="badge badge-success">detail</a>
              <a href="editodp.php?id_odp=<?= $o["id_odp"];?>" class="badge badge-danger">edit</a>
              <a href="hapusodp.php?id_odp=<?= $o["id_odp"];?>" class="badge badge-warning">hapus</a>

        </td>
        </tr>
        <?php
       
            $no++;
    }
    ?>
      </tbody>
  </thead>
   

    
  </div>
</div>
</div>
  </div></div>
<?php
include 'footer.php';
?>
