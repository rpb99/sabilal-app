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
Form Tambah Data Nilai
</div>
<div class="card-body">

    <form class="ml-3" action="" method="post">
        <label for="nis">NIS</label>
        <input class="form-control" type="text" name="nis" id="nis" value="<?= $siswa['nis']; ?>" require>
        <small class="form-text text-danger"><?= form_error('nis');?></small> 


        <label for="kelas">Kelas</label>
        <select name="kelas" id="kelas" class="form-control d-block w-50">
        <option value="">Pilih Kelas</option>
        <?php foreach ($kelas as $kls): ?>
        <option value="<?= $kls; ?>"><?= $kls; ?></option>
        <?php endforeach; ?>

        </select>
        <label for="nip">NIP</label>
        <input class="form-control" type="text" name="nip" id="nip">
        <small class="form-text text-danger"><?= form_error('nip');?></small> 

        <label for="kd_mapel">Kode Mapel</label>
        <input class="form-control" type="text" name="kd_mapel" id="kd_mapel">
        <small class="form-text text-danger"><?= form_error('kd_mapel');?></small> 

        <label for="harian">Nilai harian</label>
        <input class="form-control" type="text" name="harian" id="harian">
        <small class="form-text text-danger"><?= form_error('harian');?></small> 

        <label for="uts">Nilai UTS</label>
        <input class="form-control" type="text" name="uts" id="uts">
        <small class="form-text text-danger"><?= form_error('uts');?></small> 

        <label for="uas">Nilai UAS</label>
        <input class="form-control" type="text" name="uas" id="uas">
        <small class="form-text text-danger"><?= form_error('uas');?></small> 

        <label for="absen">Absen</label>
        <div class="row">

          <div class="col-4 col-md">
            <label class="absen" for="ijin">Ijin</label>
            <input class="form-control" type="text" name="ijin" id="ijin">
            <small class="form-text text-danger"><?= form_error('ijin');?></small> 
          </div>

          <div class="col-4 col-md">
            <label class="absen" for="sakit">Sakit</label>
            <input class="form-control" type="text" name="sakit" id="sakit">
            <small class="form-text text-danger"><?= form_error('sakit');?></small> 
          </div>
          
          <div class="col-4 col-md">
            <label class="absen" for="tidak_hadir">Tidak Hadir</label>
            <input class="form-control" type="text" name="tidak_hadir" id="tidak_hadir">
            <small class="form-text text-danger"><?= form_error('tidak_hadir');?></small> 
          </div>

        </div>

        <div class="row">
        
        <div class="col">
        <label for="semester">Semester</label>
        <select id="semester" name="semester" class="form-control">
        <?php
        foreach($semester as $sms):?>
        <option value="<?=$sms;?>"><?=$sms;?></option>
        <?php endforeach;?>
        </select>
        </div>
       

           <div class="col">
           <label for="thn_ajaran">Tahun Ajaran</label>
          <select id="thn_ajaran" name="thn_ajaran" class="form-control">
          <?php
          foreach($thn_ajaran as $thn):?>
          <option value="<?=$thn;?>"><?=$thn;?></option>
          <?php endforeach;?>
        </select>
          </div>
 
               </div>
        <button class="col-12 col-sm-3 col-lg-2  btn btn-primary mt-4" type="submit">Submit</button name="tambah">

    </form>
    </div>
    </div>
  </div>
  </div>
  </div>

  </main>