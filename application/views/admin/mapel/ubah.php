<div class="content-wrapper col-12 col-xl-10 ml-md-auto pt-3">
<div class="container">
<div class="row">
<div class="col-12">
<nav aria-label="breadcrumb">
<div class="container">

  <ol class="breadcrumb d-flex justify-content-end">
    <li class="breadcrumb-item"><a href="<?= site_url();?>Dashboard/home">Dashboard</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="<?= site_url();?>Mapel/list_mapel">Mapel</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ubah Data</li>
  </ol>
  </div>
</nav>
</div>
</div>
</div>
  <main class="my-md-4 my-2">
  <div class="container">

  <div class="row">
  <div class="col-md-8">

<div class="card">
<div class="card-header">
Form Ubah Data mapel
</div>
<div class="card-body">

    <form class="ml-3" action="" method="post">

    
        <label for="kd_mapel">Kode Mapel</label>
        <input class="form-control" type="text" name="kd_mapel" id="kd_mapel" value="<?= $mapel['kd_mapel'];?>">
        <small class="form-text text-danger"><?= form_error('kd_mapel');?></small> 

        <label for="nm_mapel">Nama mapel</label>
        <input class="form-control" type="text" name="nm_mapel" id="nm_mapel" value="<?= $mapel['nm_mapel'];?>">
        <small class="form-text text-danger"><?= form_error('nm_mapel');?></small> 

        <label for="sesi_waktu">Sesi Waktu</label>
        <input class="form-control" type="text" name="sesi_waktu" id="sesi_waktu" value="<?= $mapel['sesi_waktu'];?>">
        <small class="form-text text-danger"><?= form_error('sesi_waktu');?></small> 

        <label for="hari">Hari</label>
        <input class="form-control" type="text" name="hari" id="hari" value="<?= $mapel['hari'];?>">
        <small class="form-text text-danger"><?= form_error('hari');?></small> 

        <label for="jam">Jam</label>
        <input class="form-control" type="text" name="jam" id="jam" value="<?= $mapel['jam'];?>">
        <small class="form-text text-danger"><?= form_error('jam');?></small> 

        <button class="btn btn-primary mt-4" type="submit">Submit</button name="tambah">
    </form>
    </div>
    </div>
  </div>
  </div>
  </div>

  </main>