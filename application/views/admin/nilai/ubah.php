<div class="content-wrapper col-12 col-xl-10 ml-md-auto pt-3">
<div class="container">
<div class="row">
<div class="col-12">
<nav aria-label="breadcrumb">
<div class="container">

  <ol class="breadcrumb d-flex justify-content-end">
    <li class="breadcrumb-item"><a href="<?= site_url();?>Dashboard/home">Dashboard</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="<?= site_url();?>Mapel/list_mapel">Score</a></li>
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
Form Ubah Data Nilai
</div>
<div class="card-body">

    <form class="ml-3" action="" method="post">


        <input hidden class="form-control" type="text" name="nilai_id" id="nilai_id" value="<?= $nilai['nilai_id'];?>">


        <label for="nis">NIS</label>
        <input class="form-control" type="text" name="nis" id="nis" value="<?= $nilai['nis'];?>">
        <small class="form-text text-danger"><?= form_error('nis');?></small> 

        <label for="kelas">Kelas</label>
        <select class="form-control" id="kelas" name="kelas">
        <?php foreach($kelas as $kelas):?>
        <?php if($kelas == $nilai['kelas']):?>
        <option value="<?=$nilai['kelas'];?>" selected><?=$nilai['kelas'];?></option>
        <?php else:?>
        <option value="<?=$kelas;?>"><?=$kelas;?></option>
        <?php 
        endif;
        endforeach;?>
        </select>

        <label for="kd_mapel">Kode Mapel</label>
        <select class="form-control" id="kd_mapel" name="kd_mapel">
        <?php foreach($mapel as $mapel):?>
        <?php $Mapel_q = $mapel['kd_mapel'];?>
        <?php if($Mapel_q == $nilai['kd_mapel']):?>
        <option value="<?=$mapel['kd_mapel'];?>" selected><?=$mapel['kd_mapel'];?></option>
        <?php else:?>
        <option value="<?=$mapel['kd_mapel'];?>"><?=$mapel['kd_mapel'];?></option>
        <?php endif; endforeach;?>
        </select>
    
        <label for="nip">NIP</label>
        <input class="form-control" type="text" name="nip" id="nip" value="<?= $nilai['nip'];?>">
        <small class="form-text text-danger"><?= form_error('nip');?></small> 

        <label for="nilai_harian">Nilai Harian</label>
        <input class="form-control" type="text" name="nilai_harian" id="nilai_harian" value="<?= $nilai['nilai_harian'];?>">
        <small class="form-text text-danger"><?= form_error('nilai_harian');?></small> 

        <label for="nilai_uts">Nilai UTS</label>
        <input class="form-control" type="text" name="nilai_uts" id="nilai_uts" value="<?= $nilai['nilai_uts'];?>">
        <small class="form-text text-danger"><?= form_error('nilai_uts');?></small> 

        <label for="nilai_uas">Nilai UAS</label>
        <input class="form-control" type="text" name="nilai_uas" id="nilai_uas" value="<?= $nilai['nilai_uas'];?>">
        <small class="form-text text-danger"><?= form_error('nilai_uas');?></small> 

        <label for="ijin">Ijin</label>
        <input class="form-control" type="text" name="ijin" id="ijin" value="<?= $nilai['ijin'];?>">
        <small class="form-text text-danger"><?= form_error('ijin');?></small> 

        <label for="sakit">Sakit</label>
        <input class="form-control" type="text" name="sakit" id="sakit" value="<?= $nilai['sakit'];?>">
        <small class="form-text text-danger"><?= form_error('sakit');?></small> 

        <label for="tidak_hadir">Tidak Hadir</label>
        <input class="form-control" type="text" name="tidak_hadir" id="tidak_hadir" value="<?= $nilai['tidak_hadir'];?>">
        <small class="form-text text-danger"><?= form_error('tidak_hadir');?></small> 

        <label for="semester">Semester</label>
        <select id="semester" name="semester" class="form-control">
        <?php
        foreach($semester as $sms):?>
        <?php if($sms == $nilai['semester']):?>
        <option value="<?=$sms;?>" selected><?=$sms;?></option>
        <?php else:?>
        <option value="<?=$sms;?>"><?=$sms;?></option>
        <?php endif; endforeach;?>
        </select>
        <small class="form-text text-danger"><?= form_error('semester');?></small> 

        <label for="thn_ajaran">Tahun Ajaran</label>
        <select id="thn_ajaran" name="tahun_ajaran" class="form-control">
        <?php
        foreach($thn_ajaran as $thn):?>
        <?php if($thn == $nilai['tahun_ajaran']):?>
        <option value="<?=$thn;?>" selected><?=$thn;?></option>
        <?php else:?>
        <option value="<?=$thn;?>"><?=$thn;?></option>
        <?php endif; endforeach;?>
        </select>        
        <small class="form-text text-danger"><?= form_error('tahun_ajaran');?></small> 

        <button class="btn btn-primary mt-4" type="submit">Submit</button name="tambah">
    </form>
    </div>
    </div>
  </div>
  </div>
  </div>

  </main>