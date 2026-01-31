<aside id="sidebar" class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(route('admin.dashboard')); ?>" class="brand-link">
        <img src="<?php echo e($setting->favicon_image_url); ?>" alt="<?php echo e(__('logo')); ?>" class="elevation-3">
        <span class="brand-text font-weight-light"><?php echo e(config('app.name')); ?></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-nav-wrapper">
            <!-- Sidebar Menu -->
            <nav class="sidebar-main-nav mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('admin.dashboard') ? true : false,'route' => 'admin.dashboard','parameter' => '','path' => 'admin.dashboard','plusIcon' => '','icon' => 'fas fa-tachometer-alt']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('admin.dashboard') ? true : false),'route' => 'admin.dashboard','parameter' => '','path' => 'admin.dashboard','plus_icon' => '','icon' => 'fas fa-tachometer-alt']); ?>
                        <?php echo e(__('dashboard')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <!-- ======= Order ======== -->
                    <?php if(userCan('order.view')): ?>
                    <li class="nav-header">
                        <?php echo e(__('order')); ?>

                    </li>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => request()->routeIs('order.index') ? true : false,'route' => 'order.index','icon' => 'fas fa-money-bill','path' => 'order.index','plusIcon' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('order.index') ? true : false),'route' => 'order.index','icon' => 'fas fa-money-bill','path' => 'order.index','plus_icon' => '']); ?>
                        <?php echo e(__('order')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php endif; ?>

                    

                    <!-- ======= Company ======== -->
                    <?php if(userCan('company.view')): ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Request::is('admin/company*') ? true : false,'route' => 'company.index','path' => 'company.create','plusIcon' => 'fa fa-plus-circle','icon' => 'fas fa-building']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Request::is('admin/company*') ? true : false),'route' => 'company.index','path' => 'company.create','plus_icon' => 'fa fa-plus-circle','icon' => 'fas fa-building']); ?>
                        <?php echo e(__('company')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <!-- ======== Candidate ====== -->
                    <?php if(userCan('candidate.view')): ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('candidate.index') ? true : false,'route' => 'candidate.index','path' => 'candidate.create','plusIcon' => 'fa fa-plus-circle','icon' => 'fas fa-user']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('candidate.index') ? true : false),'route' => 'candidate.index','path' => 'candidate.create','plus_icon' => 'fa fa-plus-circle','icon' => 'fas fa-user']); ?>
                        <?php echo e(__('candidate')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <?php if(userCan('job.view') ||
                    userCan('job_category.view') ||
                    userCan('job_role.view') ||
                    userCan('plan.view') ||
                    userCan('industry_types.view') ||
                    userCan('professions.view')): ?>
                    <li class="nav-header text-uppercase"><?php echo e(__('manage_jobs')); ?></li>
                    <?php endif; ?>

                    <!-- ======= Job ======== -->
                    <?php if(userCan('job.view')): ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Request::is('admin/job/*') ||
                        Request::is('admin/job') ||
                        request()->routeIs('admin.job.edited.*')
                            ? true
                            : false,'route' => 'job.index','path' => 'job.create','plusIcon' => 'fa fa-plus-circle','icon' => 'fas fa-briefcase']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Request::is('admin/job/*') ||
                        Request::is('admin/job') ||
                        request()->routeIs('admin.job.edited.*')
                            ? true
                            : false),'route' => 'job.index','path' => 'job.create','plus_icon' => 'fa fa-plus-circle','icon' => 'fas fa-briefcase']); ?>
                        <?php echo e(__('jobs')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <!-- ======= Applied Job ======== -->
                    <?php if(userCan('job.view')): ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Request::is('admin/applied/jobs/*') ||
                        Request::is('admin/applied/jobs') ||
                        request()->routeIs('admin.applied.jobs*')
                            ? true
                            : false,'route' => 'applied.jobs','path' => 'job.create','plusIcon' => '','icon' => 'fas fa-check-circle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Request::is('admin/applied/jobs/*') ||
                        Request::is('admin/applied/jobs') ||
                        request()->routeIs('admin.applied.jobs*')
                            ? true
                            : false),'route' => 'applied.jobs','path' => 'job.create','plus_icon' => '','icon' => 'fas fa-check-circle']); ?>
                        <?php echo e(__('applied_jobs')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <!-- ======= Job Category ======== -->
                    <?php if(userCan('job_category.view')): ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Request::is('admin/jobCategory*') ? true : false,'route' => 'jobCategory.index','path' => 'jobCategory.index','plusIcon' => '','icon' => 'fas fa-th']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Request::is('admin/jobCategory*') ? true : false),'route' => 'jobCategory.index','path' => 'jobCategory.index','plus_icon' => '','icon' => 'fas fa-th']); ?>
                        <?php echo e(__('job_category')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <!-- ======= Job Role ======== -->
                    <?php if(userCan('job_role.view')): ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Request::is('admin/jobRole*') ? true : false,'route' => 'jobRole.index','path' => 'jobRole.index','plusIcon' => '','icon' => 'fas fa-user-tie']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Request::is('admin/jobRole*') ? true : false),'route' => 'jobRole.index','path' => 'jobRole.index','plus_icon' => '','icon' => 'fas fa-user-tie']); ?>
                        <?php echo e(__('job_role')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php endif; ?>

                    <?php if(moduleActive('CandidatePlan') && userCan('plan.view')): ?>
                    <?php if (isset($component)) { $__componentOriginal1ec1143df31c70ac0673c8a3095ec97b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1ec1143df31c70ac0673c8a3095ec97b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dropdown','data' => ['linkActive' => Route::is('module.candidateplan.*') ? true : false,'subLinkActive' => Route::is('module.candidateplan.*') ? true : false,'icon' => 'fas fa-credit-card']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('module.candidateplan.*') ? true : false),'subLinkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('module.candidateplan.*') ? true : false),'icon' => 'fas fa-credit-card']); ?>
                        <?php $__env->slot('title'); ?>
                        <?php echo e(__('candidate_price_plan')); ?>

                        <?php $__env->endSlot(); ?>
                        <ul class="nav nav-treeview">
                            <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('module.candidateplan.index') ? true : false,'route' => 'module.candidateplan.index','path' => 'module.candidateplan.create','plusIcon' => 'fa fa-plus-circle','icon' => 'fas fa-circle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('module.candidateplan.index') ? true : false),'route' => 'module.candidateplan.index','path' => 'module.candidateplan.create','plus_icon' => 'fa fa-plus-circle','icon' => 'fas fa-circle']); ?>
                                <?php echo e(__('plans')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('module.candidateplan.orders*') ? true : false,'route' => 'module.candidateplan.orders','path' => 'module.candidateplan.orders','plusIcon' => '','icon' => 'fas fa-circle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('module.candidateplan.orders*') ? true : false),'route' => 'module.candidateplan.orders','path' => 'module.candidateplan.orders','plus_icon' => '','icon' => 'fas fa-circle']); ?>
                                <?php echo e(__('candidate_orders')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                        </ul>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1ec1143df31c70ac0673c8a3095ec97b)): ?>
<?php $attributes = $__attributesOriginal1ec1143df31c70ac0673c8a3095ec97b; ?>
<?php unset($__attributesOriginal1ec1143df31c70ac0673c8a3095ec97b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1ec1143df31c70ac0673c8a3095ec97b)): ?>
<?php $component = $__componentOriginal1ec1143df31c70ac0673c8a3095ec97b; ?>
<?php unset($__componentOriginal1ec1143df31c70ac0673c8a3095ec97b); ?>
<?php endif; ?>
                    <?php endif; ?>

                    <?php if(Module::find('Plan')->isEnabled() && userCan('plan.view')): ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('module.plan.index') ||
                    Route::is('module.plan.create') ||
                    Route::is('module.plan.edit')
                        ? true
                        : false,'route' => 'module.plan.index','path' => 'module.plan.create','plusIcon' => 'fa fa-plus-circle','icon' => 'fas fa-credit-card']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('module.plan.index') ||
                    Route::is('module.plan.create') ||
                    Route::is('module.plan.edit')
                        ? true
                        : false),'route' => 'module.plan.index','path' => 'module.plan.create','plus_icon' => 'fa fa-plus-circle','icon' => 'fas fa-credit-card']); ?>
                        <?php echo e(__('company_price_plan')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <?php if(userCan('industry_types.view') || userCan('professions.view')): ?>
                    <?php if (isset($component)) { $__componentOriginal1ec1143df31c70ac0673c8a3095ec97b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1ec1143df31c70ac0673c8a3095ec97b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dropdown','data' => ['linkActive' => Request::is('admin/industryType*') ||
                        Request::is('admin/profession*') ||
                        Request::is('skill.*') ||
                        Request::routeIs('tags.*') ||
                        request()->routeIs('benefit.*') ||
                        request()->routeIs('admin.candidate.language.*') ||
                        Request::is('admin/skill*') ||
                        Request::is('admin/organizationType*')
                            ? true
                            : false,'subLinkActive' => Request::is('admin/industryType*') ||
                        Request::is('admin/profession*') ||
                        request()->routeIs('benefit.*') ||
                        request()->routeIs('tags.*') ||
                        request()->routeIs('admin.candidate.language.*') ||
                        Request::is('admin/skill*') ||
                        Request::is('admin/organizationType*')
                            ? true
                            : false,'icon' => 'fas fa-users-cog']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Request::is('admin/industryType*') ||
                        Request::is('admin/profession*') ||
                        Request::is('skill.*') ||
                        Request::routeIs('tags.*') ||
                        request()->routeIs('benefit.*') ||
                        request()->routeIs('admin.candidate.language.*') ||
                        Request::is('admin/skill*') ||
                        Request::is('admin/organizationType*')
                            ? true
                            : false),'subLinkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Request::is('admin/industryType*') ||
                        Request::is('admin/profession*') ||
                        request()->routeIs('benefit.*') ||
                        request()->routeIs('tags.*') ||
                        request()->routeIs('admin.candidate.language.*') ||
                        Request::is('admin/skill*') ||
                        Request::is('admin/organizationType*')
                            ? true
                            : false),'icon' => 'fas fa-users-cog']); ?>
                        <?php $__env->slot('title'); ?>
                        <?php echo e(__('attributes')); ?>

                        <?php $__env->endSlot(); ?>
                        <!-- ======= Industrytype ======== -->
                        <ul class="nav nav-treeview">
                            <?php if(userCan('industry_types.view')): ?>
                            <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Request::is('admin/industryType*') ? true : false,'route' => 'industryType.index','path' => 'industryType.index','plusIcon' => '','icon' => 'fas fa-industry']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Request::is('admin/industryType*') ? true : false),'route' => 'industryType.index','path' => 'industryType.index','plus_icon' => '','icon' => 'fas fa-industry']); ?>
                                <?php echo e(__('industry_type')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                            <?php endif; ?>

                            <!-- ======= professions ======== -->
                            <?php if(userCan('professions.view')): ?>
                            <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Request::is('admin/profession*') ? true : false,'route' => 'profession.index','path' => 'profession.index','plusIcon' => '','icon' => 'fas fa-id-card']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Request::is('admin/profession*') ? true : false),'route' => 'profession.index','path' => 'profession.index','plus_icon' => '','icon' => 'fas fa-id-card']); ?>
                                <?php echo e(__('professions')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                            <?php endif; ?>

                            <!-- ======= skills ======== -->
                            <?php if(userCan('skills.view')): ?>
                            <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => request()->routeIs('skill.*') ? true : false,'route' => 'skill.index','path' => 'skill.index','plusIcon' => '','icon' => 'fas fa-cog']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('skill.*') ? true : false),'route' => 'skill.index','path' => 'skill.index','plus_icon' => '','icon' => 'fas fa-cog']); ?>
                                <?php echo e(__('skills')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                            <?php endif; ?>
                            <!-- ======= tags ======== -->
                            <?php if(userCan('tags.view')): ?>
                            <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => request()->routeIs('tags.*') ? true : false,'route' => 'tags.index','path' => 'tags.index','plusIcon' => '','icon' => 'fas fa-tags']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('tags.*') ? true : false),'route' => 'tags.index','path' => 'tags.index','plus_icon' => '','icon' => 'fas fa-tags']); ?>
                                <?php echo e(__('tags')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                            <?php endif; ?>
                            <!-- ======= benefits ======== -->
                            <?php if(userCan('benefits.view')): ?>
                            <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => request()->routeIs('benefit.*') ? true : false,'route' => 'benefit.index','path' => 'benefit.index','plusIcon' => '','icon' => 'fas fa-bullseye']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('benefit.*') ? true : false),'route' => 'benefit.index','path' => 'benefit.index','plus_icon' => '','icon' => 'fas fa-bullseye']); ?>
                                <?php echo e(__('benefits')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                            <?php endif; ?>
                            <!-- ======= candidate language ======== -->
                            <?php if(userCan('candidate-language.view')): ?>
                            <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => request()->routeIs('admin.candidate.language.*') ? true : false,'route' => 'admin.candidate.language.index','path' => 'admin.candidate.language.index','plusIcon' => '','icon' => 'fas fa-language']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('admin.candidate.language.*') ? true : false),'route' => 'admin.candidate.language.index','path' => 'admin.candidate.language.index','plus_icon' => '','icon' => 'fas fa-language']); ?>
                                <?php echo e(__('language')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                            <?php endif; ?>

                            <!-- ======= organization_type ======== -->
                            <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Request::is('admin/organizationType*') ? true : false,'route' => 'organizationType.index','path' => 'organizationType.index','plusIcon' => '','icon' => 'fas fa-industry']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Request::is('admin/organizationType*') ? true : false),'route' => 'organizationType.index','path' => 'organizationType.index','plus_icon' => '','icon' => 'fas fa-industry']); ?>
                                <?php echo e(__('organization_type')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>

                            <!-- ======= salary_type ======== -->
                            <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Request::is('admin/salaryType*') ? true : false,'route' => 'salaryType.index','path' => 'salaryType.index','plusIcon' => '','icon' => 'fas fa-money-bill']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Request::is('admin/salaryType*') ? true : false),'route' => 'salaryType.index','path' => 'salaryType.index','plus_icon' => '','icon' => 'fas fa-money-bill']); ?>
                                <?php echo e(__('salary_type')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>

                            <!-- ======= education ======== -->
                            <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Request::is('admin/education*') ? true : false,'route' => 'education.index','path' => 'education.index','plusIcon' => '','icon' => 'fas fa-school']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Request::is('admin/education*') ? true : false),'route' => 'education.index','path' => 'education.index','plus_icon' => '','icon' => 'fas fa-school']); ?>
                                <?php echo e(__('education')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>

                            <!-- ======= experience ======== -->
                            <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Request::is('admin/experience*') ? true : false,'route' => 'experience.index','path' => 'experience.index','plusIcon' => '','icon' => 'fas fa-briefcase']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Request::is('admin/experience*') ? true : false),'route' => 'experience.index','path' => 'experience.index','plus_icon' => '','icon' => 'fas fa-briefcase']); ?>
                                <?php echo e(__('experience')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>

                            <!-- ======= team_size ======== -->
                            <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Request::is('admin/teamSize*') ? true : false,'route' => 'teamSize.index','path' => 'teamSize.index','plusIcon' => '','icon' => 'fas fa-users']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Request::is('admin/teamSize*') ? true : false),'route' => 'teamSize.index','path' => 'teamSize.index','plus_icon' => '','icon' => 'fas fa-users']); ?>
                                <?php echo e(__('team_size')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>

                            <!-- ======= job_type ======== -->
                            <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Request::is('admin/jobType*') ? true : false,'route' => 'jobType.index','path' => 'jobType.index','plusIcon' => '','icon' => 'fas fa-tasks']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Request::is('admin/jobType*') ? true : false),'route' => 'jobType.index','path' => 'jobType.index','plus_icon' => '','icon' => 'fas fa-tasks']); ?>
                                <?php echo e(__('job_type')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                        </ul>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1ec1143df31c70ac0673c8a3095ec97b)): ?>
<?php $attributes = $__attributesOriginal1ec1143df31c70ac0673c8a3095ec97b; ?>
<?php unset($__attributesOriginal1ec1143df31c70ac0673c8a3095ec97b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1ec1143df31c70ac0673c8a3095ec97b)): ?>
<?php $component = $__componentOriginal1ec1143df31c70ac0673c8a3095ec97b; ?>
<?php unset($__componentOriginal1ec1143df31c70ac0673c8a3095ec97b); ?>
<?php endif; ?>
                    <?php endif; ?>

                    <?php if(userCan('post.view') ||
                    userCan('country.view') ||
                    userCan('state.view') ||
                    userCan('city.view') ||
                    userCan('newsletter.view') ||
                    userCan('newsletter.sendmail') ||
                    userCan('contact.view') ||
                    userCan('testimonial.view') ||
                    userCan('admin.view')): ?>
                    <li class="nav-header text-uppercase"><?php echo e(__('others')); ?></li>
                    <?php endif; ?>
                    <!-- ======== Blog ====== -->
                    <?php if(Module::find('Blog')->isEnabled()): ?>
                    <?php if(userCan('post.view')): ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('module.blog.*') || Route::is('module.category.*') ? true : false,'route' => 'module.blog.index','parameter' => '','path' => 'module.blog.create','plusIcon' => 'fa fa-plus-circle','icon' => 'fas fa-blog']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('module.blog.*') || Route::is('module.category.*') ? true : false),'route' => 'module.blog.index','parameter' => '','path' => 'module.blog.create','plus_icon' => 'fa fa-plus-circle','icon' => 'fas fa-blog']); ?>
                        <?php echo e(__('blog')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>

                    <!--=========  Locations ========= -->
                    <?php if(Module::find('Location')->isEnabled()): ?>
                    <?php if(userCan('post.view')): ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('module.country.*') ? true : false,'route' => 'module.country.index','parameter' => '','path' => 'module.country.create','plusIcon' => 'fa fa-plus-circle','icon' => 'fas fa-map-marker']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('module.country.*') ? true : false),'route' => 'module.country.index','parameter' => '','path' => 'module.country.create','plus_icon' => 'fa fa-plus-circle','icon' => 'fas fa-map-marker']); ?>
                        <?php echo e(__('country')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>

                    <!--=========== News Letter ========= -->
                    <?php if(Module::find('Newsletter')->isEnabled()): ?>
                    <?php if(userCan('newsletter.view') || userCan('newsletter.sendmail')): ?>
                    <?php if (isset($component)) { $__componentOriginal1ec1143df31c70ac0673c8a3095ec97b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1ec1143df31c70ac0673c8a3095ec97b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dropdown','data' => ['linkActive' => Route::is('module.newsletter*') ? true : false,'subLinkActive' => Route::is('module.newsletter*') ? true : false,'icon' => 'nav-icon fas fa-envelope']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('module.newsletter*') ? true : false),'subLinkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('module.newsletter*') ? true : false),'icon' => 'nav-icon fas fa-envelope']); ?>
                        <?php $__env->slot('title'); ?>
                        <?php echo e(__('newsletter')); ?>

                        <?php $__env->endSlot(); ?>
                        <?php if(userCan('newsletter.view')): ?>
                        <ul class="nav nav-treeview">
                            <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('module.newsletter.index') ? true : false,'route' => 'module.newsletter.index','path' => 'module.newsletter.index','plusIcon' => '','icon' => 'fas fa-circle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('module.newsletter.index') ? true : false),'route' => 'module.newsletter.index','path' => 'module.newsletter.index','plus_icon' => '','icon' => 'fas fa-circle']); ?>
                                <?php echo e(__('email_list')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                        </ul>
                        <?php endif; ?>
                        <?php if(userCan('newsletter.sendmail')): ?>
                        <ul class="nav nav-treeview">
                            <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('module.newsletter.send_mail') ? true : false,'route' => 'module.newsletter.send_mail','path' => 'module.newsletter.send_mail','plusIcon' => '','icon' => 'fas fa-circle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('module.newsletter.send_mail') ? true : false),'route' => 'module.newsletter.send_mail','path' => 'module.newsletter.send_mail','plus_icon' => '','icon' => 'fas fa-circle']); ?>
                                <?php echo e(__('send_mail')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                        </ul>
                        <?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1ec1143df31c70ac0673c8a3095ec97b)): ?>
<?php $attributes = $__attributesOriginal1ec1143df31c70ac0673c8a3095ec97b; ?>
<?php unset($__attributesOriginal1ec1143df31c70ac0673c8a3095ec97b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1ec1143df31c70ac0673c8a3095ec97b)): ?>
<?php $component = $__componentOriginal1ec1143df31c70ac0673c8a3095ec97b; ?>
<?php unset($__componentOriginal1ec1143df31c70ac0673c8a3095ec97b); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>

                    <?php if(Module::find('Testimonial')->isEnabled() && userCan('testimonial.view')): ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('module.testimonial.index') ||
                        Route::is('module.testimonial.create') ||
                        Route::is('module.testimonial.edit')
                            ? true
                            : false,'route' => 'module.testimonial.index','path' => 'module.testimonial.create','plusIcon' => 'fa fa-plus-circle','icon' => 'fas fa-star']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('module.testimonial.index') ||
                        Route::is('module.testimonial.create') ||
                        Route::is('module.testimonial.edit')
                            ? true
                            : false),'route' => 'module.testimonial.index','path' => 'module.testimonial.create','plus_icon' => 'fa fa-plus-circle','icon' => 'fas fa-star']); ?>
                        <?php echo e(__('testimonial')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <?php if(userCan('faq.view')): ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('module.faq.index') ||
                        Route::is('module.faq.create') ||
                        Route::is('module.faq.edit') ||
                        Route::is('module.faq.category.index') ||
                        Route::is('module.faq.category.create') ||
                        Route::is('module.faq.category.edit')
                            ? true
                            : false,'route' => 'module.faq.index','path' => 'module.faq.create','plusIcon' => 'fa fa-plus-circle','icon' => 'fas fa-question-circle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('module.faq.index') ||
                        Route::is('module.faq.create') ||
                        Route::is('module.faq.edit') ||
                        Route::is('module.faq.category.index') ||
                        Route::is('module.faq.category.create') ||
                        Route::is('module.faq.category.edit')
                            ? true
                            : false),'route' => 'module.faq.index','path' => 'module.faq.create','plus_icon' => 'fa fa-plus-circle','icon' => 'fas fa-question-circle']); ?>
                        <?php echo e(__('faq')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php endif; ?>

                    <!--=========== User Role And Permission ========= -->
                    <?php if(userCan('admin.view')): ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('user.*') ? true : false,'route' => 'user.index','path' => 'user.create','plusIcon' => 'fa fa-plus-circle','parameter' => '','icon' => 'fas fa-users']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('user.*') ? true : false),'route' => 'user.index','path' => 'user.create','plus_icon' => 'fa fa-plus-circle','parameter' => '','icon' => 'fas fa-users']); ?>
                        <?php echo e(__('user_role_manage')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <!--=========== User Role And Permission ========= -->
                    
                    
                    
                </ul>
            </nav>
            <!-- Sidebar Menu -->
            <nav class="mt-2 nav-footer pt-3 border-top border-secondary">
                <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a target="_blank" href="/" class="nav-link bg-primary text-light">
                            <i class="nav-icon fas fa-globe"></i>
                            <p><?php echo e(__('visit_website')); ?></p>
                        </a>
                    </li>
                    <?php if(userCan('setting.view')): ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => request()->is('admin/settings/*') ? true : false,'route' => 'settings.general','path' => 'settings.general','plusIcon' => '','icon' => 'fas fa-cog']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('admin/settings/*') ? true : false),'route' => 'settings.general','path' => 'settings.general','plus_icon' => '','icon' => 'fas fa-cog']); ?>
                        <?php echo e(__('settings')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('modules.index') ? true : false,'route' => 'modules.index','path' => 'modules.index','plusIcon' => '','icon' => 'fas fa-puzzle-piece']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('modules.index') ? true : false),'route' => 'modules.index','path' => 'modules.index','plus_icon' => '','icon' => 'fas fa-puzzle-piece']); ?>
                        <?php echo e(__('module_management')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p><?php echo e(__('log_out')); ?> </p>
                        </a>
                        <form id="logout-form" action="<?php echo e(route('admin.logout')); ?>" method="POST"
                            class="d-none invisible">
                            <?php echo csrf_field(); ?>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH /Volumes/OFFICIAL/DEVSFLOCK/Proskill Job/localproskill/resources/views/backend/layouts/partials/default-sidebar.blade.php ENDPATH**/ ?>