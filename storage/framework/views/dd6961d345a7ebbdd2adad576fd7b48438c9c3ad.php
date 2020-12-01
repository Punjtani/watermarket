<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__("laravel-otp-login::messages.verify_phone_title")); ?></div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('otp.verify')); ?>">
                        <?php echo csrf_field(); ?>

                        <p><?php echo e(__("laravel-otp-login::messages.hero_text", ["digit" => config("otp.otp_digit_length", 6)])); ?></p>

                        <div class="form-group">
                            <label class="form-label"><?php echo e(__("laravel-otp-login::messages.one_time_password")); ?></label>

                            <input id="code" type="text" class="form-control<?php echo e($errors->has('code') ? ' is-invalid' : ''); ?>" name="code" value="<?php echo e(old('code')); ?>"
                            required autofocus autocomplete="off">
                            <?php if($errors->has('code')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('code')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary"><?php echo e(__("laravel-otp-login::messages.verify_phone_button")); ?></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center mt-4">
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <?php echo e(__('laravel-otp-login::messages.otp_not_received')); ?>

                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xammp1\htdocs\projects\newlaravel8\resources\views\vendor\laravel-otp-login\otpvalidate.blade.php ENDPATH**/ ?>