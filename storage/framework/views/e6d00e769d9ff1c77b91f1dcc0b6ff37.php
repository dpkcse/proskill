<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['linkActive', 'route', 'icon', 'path', 'plus_icon']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['linkActive', 'route', 'icon', 'path', 'plus_icon']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<li class="nav-item hover-icon">
    <a href="<?php echo e(route($route)); ?>" class="nav-link <?php echo e($linkActive ? 'active' : ''); ?>">
        <i class="nav-icon <?php echo e($icon); ?>"></i>
        <p><?php echo e($slot); ?></p>
    </a>
    <a href="<?php echo e(route($path)); ?>">
        <i class="<?php echo e($plus_icon); ?> right ico" aria-hidden="true"></i>
    </a>
</li>
<?php /**PATH /Volumes/OFFICIAL/DEVSFLOCK/Proskill Job/localproskill/resources/views/components/admin/sidebar-list.blade.php ENDPATH**/ ?>