<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style> 
        body {
        font-size: 1.2em;
    }
     .content {
            margin: auto;
            width: 100%;
            text-align: center;
        }
        table {
        width: 80%;
        margin: auto;
    }
    table,th,td{
        border: 2px solid black;
    }

th,td {
    text-align: left;
}

    h2 {
        margin: auto;
        text-align: center;
        padding-bottom: 50px;
    }

h1 {
    text-align: center;
}
.person {
    margin: auto;
    }

    .center {
        text-align: center;
    }
  hr {
      border-bottom: 5px solid black;
  }


    </style>
</head>
<body>
           <p><a href="<?= site_url();?>C_excel/export_excel/<?=$person['nis'];?>"><img style="width: 80px;" src="<?= base_url('assets/img/download.png') ?>">Export ke Excel</a></p>

<h2>Madrasah Sabilal Muhtadin Tembilahan</h2>

 <h2>Laporan Hasil Belajar Semester <?= $person['semester']?></h2>
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="box"></div>
<div class="person">
    <p><b>Nama           : <span><?=  $person['nm_siswa'];?></span></b></p>
    <p><b>Nomor Induk    : <span><?=  $person['nis'];?></span></b></p>
    <p><b>Kelas          : <span><?=  $person['kelas'];?></span></b></p>
    <p><b>Semester       : <span><?=  $person['semester'];?></span></b></p>
    <p><b>Tahun Ajaran   : <span><?=  $person['tahun_ajaran'];?></span></b></p>
    </div>

</div>
</div>
    </div>
<div class="content">
    <table >
            <tr>
            <th class="center" rowspan="2">No.</th>
            <th class="center" rowspan="2">Komponen</th>
            <th class="center" rowspan="2">KKM Angka</th>
            <th class="center">Nilai Hasil Belajar</th>
            <th class="center" rowspan="2">Ketercapaian Kompetensi*)</th>
            </tr>
 
            <tr>
                <td class="center" rowspan="1">Angka</td>
            </tr>

            <tr>
                <th>A.</th>
                <th colspan="4">Mata Pelajaran</th>
          
            </tr>
 <?php
    $i=1;
 foreach($buku as $buku){?>
        <tr>
            
                <td><?=$i;?></td>
                <td><?= $buku['nm_mapel'];?></td>
                <td class="center">75</td>
                <td class="center"><?=$buku['total_nilai'];?></td>
                <td class="center">
                <?php
                if($buku['total_nilai'] > 75){
                    echo "Terlampaui";
                }else{
                    echo "Tidak Terlampaui";
                }

                ?>
                </td>
            </tr>
            <?php $i++; }?>
            
            <tr>
                <th rowspan="3"></th>
                <th class="center" colspan="2">JUMLAH</th>
                <th class="center"><?=$detail['jumlah_nilai'];?></th>
                <th></th>

            </tr>
            <tr>
                <th class="center" colspan="2">RATA-RATA</th>
                <th class="center"><?=$detail['rata_rata'];?></th>
                <th></th>
            </tr>
    </table>
</div>

</body>
</html>
