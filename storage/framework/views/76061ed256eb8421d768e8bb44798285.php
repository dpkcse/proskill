<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title> <?php echo $__env->yieldContent('title'); ?> - <?php echo e(config('app.name')); ?> </title>
    <?php echo $__env->make('backend.layouts.partials.styles', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed <?php echo e($setting->dark_mode ? 'dark-mode' : ''); ?>">
    <?php
        $user = auth()->user();
    ?>
    <div class="wrapper">
        <!-- Navbar -->
        <nav id="nav"
            class="main-header navbar navbar-expand <?php echo e($setting->dark_mode ? 'navbar-dark navbar-dark' : 'navbar-white navbar-light'); ?>">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a id="nav_collapse" class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-block">
                    <a title="<?php echo e(__('browse_website')); ?>" target="_blank" class="nav-link" href="<?php echo e(url('/')); ?>"
                        class="btn btn-primary mt-4 mx-3 text-white">
                        <i class="fas fa-globe fa-2"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-block">
                    <a title="<?php echo e(__('clear_cache')); ?>" class="nav-link" href="<?php echo e(route('app.optimize-clear')); ?>"
                        class="btn btn-primary mt-4 mx-3 text-white">
                        <i class="fas fa-broom"></i>
                    </a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <?php echo $__env->make('backend.layouts.partials.top-right-nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </ul>
        </nav>

        <!-- Support Menu -->
        <?php if($setting->help_widget): ?>
        <?php if (isset($component)) { $__componentOriginal3786d07c843956436a7e621b8bbed811 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3786d07c843956436a7e621b8bbed811 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.help-widget','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('help-widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3786d07c843956436a7e621b8bbed811)): ?>
<?php $attributes = $__attributesOriginal3786d07c843956436a7e621b8bbed811; ?>
<?php unset($__attributesOriginal3786d07c843956436a7e621b8bbed811); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3786d07c843956436a7e621b8bbed811)): ?>
<?php $component = $__componentOriginal3786d07c843956436a7e621b8bbed811; ?>
<?php unset($__componentOriginal3786d07c843956436a7e621b8bbed811); ?>
<?php endif; ?>
        <?php endif; ?>

        <!-- Main Sidebar Container -->
        <?php if(request()->is('admin/settings/*')): ?>
            <?php echo $__env->make('backend.layouts.partials.setting-sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php else: ?>
            <?php echo $__env->make('backend.layouts.partials.default-sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endif; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
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
                    <?php echo $__env->yieldContent('breadcrumbs'); ?>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <?php echo $__env->yieldContent('content'); ?>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Main Footer -->
    </div>
    <!-- ./wrapper -->

    <!-- PWA Button Start -->
    <button class="pwa-install-btn bg-white position-fixed d-none" id="installApp">
        <img src="<?php echo e(asset('pwa-btn.png')); ?>" alt="Install App">
    </button>
    <!-- PWA Button End -->

    <?php echo $__env->make('backend.layouts.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('backend.layouts.partials.scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <script>
        Validate();

        $('#search').keyup(Validate);

        function Validate() {
            $('#searchIcon').addClass('d-none');
            $('#searchRemove').removeClass('d-none');
        }

        function RemoveHistory() {
            location.reload();
        }

        $('#search').keyup(function() {

            $('#searchcontainer').addClass('sidebar-search-open');

            $.ajax({
                url: "<?php echo e(route('admin.search')); ?>",
                type: "POST",
                data: {
                    data: $('#search').val(),
                    _token: '<?php echo e(csrf_token()); ?>'
                },
                dataType: 'json',
                success: function(result) {

                    $('#result').html('');
                    if (result.pages.length > 0) {

                        $.each(result.pages, function(key, page) {
                            $('#result').append('<a href="' + page.url +
                                '" class="list-group-item p-2"><div class="search-title">' +
                                page.page_title + '</div></a>');
                        });

                    } else {

                        $('#result').html(
                            '<span class="list-group-item"><div class="search-title text-center p-1"><strong>No Page</strong></div><div class="search-path"></div></span>'
                        )
                    }
                }
            });
        });
    </script>

    <!-- PWA Script Start -->
    <?php if($setting->pwa_enable): ?>
        <script src="<?php echo e(asset('/sw.js')); ?>"></script>
        <script>
            if (!navigator.serviceWorker) {
                navigator.serviceWorker.register("/sw.js").then(function (reg) {
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
                    const { outcome } = await deferredPrompt.userChoice;
                    if (outcome === 'accepted') {
                        deferredPrompt = null;
                    }
                }
            });
        </script>
    <?php endif; ?>
    <!-- PWA Script End -->

</body>

</html>
<?php /**PATH /Volumes/OFFICIAL/DEVSFLOCK/Proskill Job/localproskill/resources/views/backend/layouts/left-nav.blade.php ENDPATH**/ ?>