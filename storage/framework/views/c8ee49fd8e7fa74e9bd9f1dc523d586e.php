<?php if(config('app.mode') != 'live'): ?>
    <div class="alert alert-warning top-fixed" role="alert">
        <?php if(config('app.mode') == 'maintenance'): ?>
            <strong><?php echo e(__('warning')); ?>!</strong> <?php echo e(__('maintenance_mode_is_on_change_from')); ?> <a
                href="<?php echo e(route('settings.system', ['#mode_settings'])); ?>">
                <?php echo e(__('website_settings')); ?></a>
        <?php elseif(config('app.mode') == 'comingsoon'): ?>
            <strong><?php echo e(__('warning')); ?>!</strong> <?php echo e(__('coming_soon_mode_is_on_change_from')); ?> <a
                href="<?php echo e(route('settings.system', ['#mode_settings'])); ?>">
                <?php echo e(__('website_settings')); ?></a>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH /Volumes/OFFICIAL/DEVSFLOCK/Proskill Job/localproskill/resources/views/components/admin/app-mode-alert.blade.php ENDPATH**/ ?>