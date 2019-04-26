<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo SITE_NAME .": ". ucfirst($this->uri->segment(1)) ." - ". ucfirst($this->uri->segment(2)) ?></title>

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-4.1.2-dist/css/bootstrap.min.css') ?>">

    <!-- My Custom Css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/mycustom.css'); ?>">
<style>
body {
  overflow-x: hidden;
}
.btn-action {
  width: 94px;
  box-shadow: 0 1px 3px grey;
  margin-top: 3px;
}

.btn-shadow {
  box-shadow: 0 1px 3px grey;
}

.btn-grey {
  background-color: grey;
  color: white;
}

.absen {
  font-size: 1em;
}

@media only screen and (max-width: 600px){
  .absen {
    font-size: 0.9em;
  }
}



  </style>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome-free-5.6.3-web/css/solid.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome-free-5.6.3-web/css/brands.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome-free-5.6.3-web/css/fontawesome.css') ?>">

</head>
<body>
