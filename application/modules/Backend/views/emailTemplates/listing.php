<link rel="stylesheet" href="<?= BASE_URL ?>assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= BASE_URL ?>assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?= ucfirst($page_data['pageName']) ?></h3>
                            <div class="card-tools">
                                <ul class="pagination pagination-sm float-right">
                                    <li class="page-item">
                                        <a class="btn btn-info" href="#">Add Template</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="templateListingTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Template Name</th>
                                        <th>Subject</th>
                                        <th>Created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="templateManagerListing">
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


<!-- DataTables  & Plugins -->
<script src="<?= BASE_URL ?>assets/backend/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= BASE_URL ?>assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= BASE_URL ?>assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= BASE_URL ?>assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= BASE_URL ?>assets/backend/js/emailTemplateManager.js?v=<?= VERSION ?>"></script>