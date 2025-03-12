<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form>
  <div class="form-group row">
    <?php
    $ar_matkul = [
        'DDP' =>'dasar dasar pemograman',
        'web1' =>'pemograman web 1',
        'web2'=>'pemograman web 2',
        'BASDAT' => 'basis data',
        'UI/UX' =>  'UI/UX',
        "JARKOM" => 'JARINGAN KOMPUTER',
    ];
    ?>
    <form method = "post" action="<?php echo $_server['PHP SELF']; ?>">
        <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">dasar dasar pemograman</option>
        <option value="web1">pemograman web 1</option>
        <option value="web2">pemograman web 2</option>
<option value="0">--pilih mata kuliah--</option>
        <?php
            foreach($ar_matkul as $kode=>$matkul){
                echo "<option value='$kode'>$matkul</option>";
            }
            ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Tugas/praktikum</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<hr>
<?php
            $_nama = $_POST['nama'];
            $_matkul = $_post['matkul'];
            $_nilai_uts = $_POST['nilai_uts'];
            $_nilai_uas = $_POST['nilai_uas'];
            $_nilai_tugas = $_POST['nilai_tugas'];
?>
<h3>HASIL INPUT DATA </h3>
Nama MahaSiswa: <?= $_nama;?><br>
Mata Kuliah: <?= $_matkul;?><br>
Nilai UTS: <?= $_nilai_uts;?><br>
Nilai UAS: <?= $_nilai_uas;?><br>
Nilai Tugas/praktikum: <?= $_nilai_tugas;?>
</hr>

</html>