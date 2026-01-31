<?php
    $user = auth()->user();
    $languages = loadLanguage();
    $current_language = currentLanguage() ? currentLanguage() : loadDefaultLanguage();
?>

<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
        <i class="flag-icon <?php echo e($current_language?->icon); ?>"></i>
        <span class="text-uppercase"><?php echo e($current_language->code); ?></span>
    </a>
    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a class="dropdown-item <?php echo e($current_language->code === $lang->code ? 'active' : ''); ?>"
                href="<?php echo e(route('changeLanguage', $lang->code)); ?>">
                <?php echo e($lang->name); ?>

            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link d-flex justify-content-center align-items-center" data-widget="fullscreen" href="#"
        role="button">
        <i class="fas fa-expand-arrows-alt"></i>
    </a>
</li>
<li class="nav-item">
    <form action="<?php echo e(route('settings.mode.update')); ?>" method="post" id="mode_form">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <?php if($setting->dark_mode): ?>
            <input type="hidden" name="dark_mode" value="0">
        <?php else: ?>
            <input type="hidden" name="dark_mode" value="1">
        <?php endif; ?>
    </form>
    <a onclick="$('#mode_form').submit()" class="nav-link d-flex justify-content-center align-items-center"
        href="#" role="button">
        <?php if($setting->dark_mode): ?>
            <i class="fas fa-sun"></i>
        <?php else: ?>
            <i class="fas fa-moon"></i>
        <?php endif; ?>
    </a>
</li>
<li class="nav-item dropdown" onclick="ReadNotification()">
    <a class="nav-link d-flex justify-content-center align-items-center" data-toggle="dropdown" href="#"
        aria-expanded="true">
        <i class="fas fa-bell"></i>
        <?php
            $adminUnNotificationsCount = adminUnNotifications();
        ?>
        <?php if($adminUnNotificationsCount != 0): ?>
            <span class="badge badge-warning navbar-badge" id="unNotifications">
                <?php echo e($adminUnNotificationsCount); ?>

            </span>
        <?php endif; ?>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" id="notification-panel">
        <span class="dropdown-item dropdown-header text-md card-header"><?php echo e(__('notifications')); ?></span>
        <?php
            $adminNotifications = adminNotifications();
        ?>
        <?php if($adminNotifications->count() > 0): ?>
            <?php $__currentLoopData = $adminNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="dropdown-divider"></div>
                <a href="<?php echo e($notification->data ? $notification->data['url'] : ''); ?>" class="dropdown-item word-break">
                    <p>
                        <?php if($notification->type == 'App\Notifications\Admin\NewJobAvailableNotification'): ?>
                            <i class="fas fa-briefcase"></i>
                        <?php elseif($notification->type == 'App\Notifications\Admin\NewPlanPurchaseNotification'): ?>
                            <i class="fas fa-credit-card"></i>
                        <?php elseif($notification->type == 'App\Notifications\Admin\NewUserRegisteredNotification'): ?>
                            <i class="fas fa-user"></i>
                        <?php endif; ?>
                        &nbsp;
                        <?php echo e($notification->data ? $notification->data['title'] : '-'); ?>

                    </p>
                    <span class="float-right text-muted text-sm">
                        <?php echo e($notification->created_at->diffForHumans()); ?>

                    </span>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <span class="d-flex justify-content-center mb-2 p-2 text-sm">
                <?php echo e(__('no_notification')); ?>

            </span>
        <?php endif; ?>
        <?php if($adminNotifications->count() > 6): ?>
            <div class="dropdown-divider"></div>
            <a href="<?php echo e(route('admin.all.notification')); ?>"
                class="dropdown-item dropdown-footer"><?php echo e(__('see_all_notifications')); ?>

            </a>
        <?php endif; ?>
    </div>
</li>
<li class="nav-item dropdown user-menu">
    <a href="<?php echo e(route('profile')); ?>" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <img src="<?php echo e(asset($user->image_url)); ?>" class="user-image img-circle elevation-2" alt="User Image">
        <span class="d-none d-md-inline"><?php echo e($user->name); ?></span>
    </a>
    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right rounded border-0">
        <!-- User image -->
        <li class="user-header bg-primary rounded-top">
            <img src="<?php echo e($user->image_url); ?>" class="user-image img-circle elevation-2"
                alt="<?php echo e(__('user_image')); ?>">
            <p>
                <?php echo e($user->name); ?> -
                <?php $__currentLoopData = $user->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    (<span><?php echo e(ucwords($role)); ?></span>)
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <small><?php echo e(__('member_since')); ?> <?php echo e($user->created_at->format('M d, Y')); ?></small>
            </p>
        </li>
        <!-- Menu Footer-->
        <li class="user-footer border-bottom d-flex">
            <a href="<?php echo e(route('profile')); ?>" class="btn btn-default"><?php echo e(__('profile')); ?></a>
            <a href="javascript:void(0)"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                class="btn btn-default ml-auto"><?php echo e(__('log_out')); ?></a>
            <form id="logout-form" action="<?php echo e(route('admin.logout')); ?>" method="POST" class="d-none invisible">
                <?php echo csrf_field(); ?>
            </form>
        </li>
    </ul>
</li>
<?php /**PATH /Volumes/OFFICIAL/DEVSFLOCK/Proskill Job/localproskill/resources/views/backend/layouts/partials/top-right-nav.blade.php ENDPATH**/ ?>