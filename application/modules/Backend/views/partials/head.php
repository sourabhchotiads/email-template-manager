<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $site_title ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/backend/dist/css/adminlte.min.css?v=<?= VERSION ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/backend/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/backend/plugins/summernote/summernote-bs4.min.css">

  <!-- jQuery -->
  <script src="<?= BASE_URL ?>assets/backend/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= BASE_URL ?>assets/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  
  <script>
      var base_url = '<?= BASE_URL ?>';
  </script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?= BASE_URL ?>assets/backend/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>