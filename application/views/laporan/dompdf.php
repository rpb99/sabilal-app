<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>  .content {
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

th {
    text-align: left;
}


    h2 {
        text-transform: uppercase;
        margin: auto;
        text-align: center;
        width: 400px;
    }


pre {
    font-weight: 700;
    font-size: 18px;
}

  
    </style>
</head>
<body>

    <h2>laporan hasil belajar semester ganjil</h2>
    <div class="container">
    <div class="row">
        <div class="col-12">

    <pre>Nama           : <span><?=  $nilai['nm_siswa'];?></span></pre>
    <pre>Nomor Induk    : <span><?=  $nilai['nis'];?></span></pre>
    <pre>Kelas          : <span><?=  $nilai['kelas'];?></span></pre>
    <pre>Semester       : <span><?=  $nilai['semester'];?></span></pre>
    <pre>Tahun Ajaran   : <span><?=  $nilai['tahun_ajaran'];?></span></pre>

</div>
</div>
    </div>
<div class="content">
    <table >
            <tr>
            <th rowspan="2">No.</th>
            <th rowspan="2">Komponen</th>
            <th rowspan="2">KKM Angka</th>
            <th>Nilai Hasil Belajar</th>
            <th rowspan="2">Ketercapaian Kompetensi*)</th>
            </tr>
 
            <tr>
                <td rowspan="1">Angka</td>
            </tr>

            <tr>
                <th>A.</th>
                <th colspan="4">Mata Pelajaran</th>
          
            </tr>
   <?php
   $i=1;
   
   foreach($lapor as $nl):?>
        <tr>
            
                <td><?=$i;?></td>
                <td><?= $nl['rata_rata'];?></td>
                <td>75</td>
                <td><?=$nl['total_nilai'];?></td>
                <td>
                <?php
                if($nl['total_nilai'] < 86){
                    echo "Terlampaui";
                }else{
                    echo "Tidak Terlampaui";
                }

                ?>
                </td>
            </tr>

            <?php 
            $i++;    
        endforeach;?>

            
            <tr>
                <th rowspan="3"></th>
                <th colspan="2">JUMLAH</th>

                <th><?=$detail['jumlah_nilai'];?></th>
                <th></th>

            </tr>
            <tr>
                <th colspan="2">RATA-RATA</th>
                <th><?=$detail['rata_rata'];?></th>
                <th></th>
            </tr>
            <tr>
                <th colspan="3">Peringkat Kelas Ke : 1 Dari : 37 Siswa</th>
                <th></th>
          
            </tr>
    </table>
</div>

</body>
</html>