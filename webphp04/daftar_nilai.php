<?php 
require_once 'class_nilaimahasiswa.php';

$mhs1 = new NilaiMahasiswa();
$mhs1->nama = "Muhammad Naufal Aziz";
$mhs1->matakuliah = "Pemrograman Web";
$mhs1->nilai_uts = 80;
$mhs1->nilai_uas = 85;  
$mhs1->nilai_tugas = 78;

$mhs2 = new NilaiMahasiswa();
$mhs2->nama = "M Rafly Fauzan";
$mhs2->matakuliah = "Dasar-Dasar Pemrograman";
$mhs2->nilai_uts = 100;
$mhs2->nilai_uas = 85;  
$mhs2->nilai_tugas = 78;

$mhs3 = new NilaiMahasiswa();
$mhs3->nama = "Angga Dwi Prasetyo";
$mhs3->matakuliah = "Basis Data";
$mhs3->nilai_uts = 60;
$mhs3->nilai_uas = 50;  
$mhs3->nilai_tugas = 55;

$ar_mahasiswa = [$mhs1, $mhs2 , $mhs3];

?>
<h2 style="text-align:center">Daftar Nilai Mahasiswa</h2>
<table border="1" cellpadding="2" cellspacing="2" width="100%">
    <thead>
        <th>No</th><th>Nama Mahasiswa</th><th>Mata Kuliah</th>
        <th>Mata Kuliah</th><th>Nilai UTS</th><th>Nilai Tugas</th>
        <th>Nilai Akhir</th><th>Keterangan</th>
    </thead>
    <tbody>
        <?php 
         $no = 1;
         foreach($ar_mahasiswa as $obj){
        ?>
        <tr>
            <td><?=$no?></td>
            <td><?=$obj->nama?></td>
            <td><?=$obj->matakuliah?></td>
            <td><?=$obj->nilai_uts?></td>
            <td><?=$obj->nilai_uas?></td>
            <td><?=$obj->nilai_tugas?></td>
            <td><?=$obj->getNilaiAkhir()?></td>
            <td><?=$obj->kelulusan()?></td>
        </tr>
        <?php
        $no++;
        }
        ?>
    </tbody>
</table>