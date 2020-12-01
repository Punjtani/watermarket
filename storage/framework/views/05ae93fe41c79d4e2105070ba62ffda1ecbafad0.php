<li <?php if(isset($item['id'])): ?> id="<?php echo e($item['id']); ?>" <?php endif; ?>>

    <a class="dropdown-item" href="<?php echo e($item['href']); ?>"
       <?php if(isset($item['target'])): ?> target="<?php echo e($item['target']); ?>" <?php endif; ?>
       <?php echo $item['data-compiled'] ?? ''; ?>>

        
        <?php if(isset($item['icon'])): ?>
            <i class="<?php echo e($item['icon'] ?? ''); ?> <?php echo e(isset($item['icon_color']) ? 'text-' . $item['icon_color'] : ''); ?>"></i>
        <?php endif; ?>

        
        <?php echo e($item['text']); ?>


        
        <?php if(isset($item['label'])): ?>
            <span class="badge badge-<?php echo e($item['label_color'] ?? 'primary'); ?>">
                <?php echo e($item['label']); ?>

            </span>
        <?php endif; ?>

    </a>

</li><?php /**PATH D:\xammp1\htdocs\projects\newlaravel8\vendor\jeroennoten\laravel-adminlte\resources\views\partials\navbar\dropdown-item-link.blade.php ENDPATH**/ ?>