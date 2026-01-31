<?php if($setting->default_layout): ?>
    <?php echo $__env->make('backend.layouts.left-nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('backend.layouts.top-nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>
<?php echo $__env->make('backend.layouts.partials.preloader', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<input type="hidden" value="<?php echo e(current_country_code()); ?>" id="current_country_code">
<?php /**PATH /Volumes/OFFICIAL/DEVSFLOCK/Proskill Job/localproskill/resources/views/backend/layouts/app.blade.php ENDPATH**/ ?>