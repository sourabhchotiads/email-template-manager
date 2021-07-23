<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= ucfirst($page_data['pageName']) ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('backend/dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active"><?= $page_data['pageName'] ?></li>
              <?php if(isset($page_data['subPageName'])){ ?>
                <li class="breadcrumb-item active"><?= $page_data['subPageName'] ?></li>
              <?php } ?>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->