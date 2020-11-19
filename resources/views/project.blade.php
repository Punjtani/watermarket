<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Legacy User Menu</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>

@media (min-width: 1250px) and (max-width:1800px) {
    .left{margin-left:950%}
}
@media (min-width: 1050px) and (max-width:1250px) {
  .left{margin-left:850%}}
@media (min-width: 950px) and (max-width:1050px) {
  .left{margin-left:700%}}
@media (min-width: 850px) and (max-width:950px) {
  .left{margin-left:650%}
 }
 @media (min-width: 750px) and (max-width:850px) {
  .left{margin-left:550%} }
 @media (min-width: 650px) and (max-width:750px) {
  .left{margin-left:450%} }
 @media (min-width: 550px) and (max-width:650px) {
  .left{margin-left:400%} }
 @media (min-width: 440px) and (max-width:550px) {
  .left{margin-left:350%} }
 @media (min-width: 400px) and (max-width:450px) {
  .left{margin-left:320%}}
 }
 @media (min-width: 340px) and (max-width:400px) {
  .left{margin-left:310%}}
 }
  </style>
</head>
<body class="hold-transition sidebar-mini" style="overflow-x: hidden">
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button"   class="close" data-dismiss="alert"> <a  href="/project3" style="text-decoration:none ">&times;</a> </button>
        <strong>{{$status}}</strong>
      </div>
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->

  <nav class="main-header navbar navbar-expand navbar-white" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>

      <li class="nav-item left">
        <div class="left">
        <a href="#" class="nav-link  flex-column">
        <i class="fa fa-times" aria-hidden="true">
            logout</i>
        </a>
        </div>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark bg-white elevation-1" style="margin-top:55px">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar  flex-column" data-widget="treeview" role="menu" data-accordion="false" style="margin-top:55px">


          <li class="nav-item">
            <a href="project" class="nav-link">
              <i class="nav-icon far fa fa-home text-warning" aria-hidden="true"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/project2" class="nav-link">
                <i class="nav-icon fa fa-users" aria-hidden="true"></i>
              <p>Users</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class=" nav-icon fa fa-building" aria-hidden="true"></i>
              <p>Finance</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/project1" class="nav-link">
                <i class="nav-icon fa fa-tint" aria-hidden="true"></i>
              <p>Water Lap</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-cog" aria-hidden="true"></i>
              <p>Settings</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    {{-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Legacy User Menu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Legacy User Menu</li>
            </ol>

          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section> --}}

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->

        {{-- <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div> --}}

     <div class="container">
        <h1>Home Page</h1>
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            {{-- <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span> --}}

            <div class="info-box-content">
              <span class="info-box-text">Total Registered User</span>
              <span class="info-box-number">14<small>K</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            {{-- <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span> --}}

            <div class="info-box-content">
              <span class="info-box-text">Total Amount Credit</span>
              <span class="info-box-number">99,459</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            {{-- <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span> --}}

            <div class="info-box-content">
              <span class="info-box-text">Total Order Recieved</span>
              <span class="info-box-number">20K</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            {{-- <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span> --}}

            <div class="info-box-content">
              <span class="info-box-text">Total Product in System</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>


    <div class="card">
        <div class="box box-info" style="margin-top:30px;padding:30px">
            <div class="box-header with-border-dark">
              <h3 class="box-title">Standard Table Design</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Name <i class="fa fa-minus-circle" aria-hidden="true"></i></th>
                    <th>Email <i class="fa fa-minus-circle" aria-hidden="true"></i></th>
                    <th>User Type <i class="fa fa-minus-circle" aria-hidden="true"></i></th>
                    <th>Status <i class="fa fa-minus-circle" aria-hidden="true"></i></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                    <td>Call of Duty IV</td>
                    <td><span class="label label-success">Shipped</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                    <td>Samsung Smart TV</td>
                    <td><span class="label label-warning">Pending</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                    <td>iPhone 6 Plus</td>
                    <td><span class="label label-danger">Delivered</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                    <td>Samsung Smart TV</td>
                    <td><span class="label label-info">Processing</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                    <td>Samsung Smart TV</td>
                    <td><span class="label label-warning">Pending</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                    <td>iPhone 6 Plus</td>
                    <td><span class="label label-danger">Delivered</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                    <td>Call of Duty IV</td>
                    <td><span class="label label-success">Shipped</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-footer -->
          </div>
    </div>
</div>


    </section>
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark ">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
