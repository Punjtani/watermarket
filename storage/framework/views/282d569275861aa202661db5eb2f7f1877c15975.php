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
      @media (min-width: 1950px) and (max-width:2050px) {
    .left{margin-left:1800%}
}
@media (min-width: 1850px) and (max-width:1950px) {
    .left{margin-left:1700%}
}
          @media (min-width: 1750px) and (max-width:1850px) {
    .left{margin-left:1500%}
}
          @media (min-width: 1550px) and (max-width:1750px) {
    .left{margin-left:1150%}
}
      @media (min-width: 1250px) and (max-width:1550px) {
    .left{margin-left:1100%}
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
 @media (min-width: 400px) and (max-width:440px) {
  .left{margin-left:320%}}
 }
 @media (min-width: 340px) and (max-width:400px) {
  .left{margin-left:1250%}}
 }

  </style>
</head>
<body class="hold-transition sidebar-mini" style="overflow-x: hidden">
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
            <a href="/logout" class="nav-link  flex-column">
            <i class="fa fa-times" aria-hidden="true">
                logout</i>
            </a>
            </div>
          </li>
    </ul>

  </nav>
     <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-white  bg-white  elevation-2" style="margin-top:55px;">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav  nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="margin-top:55px">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item">
                <a href="<?php echo e(route('data')); ?>" class="nav-link">
                  <i class="nav-icon far fa fa-home text-warning" aria-hidden="true"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/users/<?php echo e($v->id ?? null); ?>" class="nav-link">
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
                <a href="/waterlap/<?php echo e($v->id ?? null); ?>" class="nav-link">
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
  <div class="container content-wrapper container-fluid" ;>

    <!-- Sidebar Menu -->
    <div style="margin-top:0px;padding:14px";>
      <nav class="mt-2">
          <ul class="nav  nav-sidebar flex-column" data-widget="treeview" role="menu"
           data-accordion="false" style="padding:54px";>
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
               <h1>User Detail</h1>
           <li>
                <div class="jumbotron bg-white">
                <h3 style="background-color:lightgreen;width:250px">Basic Information</h3>
                  <h5>
                  Name: <?php echo e($v->name ?? null); ?> <br>
                 email: <?php echo e($v->email ?? null); ?> <br>
                 phone: <?php echo e($v->phone ?? null); ?> <br>
                  </h4>
                </div>
            </li>
            <li>
                <div class="jumbotron bg-white">
                    <div class="container">
                        <div class="row">
                            <?php echo e(dd($users)); ?>

                            <div class="col-4"><h3 style="background-color:lightgreen;width:250px">
                                Detail Information</h3></div>
                            <div class="col-6"> <span style="display:flex-row">
                                <input type="radio" id="male" name="gender" value="male">
            <label for="male">Active</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Non Active</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
                            </span>
                        </div>
                        </div>
                    </div>

                  <h4>
                  About: <?php echo e($v->address ?? null); ?> <br>
                  Nationality: <?php echo e($v->nationality ?? null); ?> <br>
                  ID Number: <?php echo e($v->id_number ?? null); ?> <br>
                  Address: <?php echo e($v->address ?? null); ?> <br>
                  IBAN: <?php echo e($v->iban ?? null); ?> <br>
                  DOB :<?php echo e($v->dob ?? null); ?> <br>
                  
                  </h4>
                </div>
            </li>

          </ul>
        </nav>
    </div>

    <!-- /.sidebar-menu -->
</div>
</section>
</div>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
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
<?php /**PATH D:\xammp1\htdocs\projects\newlaravel8\resources\views\third.blade.php ENDPATH**/ ?>