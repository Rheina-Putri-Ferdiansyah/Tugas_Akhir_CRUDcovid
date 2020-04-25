<?php
include 'koneksi.php';


$sql="SELECT * FROM petugas ORDER BY id_petugas";

    $res = mysqli_query($koneksi,$sql);
    $petugas = array();

    while($data = mysqli_fetch_assoc($res)){
        $petugas[]=$data;
    }
include 'header.php';
?>
<center><img src="staylove.jpg" width="30%"><img src="doctor.jpg" width="30%"><img src="staylove.jpg" width="30%"></center>
<link rel="stylesheet" href="stylebuku.css">
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        </div>
    </div>
</div>
<div class="card">
<div class="card-header">
<h2 class="card-title"><i class="far fa-edit"></i>Data Petugas Kesehatan <a href="tambahodp.php"><button type="button" class="btn btn-outline-info"><i class="fas fa-plus"></i></button></a></h2>

  <div class="card-body">
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Identitas</th>
      <th scope="col">Nama</th>
      <th scope="col">Telepon</th>
      <th scope="col">Aksi</th>

    </tr>
</thead>
    <tbody>
    <?php
        $no=1;
        foreach($petugas as $p){?>
        <tr>
            <td scope="row"><?=$no?></td>
            <td><img src="<?=$p['foto'];?>" style="width: 30%"></td>
            <td><?=$p['nama']?></th>
            <td><?=$p['telp']?></th>
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
