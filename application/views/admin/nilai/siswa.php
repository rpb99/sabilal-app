
<div class="content-wrapper col-12 col-xl-10 ml-md-auto pt-3">
<div class="container">
<div class="row">
<div class="col-12">
<nav aria-label="breadcrumb">
<div class="container">

  <ol class="breadcrumb d-flex justify-content-end">
    <li class="breadcrumb-item"><a href="<?= site_url();?>Dashboard/home">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Siswa</a> </li>
  </ol>
  </div>
</nav>
</div>
</div>
</div>

<?php if($this->session->flashdata('flash') ): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  Data Siswa<strong> berhasil</strong><?= $this->session->flashdata('flash'); ?>
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
        <input type="text" class="form-control" placeholder="Cari Data Siswa..." name="keyword">
   
          <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
     
        </div>
        </form>
    </div>


  </div>
</div>
   
  <main class="my-md-4 my-2">
  <?php if(empty($siswa) ):?>
  <div class="alert alert-danger" role="alert">
  Data Siswa Tidak Ditemukan.
  </div>
<?php endif;?>
  <table class="table table-responsive-md text-center">
    <thead class="thead-dark">
      <tr class="border">
        <th>No</th>
        <th>NIS</th>
        <th>Nama Siswa</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    $i = 1;
    foreach($siswa as $sw): ?>
      <tr>
        <td><?= $i; ?></td>
        <td><?= $sw['nis'];?></td>
        <td><?= $sw['nm_siswa'];?></td>
        <td><?= $sw['tmpt_lhr'];?></td>
        <td><?= $sw['tgl_lhr'];?></td>
        <td><?= $sw['alamat'];?></td>
        <td><?= $sw['jkel'];?></td>
        <td>

          <a class='btn btn-success btn-shadow' href='<?= site_url()?>Nilai/inputNilai/<?= $sw['nis']; ?>'><i class='fas fa-user-edit'></i> Tambah Nilai</a>
        
        </td>
      </tr>
<?php 
$i++;
endforeach; ?>
    </tbody>
  </table>
</main>


