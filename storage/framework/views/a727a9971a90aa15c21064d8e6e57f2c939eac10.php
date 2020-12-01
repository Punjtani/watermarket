<?php $__env->startSection('content'); ?>
<div class="container card">
    <img class="card-img-top" src="holder.js/100x180/" alt="">
    <div class="card-body">
        <form action="<?php echo e(route('orders.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input type="text" name="order_name"><br>
            <input type="submit" value="Order Now">
         </form>
    </div>
    <table>
        <thead>
            <tr>
                <td>Order name</td>
                <td>Status</td>
            </tr>

        </thead>
        <tr>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($order->order_name); ?></td>

                  <td><?php echo e($order->active); ?></td>
                   <td>
                       <form action='<?php echo e(route('new',$order->id)); ?>' method='post'>
                          <?php echo csrf_field(); ?>
                         <button class="btn btn-success" type="submit"> Approve</button>
                       </form>
                   </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tr>
    <br><br>
        <tr>
            <td> <h1>Riders Showing</h1></td>
            <?php $__currentLoopData = $orders2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($order->order_name); ?></td>

                  <td><?php echo e($order->active); ?></td>
                  <td>
                    <form action='<?php echo e(route('new1',$order->id)); ?>' method='post'>
                       <?php echo csrf_field(); ?>
                      <button class="btn btn-success" type="submit"> DisApprove</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tr>

    </table>
    <?php
    function distance($lat1, $lon1, $lat2, $lon2, $unit) {
        if (($lat1 == $lat2) && ($lon1 == $lon2)) {
          return 0;
        }
        else {
          $theta = $lon1 - $lon2;
          $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
          $dist = acos($dist);
          $dist = rad2deg($dist);
          $miles = $dist * 60 * 1.1515;
          $unit = strtoupper($unit);

          if ($unit == "K") {
            return ($miles * 1.609344);
          } else if ($unit == "N") {
            return ($miles * 0.8684);
          } else {
            return $miles;
          }
        }
      }

      echo distance(32.9697, -96.80322, 29.46786, -98.53506, "M") . " Miles<br>";
      echo distance(32.9697, -96.80322, 29.46786, -98.53506, "K") . " Kilometers<br>";
      echo distance(32.9697, -96.80322, 29.46786, -98.53506, "N") . " Nautical Miles<br>";

?>;
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xammp1\htdocs\projects\newlaravel8\resources\views\order.blade.php ENDPATH**/ ?>