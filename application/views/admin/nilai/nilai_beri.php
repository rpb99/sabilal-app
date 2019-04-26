
<div class="content-wrapper col-12 col-xl-10 ml-md-auto pt-3">
<div class="container">
<div class="row">
<div class="col-12">
<nav aria-label="breadcrumb">
<div class="container">

  <ol class="breadcrumb d-flex justify-content-end">
    <li class="breadcrumb-item"><a href="<?= site_url();?>Dashboard/home">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Score</a> </li>
  </ol>
  </div>
</nav>
</div>
</div>
</div>

<?php if($this->session->flashdata('flash') ): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  Data Nilai Siswa<strong> berhasil</strong><?= $this->session->flashdata('flash'); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>


<div class="container">
  <div class="row d-flex justify-content-end p-2 p-md-4">
    <div class="col-7 col-md-5">
    <form action="" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari Data Nilai Siswa..." name="keyword">
   
          <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
     
        </div>
        </form>
    </div>

  </div>
</div>
   
  <main class="my-md-4 my-2">
  <?php if(empty($nilai) ):?>
  <div class="alert alert-danger" role="alert">
  Data Nilai Siswa Tidak Ditemukan.
  </div>
<?php endif;?>
  <table class="table table-responsive-md text-center">
    <thead class="thead-dark">
      <tr class="border">
        <th>No</th>
        <th>NIS</th>
        <th>Kelas</th>
        <th>Kode Mapel</th>
        <th>NIP</th>
        <th>Nilai Harian</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Ijin</th>
        <th>Sakit</th>
        <th>Tidak Hadir</th>
        <th>Semester</th>
        <th>Tahun Ajaran</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    $i = 1;
    foreach($nilai as $nl): ?>
      <tr>
        <td><?= $i; ?></td>
        <td><?= $nl['nis'];?></td>
        <td><?= $nl['kelas'];?></td>
        <td><?= $nl['kd_mapel'];?></td>
        <td><?= $nl['nip'];?></td>
        <td><?= $nl['nilai_harian'];?></td>
        <td><?= $nl['nilai_uts'];?></td>
        <td><?= $nl['nilai_uas'];?></td>
        <td><?= $nl['ijin'];?></td>
        <td><?= $nl['sakit'];?></td>
        <td><?= $nl['tidak_hadir'];?></td>
        <td><?= $nl['semester'];?></td>
        <td><?= $nl['tahun_ajaran'];?></td>
        <td>
          <a class='btn btn-success btn-action' href='<?= site_url()?>Nilai/ubah/<?= $nl['nilai_id']; ?>'><i class='fas fa-user-edit'></i> Ubah</a>
          <a  class='btn btn-danger btn-action' onclick="return confirm('Yakin Mau Hapus Data?')" href='<?= site_url(); ?>Nilai/hapus/<?= $nl['nilai_id']; ?>'><i class='fas fa-user-times'></i> Hapus</a>
        </td>
      </tr>
<?php 
$i++;
endforeach; ?>
    </tbody>
  </table>
</main>


