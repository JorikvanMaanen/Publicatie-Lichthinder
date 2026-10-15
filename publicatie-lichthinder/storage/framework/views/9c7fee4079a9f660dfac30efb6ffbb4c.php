<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'sidebar' => false,
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
    'sidebar' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sidebar): ?>
    <?php if (!function_exists('_3992be2dee7762831357001520a4f536')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/brand.blade.php', $__blaze->compiledPath.'/3992be2dee7762831357001520a4f536.php'); require $__blaze->compiledPath.'/3992be2dee7762831357001520a4f536.php'; } ?>
<?php if (isset($__slots3992be2dee7762831357001520a4f536)) { $__slotsStack3992be2dee7762831357001520a4f536[] = $__slots3992be2dee7762831357001520a4f536; } ?>
<?php if (isset($__attrs3992be2dee7762831357001520a4f536)) { $__attrsStack3992be2dee7762831357001520a4f536[] = $__attrs3992be2dee7762831357001520a4f536; } ?>
<?php $__attrs3992be2dee7762831357001520a4f536 = ['name' => config('app.name', 'Laravel'),'attributes' => $attributes]; ?>
<?php $__slots3992be2dee7762831357001520a4f536 = []; ?>
<?php $__blaze->pushData($__attrs3992be2dee7762831357001520a4f536); ?>
<?php ob_start(); ?>
         <?php ob_start(); ?>
            <?php if (isset($component)) { $__componentOriginal159d6670770cb479b1921cea6416c26c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal159d6670770cb479b1921cea6416c26c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-logo-icon','data' => ['class' => 'size-7 fill-current text-white dark:text-black']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-logo-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-7 fill-current text-white dark:text-black']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $attributes = $__attributesOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__attributesOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $component = $__componentOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__componentOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
        <?php $__slots3992be2dee7762831357001520a4f536['logo'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), ['class' => 'flex aspect-square size-8 items-center justify-center rounded-md']); ?>
    <?php $__slots3992be2dee7762831357001520a4f536['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots3992be2dee7762831357001520a4f536); ?>
<?php _3992be2dee7762831357001520a4f536($__blaze, $__attrs3992be2dee7762831357001520a4f536, $__slots3992be2dee7762831357001520a4f536, ['name', 'attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack3992be2dee7762831357001520a4f536)) { $__slots3992be2dee7762831357001520a4f536 = array_pop($__slotsStack3992be2dee7762831357001520a4f536); } ?>
<?php if (! empty($__attrsStack3992be2dee7762831357001520a4f536)) { $__attrs3992be2dee7762831357001520a4f536 = array_pop($__attrsStack3992be2dee7762831357001520a4f536); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php if (!function_exists('_708c34e7b9c063d4936441aebcc44553')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/brand.blade.php', $__blaze->compiledPath.'/708c34e7b9c063d4936441aebcc44553.php'); require $__blaze->compiledPath.'/708c34e7b9c063d4936441aebcc44553.php'; } ?>
<?php if (isset($__slots708c34e7b9c063d4936441aebcc44553)) { $__slotsStack708c34e7b9c063d4936441aebcc44553[] = $__slots708c34e7b9c063d4936441aebcc44553; } ?>
<?php if (isset($__attrs708c34e7b9c063d4936441aebcc44553)) { $__attrsStack708c34e7b9c063d4936441aebcc44553[] = $__attrs708c34e7b9c063d4936441aebcc44553; } ?>
<?php $__attrs708c34e7b9c063d4936441aebcc44553 = ['name' => config('app.name', 'Laravel'),'attributes' => $attributes]; ?>
<?php $__slots708c34e7b9c063d4936441aebcc44553 = []; ?>
<?php $__blaze->pushData($__attrs708c34e7b9c063d4936441aebcc44553); ?>
<?php ob_start(); ?>
         <?php ob_start(); ?>
            <?php if (isset($component)) { $__componentOriginal159d6670770cb479b1921cea6416c26c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal159d6670770cb479b1921cea6416c26c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-logo-icon','data' => ['class' => 'size-5 fill-current text-white dark:text-black']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-logo-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5 fill-current text-white dark:text-black']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $attributes = $__attributesOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__attributesOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $component = $__componentOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__componentOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
        <?php $__slots708c34e7b9c063d4936441aebcc44553['logo'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), ['class' => 'flex aspect-square size-8 items-center justify-center rounded-md bg-accent-content text-accent-foreground']); ?>
    <?php $__slots708c34e7b9c063d4936441aebcc44553['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots708c34e7b9c063d4936441aebcc44553); ?>
<?php _708c34e7b9c063d4936441aebcc44553($__blaze, $__attrs708c34e7b9c063d4936441aebcc44553, $__slots708c34e7b9c063d4936441aebcc44553, ['name', 'attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack708c34e7b9c063d4936441aebcc44553)) { $__slots708c34e7b9c063d4936441aebcc44553 = array_pop($__slotsStack708c34e7b9c063d4936441aebcc44553); } ?>
<?php if (! empty($__attrsStack708c34e7b9c063d4936441aebcc44553)) { $__attrs708c34e7b9c063d4936441aebcc44553 = array_pop($__attrsStack708c34e7b9c063d4936441aebcc44553); } ?>
<?php $__blaze->popData(); ?>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\resources\views/components/app-logo.blade.php ENDPATH**/ ?>