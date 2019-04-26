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
                <a class="nav-link rounded text-light <?= $this->uri->segment(2) == 'list_siswa' ? 'active': '' ?>" href="<?= site_url() ?>Nilai/list_siswa"><i class="fa fa-book-open"></i> Students</a>
              </li>
              <li class="nav-item">
                <a class="nav-link rounded text-light  <?= $this->uri->segment(2) == 'list_nilai' ? 'active': '' ?>" href="<?= site_url() ?>Nilai/list_nilai"><i class="fa fa-book-open"></i> Score</a>
              </li>
            </ul>
          </nav>
        </div>
</section>