<link rel="icon" type="image/png" sizes="32x32" href="<?php echo e($setting->favicon_image_url); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/flagicon/dist/css/flag-icon.min.css" />
<link rel="stylesheet" href="<?php echo e(asset('backend/css/combined.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/dropify/css/dropify.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php echo $__env->yieldContent('style'); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/backend/app.css'); ?>

<!-- For PWA Theme Color as it is Frontend Start  -->
<?php
  $sessionPrimaryColor = session('primaryColor');
  $primaryColor = $sessionPrimaryColor ? $sessionPrimaryColor : $setting->frontend_primary_color;
?>

<!-- For PWA Theme Color as it is Frontend End  -->

<!-- PWA Meta Theme color and link Start  -->
<?php if($setting->pwa_enable): ?>
    <meta name="theme-color" content="<?php echo e($primaryColor); ?>"/>
    <link rel="apple-touch-icon" href="<?php echo e($setting->favicon_image_url); ?>">
    <link rel="manifest" href="<?php echo e(asset('/manifest.json')); ?>">
<?php endif; ?>
<!-- PWA Meta Theme color and link End -->

<style>
    :root {
        --sidebar-bg-color: <?php echo e($setting->sidebar_color); ?> !important;
        --sidebar-txt-color: <?php echo e($setting->sidebar_txt_color); ?> !important;
        --top-nav-bg-color: <?php echo e($setting->nav_color); ?> !important;
        --top-nav-txt-color: <?php echo e($setting->nav_txt_color); ?> !important;
        --main-color: <?php echo e($setting->main_color); ?> !important;
        --accent-color: <?php echo e($setting->accent_color); ?> !important;

        /* For PWA Theme Color as it is Frontend  */
        --primary-500: <?php echo e($primaryColor); ?> !important;
    }
</style>
<style>
    .select2-results__option[aria-selected=true] {
        display: none;
    }

    .select2-container--bootstrap4 .select2-selection--multiple .select2-selection__choice {
        color: #fff;
        border: 1px solid #fff;
        background: #007bff;
        border-radius: 30px;
    }

    .select2-container--bootstrap4 .select2-selection--multiple .select2-selection__choice__remove {
        color: #fff;
    }
</style>
<?php /**PATH /Volumes/OFFICIAL/DEVSFLOCK/Proskill Job/localproskill/resources/views/backend/layouts/partials/styles.blade.php ENDPATH**/ ?>