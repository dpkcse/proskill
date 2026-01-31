<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['linkActive', 'subLinkActive', 'icon']));

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

foreach (array_filter((['linkActive', 'subLinkActive', 'icon']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<li class="nav-item has-treeview <?php echo e($linkActive ? 'menu-open' : ''); ?>">
    <a href="javascript:void(0)" class="nav-link <?php echo e($subLinkActive ? 'active' : ''); ?>">
        <i class="nav-icon <?php echo e($icon); ?>"></i>
        <p><?php echo e($title); ?> <i class="right fas fa-angle-left"></i></p>
    </a>
    <?php echo e($slot); ?>

</li>
<?php /**PATH /Volumes/OFFICIAL/DEVSFLOCK/Proskill Job/localproskill/resources/views/components/admin/sidebar-dropdown.blade.php ENDPATH**/ ?>