<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
    <meta property="og:image" content="<?php echo $__env->yieldContent('og:image'); ?>">
    <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(config('app.name')); ?></title>

    <?php echo $__env->yieldContent('ld-data'); ?>

    
    <?php echo $__env->make('frontend.partials.public-styles', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
    <?php echo $__env->yieldContent('css'); ?>

    
    <?php echo $setting->header_css; ?>

    <?php echo $setting->header_script; ?>


</head>

<body dir="<?php echo e(langDirection()); ?>">
    <input type="hidden" value="<?php echo e(current_country_code()); ?>" id="current_country_code">
    <?php
        $userId = auth()->check() ? auth()->id() : 0;
    ?>
    <input type="hidden" id="auth_user" value="<?php echo e($userId > 0); ?>">
    <input type="hidden" id="auth_user_id" value="<?php echo e($userId); ?>">

    <?php if (isset($component)) { $__componentOriginalf217ec4fe23c3b2b6c3d5f263b35cadd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf217ec4fe23c3b2b6c3d5f263b35cadd = $attributes; } ?>
<?php $component = App\View\Components\Admin\AppModeAlert::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.app-mode-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Admin\AppModeAlert::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf217ec4fe23c3b2b6c3d5f263b35cadd)): ?>
<?php $attributes = $__attributesOriginalf217ec4fe23c3b2b6c3d5f263b35cadd; ?>
<?php unset($__attributesOriginalf217ec4fe23c3b2b6c3d5f263b35cadd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf217ec4fe23c3b2b6c3d5f263b35cadd)): ?>
<?php $component = $__componentOriginalf217ec4fe23c3b2b6c3d5f263b35cadd; ?>
<?php unset($__componentOriginalf217ec4fe23c3b2b6c3d5f263b35cadd); ?>
<?php endif; ?>
    
    <?php echo $__env->make('frontend.partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <?php echo $__env->yieldContent('main'); ?>
    
    
    <?php echo $__env->make('frontend.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- scripts -->
    <?php echo $__env->make('frontend.partials.public-scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Theme Switcher -->
    

    <!-- Custom js -->
    <?php echo $setting->body_script; ?>


    <?php if (isset($component)) { $__componentOriginal58a74e3162bb9509337724b216d26b11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal58a74e3162bb9509337724b216d26b11 = $attributes; } ?>
<?php $component = App\View\Components\Frontend\CookiesAllowance::resolve(['cookies' => $cookies] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.cookies-allowance'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Frontend\CookiesAllowance::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal58a74e3162bb9509337724b216d26b11)): ?>
<?php $attributes = $__attributesOriginal58a74e3162bb9509337724b216d26b11; ?>
<?php unset($__attributesOriginal58a74e3162bb9509337724b216d26b11); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal58a74e3162bb9509337724b216d26b11)): ?>
<?php $component = $__componentOriginal58a74e3162bb9509337724b216d26b11; ?>
<?php unset($__componentOriginal58a74e3162bb9509337724b216d26b11); ?>
<?php endif; ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (shouldShowPopup()) {
                setTimeout(function() {
                    document.getElementById("popup").classList.add("active");
                    document.getElementsByTagName("body")[0].style.overflow = "hidden";
                }, 30000);
            }

            var close = document.getElementById("close-popup");
            close && close.addEventListener("click", () => {
                document.getElementById("popup").classList.remove("active");
                document.getElementsByTagName("body")[0].style.overflow = "auto";
                setPopupClosedFlag();
            });

            var formBtn = document.getElementsByClassName("form-btn");
            formBtn && formBtn[0] && formBtn[0].addEventListener("click", () => setFormSubmittedFlag());
        });


        function shouldShowPopup() {
            const now = Date.now();
            const lastClosed = localStorage.getItem("popupLastClosed");
            const formSubmitted = localStorage.getItem("formSubmitted");

            if (!formSubmitted && (!lastClosed || now - lastClosed > 3600000)) {
                return true;
            }

            return false;
        }

        function setPopupClosedFlag() {
            localStorage.setItem("popupLastClosed", Date.now());
        }

        function setFormSubmittedFlag() {
            localStorage.setItem("formSubmitted", "true");
        }
    </script>

    <?php if(config('app.demo_mode')): ?>
        

    <?php endif; ?>

    <script>
        // Hide the preloader when loaded
        var el = document.querySelector(".preloader");
        el && window.addEventListener("load", () => el.style.display = "none");
    </script>
    <?php echo $__env->make('frontend.partials.analytics', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- PWA Script Start -->
    <?php if($setting->pwa_enable): ?>
        <!-- PWA Button Start -->
        <button class="pwa-install-btn bg-white position-fixed d-none" id="installApp">
            <img src="<?php echo e(asset('pwa-btn.png')); ?>" alt="Install App" loading="lazy">
        </button>
        <!-- PWA Button End -->
        <script src="<?php echo e(asset('/sw.js')); ?>"></script>
        <script>
            if (!navigator.serviceWorker) {
                navigator.serviceWorker.register("/sw.js").then(function(reg) {
                    console.log("Service worker has been registered for scope: " + reg);
                });
            }

            let deferredPrompt;
            window.addEventListener('beforeinstallprompt', (e) => {
                $('#installApp').removeClass('d-none');
                deferredPrompt = e;
            });

            const installApp = document.getElementById('installApp');
            installApp.addEventListener('click', async () => {
                if (deferredPrompt !== null) {
                    deferredPrompt.prompt();
                    const {
                        outcome
                    } = await deferredPrompt.userChoice;
                    if (outcome === 'accepted') {
                        deferredPrompt = null;
                    }
                }
            });
        </script>
    <?php endif; ?>
    <!-- PWA Script End -->

    
</body>

</html><?php /**PATH /Volumes/OFFICIAL/DEVSFLOCK/Proskill Job/localproskill/resources/views/frontend/layouts/public.blade.php ENDPATH**/ ?>