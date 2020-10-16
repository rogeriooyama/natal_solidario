<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= isset($title_for_layout) ? $title_for_layout : ''; ?> | Natal de Luz</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= 
    $this->Html->css([
      '/adminlte/plugins/fontawesome-free/css/all.min', 
      '/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min',
      '/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min',
      '/adminlte/plugins/jqvmap/jqvmap.min',
      '/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min',
      '/adminlte/plugins/daterangepicker/daterangepicker'
    ]) 
  ?>
  <?= 
    $this->Html->css([
      '/adminlte/dist/css/adminlte',
      '/adminlte/dist/css/ionicons.min',
      './Pages/ApplicantIdeas'
    ]) 
  ?>
  <?= $this->Html->css(['custom-style']) ?>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?= $this->element('adminlte_navbar') ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <?= $this->element('adminlte_sidebar') ?>

  
  <!-- /.sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0 text-dark"></h2>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- Breadcrumbs -->
            <?php
              $this->Breadcrumbs->setTemplates([
                'wrapper' => '<ol class="breadcrumb float-sm-right">{{content}}</ol>',
                'item' => '<li class="breadcrumb-item"><a href="{{url}}">{{title}}</a></li>',
                'itemWithoutLink' => '<li class="breadcrumb-item">{{title}}</li>'
              ]); 
              echo $this->Breadcrumbs->render(); 
            ?><!-- /.Breadcrumbs -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Flash message -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <?= $this->Flash->render() ?>
        </div>
      </div>
    </div>    
    <!-- /.flash message -->

    <!-- Main content -->
      <?= $this->fetch('content') ?>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->  

  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline-block">
      <b>Fundação Inova Prudente</b>
    </div>
  </footer>
  
</div>
<!-- ./wrapper -->

<?= 
  $this->Html->script([
    '/adminlte/plugins/jquery/jquery.min', 
    '/adminlte/plugins/jquery-ui/jquery-ui.min'
  ]) 
?>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<?= 
  $this->Html->script([ 
    '/adminlte/plugins/bootstrap/js/bootstrap.bundle.min',
    '/adminlte/dist/js/adminlte',
    '/adminlte/dist/js/pages/dashboard'
  ]) 
?>
<?= 
  $this->Html->script([ 
    '/adminlte/plugins/chart.js/Chart.min',
    '/adminlte/plugins/sparklines/sparkline',
    '/adminlte/plugins/jqvmap/jquery.vmap.min',
    '/adminlte/plugins/jqvmap/maps/jquery.vmap.usa',
    '/adminlte/plugins/jquery-knob/jquery.knob.min',
    '/adminlte/plugins/moment/moment.min',
    '/adminlte/plugins/daterangepicker/daterangepicker',
    '/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min',
    '/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min'
  ]) 
?>

</body>
</html>
