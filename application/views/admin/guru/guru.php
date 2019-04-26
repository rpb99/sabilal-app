
<div class="content-wrapper col-12 col-xl-10 ml-md-auto pt-3">
<div class="container">
<div class="row">
<div class="col-12">
<nav aria-label="breadcrumb">
<div class="container">

  <ol class="breadcrumb d-flex justify-content-end">
    <li class="breadcrumb-item"><a href="<?= site_url();?>Dashboard/home">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Guru</a> </li>
  </ol>
  </div>
</nav>
</div>
</div>
</div>

<?php if($this->session->flashdata('flash') ): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  Data Guru<strong> berhasil</strong><?= $this->session->flashdata('flash'); ?>
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
        <input type="text" class="form-control" placeholder="Cari Data Guru..." name="keyword">
   
          <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
     
        </div>
        </form>
    </div>

      <div class="col-5 col-md-2">
        <a href="<?= site_url('Guru/tambah');?>" class="btn btn-primary"><i class="fas fa-user-plus"></i> Tambah Data</a>
      </div>

  </div>
</div>
   
  <main class="my-md-4 my-2 ">
  <?php if(empty($guru) ):?>
  <div class="alert alert-danger" role="alert">
  Data Guru Tidak Ditemukan.
  </div>
<?php endif;?>
  <table class="table table-responsive-md text-center">
    <thead class="thead-dark">
      <tr class="border">
        <th>No</th>
        <th>NIP</th>
        <th>Nama Guru</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Jenis Kelamin</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    $i = 1;
    foreach($guru as $gr): ?>
      <tr>
        <td><?= $i; ?></td>
        <td><?= $gr['nip'];?></td>
        <td><?= $gr['nm_guru'];?></td>
        <td><?= $gr['tmpt_lhr'];?></td>
        <td><?= $gr['tgl_lhr'];?></td>
        <td><?= $gr['alamat'];?></td>
        <td><?= $gr['hp'];?></td>
        <td><?= $gr['jkel'];?></td>
        <td>
          <a class='btn btn-success btn-action' href='<?= site_url()?>Guru/ubah/<?= $gr['nip']; ?>'><i class='fas fa-user-edit'></i> Ubah </a>
          <a class='btn btn-danger btn-action' onclick="return confirm('Yakin Mau Hapus Data?')" href='<?= site_url(); ?>Guru/hapus/<?= $gr['nip']; ?>'><i class='fas fa-user-times'></i> Hapus</a>
        </td>
      </tr>
<?php 
$i++;
endforeach; ?>
    </tbody>
  </table>
</main>


