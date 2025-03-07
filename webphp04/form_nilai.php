<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h3>Form Nilai Mahasiswa</h3>

<?php 
  $ar_matkul =[
    "DDP" => "Dasar-Dasar Pemograman",
    "PEMWEB2" => "Pemograman WEB 2",
    "BD" => "Basis Data",
    "JARKOM" => "Jaringan Komputer",
    "PEMWEB1" => "Pemograman WEB",
    "PAI" => "Pendidikan Agama Islam",
  ];
?>

 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <?php
        foreach ($ar_matkul as $key => $value) {
            echo "<option value='$key'>$value</option>";
        }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tugas_praktikum" class="col-4 col-form-label">Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="tugas_praktikum" name="tugas_praktikum" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
 </form>
 <hr>
 Hasil Input Nilai Mahasiswa
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
     $_nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
     $_matkul = isset($_POST["matkul"]) ? $_POST["matkul"] : "";
     $_nilai_uts = isset($_POST["uts"]) ? $_POST["uts"] : "";
     $_nilai_uas = isset($_POST["uas"]) ? $_POST["uas"] : "";
     $_nilai_tugas = isset($_POST["tugas_praktikum"]) ? $_POST["tugas_praktikum"] : "";

    
     echo "Nama Mahasiswa : " . $_nama . "<br>";
     echo "Mata Kuliah : " . $ar_matkul[$_matkul] . "<br>";
     echo "Nilai UTS : " . $_nilai_uts . "<br>";
     echo "Nilai UAS : " . $_nilai_uas . "<br>";
     echo "Nilai Tugas/Praktikum : " . $_nilai_tugas . "<br>";
 }
 ?>
</body>
</html>