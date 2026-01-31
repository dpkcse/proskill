<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'class' => 'class',
    'name' => 'name',
    'for' => 'for',
    'required' => true,
]));

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

foreach (array_filter(([
    'class' => 'class',
    'name' => 'name',
    'for' => 'for',
    'required' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<label class="<?php echo e($class); ?> mb-2" for="<?php echo e($for ? $for : $name); ?>">
    <?php echo e(__($name)); ?>


    <?php if($required): ?>
        <span class="form-label-required text-danger">*</span>
    <?php endif; ?>

    <?php echo e($slot); ?>

</label>
<?php /**PATH /Volumes/OFFICIAL/DEVSFLOCK/Proskill Job/localproskill/resources/views/components/forms/label.blade.php ENDPATH**/ ?>