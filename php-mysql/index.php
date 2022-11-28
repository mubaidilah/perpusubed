<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "akademik";

$koneksi    = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){ //cek koneksi 
    die("tidak bisa terkoneksi ke database");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .mx-auto { width:800px }
        .card { margin-top: 10px;}
    </style>
</head>
<body>
   <div class="mx-auto">
    <!--untuk memasukkan data -->
   <div class="card">
  <div class="card-header">
    create / edit data
  </div>
  <div class="card-body">
    <from action="" method="POST">
    <div class="mb-3 row">
    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control-plaintext" id="nim" name="nim" value="<?php echo $nim ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control-plaintext" id="Nama" name="Nama" value="<?php echo $Nama ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control-plaintext" id="Alamat" name="Alamat" value="<?php echo $Alamat ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="Jurusan" class="col-sm-2 col-form-label">Jurusan</label>
    <div class="col-sm-10">
     <select class="from-control" id="Jurusan">
        <option value="">- Pilih Jurusan -</option>
        <option value="RPL" <?php if($Jurusan == "RPL") echo "selected"?>>RPL</option>
        <option value="TKJ" <?php if($Jurusan == "TKJ") echo "selected"?>>TKJ</option>
     </select>
    </div>
  </div>

  <div class="col-12">
  <input type
  </div>
    </form>
    
  </div>
</div>

<!--untuk mengeluarkan data -->
<div class="card">
  <div class="card-header  text-white bg-secondary">
    Data Siswa
  </div>
  <div class="card-body">
   
    
  </div>
</div>

   </div> 
</body>
</html>