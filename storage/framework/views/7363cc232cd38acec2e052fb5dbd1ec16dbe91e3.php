<li <?php if(isset($item['id'])): ?> id="<?php echo e($item['id']); ?>" <?php endif; ?>>

    <form action="<?php echo e($item['href']); ?>" method="<?php echo e($item['method']); ?>" class="form-inline">
        <?php echo e(csrf_field()); ?>

        
        <div class="input-group">
            <input class="form-control form-control-sidebar" type="search"
                   name="<?php echo e($item['input_name']); ?>" placeholder="<?php echo e($item['text']); ?>"
                   aria-label="<?php echo e($item['aria-label'] ?? $item['text']); ?>">
            <div class="input-group-append">
                <button class="btn btn-sidebar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

</li>
<?php /**PATH D:\xammp1\htdocs\projects\newlaravel8\vendor\jeroennoten\laravel-adminlte\resources\views\partials\sidebar\menu-item-search-form.blade.php ENDPATH**/ ?>