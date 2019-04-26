<section id="sidebar">
<div class="container-fluid">
  <div class="row">
    <div  id="side" class="sidebar col-5 col-sm-4 col-md-3 col-lg-2 d-xl-block bg-dark">
    <nav class="navbar-expand-lg" id="visible">
      <ul class="nav nav-pills flex-column">
        <div class="user-profile text-center my-3">
          <img src="<?= base_url('assets/img/sekolah.jpg') ?>" class="rounded border" width="80" alt="user" srcset="">
        </div>
        <li class="nav-item">
          <a class="nav-link rounded text-light  <?= $this->uri->segment(2) == 'home' ? 'active': '' ?>" href="<?= site_url() ?>Dashboard/home"><i class="fa fa-home"></i> Dashboard </a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle text-light bg-dark " id="dropdownLink" data-toggle="collapse" data-target="#collapseDash" href=""><i class="fa fa-edit"></i> Record</a>
        </li>
        <div class="collapse text-center" id="collapseDash">
              <li class="nav-item>">
              <a href="<?= site_url()?>Siswa/list_siswa" class="nav-link text-light <?= $this->uri->segment(2) == 'list_siswa' ? 'active': '' ?>"><i class="fa fa-user-graduate "></i>Student</a>
              </li>
              <li class="nav-item>">
              <a href="<?= site_url()?>Guru/list_guru" class="nav-link text-light <?= $this->uri->segment(2) == 'list_guru' ? 'active': '' ?>"><i class="fa fa-chalkboard-teacher "></i> Teacher</a>
              </li>
              <li class="nav-item>"><a href="<?= site_url()?>Mapel/list_mapel" class="nav-link text-light <?= $this->uri->segment(2) == 'list_mapel' ? 'active': '' ?>"><i class="fa fa-clipboard-list"></i> Subject</a></li>
        </div>
        <li class="nav-item">
            <a class="nav-link rounded text-light <?= $this->uri->segment(2) == 'nilai' ? 'active': '' ?>" href="<?= site_url()?>Nilai/nilai"><i class="fa fa-book-open"></i> Score</a>
        </li>
      </ul>
    </nav>
    </div>
  </section>