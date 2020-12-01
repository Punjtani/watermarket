<?php $__env->startSection('data'); ?>

<div class="container">
    <h1>Home Page</h1>
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        

        <div class="info-box-content">
          <span class="info-box-text">Total Registered User</span>
          <span class="info-box-number"><?php echo e($users[0]->buyer); ?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        

        <div class="info-box-content">
          <span class="info-box-text">Total Distributor</span>
        <span class="info-box-number"><?php echo e($users[0]->distributor); ?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        

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
                <th>User Status <i class="fa fa-minus-circle" aria-hidden="true"></i></th>
                <th>Distributor Status <i class="fa fa-minus-circle" aria-hidden="true"></i></th>
              </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
                  <?php if($s->email!=null): ?>
                  <tr>
                    <td><a href="<?php echo e(route('users', $s->buyer)); ?>"><?php echo e($s->name); ?></a></td>
                    <td><?php echo e($s->email); ?></td>
                    <td><span class="label label-success"> <?php echo e($s->user_status); ?></span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo e($s->distributor_status); ?></div>
                    </td>
                  </tr>
                      <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
        </div>
        <!-- /.box-footer -->
      </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xammp1\htdocs\projects\newlaravel8\resources\views\project.blade.php ENDPATH**/ ?>