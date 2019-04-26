<div class="content-wrapper col-12 col-xl-10 ml-md-auto pt-3">
<div class="container">
<div class="row">
<div class="col-12">
<nav aria-label="breadcrumb">
<div class="container">

  <ol class="breadcrumb d-flex justify-content-end">
    <li class="breadcrumb-item"><a href="<?= site_url();?>Dashboard/home">Dashboard</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="<?= site_url();?>Mapel/list_mapel">Mapel</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
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
Form Tambah Data Mapel
</div>
<div class="card-body">

    <form class="ml-3" action="" method="post">
        <label for="kd_mapel">Kode Mapel</label>
        <input class="form-control" type="text" name="kd_mapel" id="kd_mapel" require>
        <small class="form-text text-danger"><?= form_error('kd_mapel');?></small> 

        <label for="nm_mapel">Nama Mapel</label>
        <input class="form-control" type="text" name="nm_mapel" id="nm_mapel">
        <small class="form-text text-danger"><?= form_error('nm_mapel');?></small> 

        <button class="btn btn-primary mt-4" type="submit">Submit</button name="tambah">
    </form>
    </div>
    </div>
  </div>
  </div>
  </div>

  </main>