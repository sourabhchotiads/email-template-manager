</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; <?= date('Y') ?> <a href="javascript:void(0)"><?= SITE_NAME ?></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 4 -->
<script src="<?= BASE_URL ?>assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- daterangepicker -->
<script src="<?= BASE_URL ?>assets/backend/plugins/moment/moment.min.js"></script>
<script src="<?= BASE_URL ?>assets/backend/plugins/daterangepicker/daterangepicker.js"></script>

<!-- overlayScrollbars -->
<script src="<?= BASE_URL ?>assets/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= BASE_URL ?>assets/backend/dist/js/adminlte.js?v=<?= VERSION ?>"></script>

</body>
</html>