<link rel="icon" type="image/png" href="<?php echo e(asset($setting->favicon_image)); ?>">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="preload"
    as="style">
<link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/free-guide.css')); ?>">

<?php echo $__env->yieldPushContent('frontend_links'); ?>
<?php echo $__env->yieldContent('frontend_links'); ?>

<?php echo app('Illuminate\Foundation\Vite')(['resources/frontend/sass/app.scss', 'resources/frontend/public.css']); ?>

<?php
    $sessionPrimaryColor = session('primaryColor');
    $primaryColor = $sessionPrimaryColor ? $sessionPrimaryColor : $setting->frontend_primary_color;
?>

<!-- PWA Meta Theme color and link Start  -->
<?php if($setting->pwa_enable): ?>
    <meta name="theme-color" content="<?php echo e($primaryColor); ?>" />
    <link rel="apple-touch-icon" href="<?php echo e($setting->favicon_image_url); ?>">
    <link rel="manifest" href="<?php echo e(asset('/manifest.json')); ?>">
<?php endif; ?>
<!-- PWA Meta Theme color and link End -->

<style>
    :root {
        --primary-500: <?php echo e($primaryColor); ?> !important;
        --primary-600: <?php echo e(adjustBrightness($primaryColor, -0.2)); ?> !important;
        --primary-200: <?php echo e(adjustBrightness($primaryColor, 0.7)); ?> !important;
        --primary-100: <?php echo e(adjustBrightness($primaryColor, 0.8)); ?> !important;
        --primary-50: <?php echo e(adjustBrightness($primaryColor, 0.93)); ?> !important;
        --gray-20: <?php echo e(adjustBrightness($primaryColor, 0.98)); ?> !important;
    }
</style>
<?php /**PATH /Volumes/OFFICIAL/DEVSFLOCK/Proskill Job/localproskill/resources/views/frontend/partials/public-styles.blade.php ENDPATH**/ ?>