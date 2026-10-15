<?php
if (!function_exists('__c4dbcaaf827db60d508b19bcc989ebb4')):
function __c4dbcaaf827db60d508b19bcc989ebb4($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php
$__defaults = [
    'name' => $attributes->whereStartsWith('wire:model')->first(),
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
unset($__defaults);
?>

<?php
$classes = Flux::classes()
    ->add('w-full flex')
    ->add('*:data-flux-input:grow')
    ->add([
        // With the external borders, let's always make sure the first and last children have outside borders.
        // For internal borders, we will ensure that all left borders are removed, but the right borders remain.
        // But when there is a input groupsuffix, then there should be no right internal border.
        // That way we shouldn't ever have a double border...

        // All inputs borders...
        '[&>[data-flux-input]:last-child:not(:first-child)>[data-flux-group-target]:not([data-invalid])]:border-s-0',
        '[&>[data-flux-input]:not(:first-child):not(:last-child)>[data-flux-group-target]:not([data-invalid])]:border-s-0',
        '[&>[data-flux-input]:has(+[data-flux-input-group-suffix])>[data-flux-group-target]:not([data-invalid])]:border-e-0',

        // Selects and date pickers borders...
        '[&>*:last-child:not(:first-child)>[data-flux-group-target]:not([data-invalid])]:border-s-0',
        '[&>*:not(:first-child):not(:last-child)>[data-flux-group-target]:not([data-invalid])]:border-s-0',
        '[&>*:has(+[data-flux-input-group-suffix])>[data-flux-group-target]:not([data-invalid])]:border-e-0',

        // Buttons borders...
        '[&>[data-flux-group-target]:last-child:not(:first-child)]:border-s-0',
        '[&>[data-flux-group-target]:not(:first-child):not(:last-child)]:border-s-0',
        '[&>[data-flux-group-target]:has(+[data-flux-input-group-suffix])]:border-e-0',

        // "Weld" the borders of inputs together by overriding their border radiuses...
        '[&>[data-flux-group-target]:not(:first-child):not(:last-child)]:rounded-none',
        '[&>[data-flux-group-target]:first-child:not(:last-child)]:rounded-e-none',
        '[&>[data-flux-group-target]:last-child:not(:first-child)]:rounded-s-none',

        // "Weld" borders for sub-children of group targets (button element inside ui-select element, etc.)...
        '[&>*:not(:first-child):not(:last-child):not(:only-child)>[data-flux-group-target]]:rounded-none',
        '[&>*:first-child:not(:last-child)>[data-flux-group-target]]:rounded-e-none',
        '[&>*:last-child:not(:first-child)>[data-flux-group-target]]:rounded-s-none',

        // "Weld" borders for sub-sub-children of group targets (input element inside div inside ui-select element (combobox))...
        '[&>*:not(:first-child):not(:last-child):not(:only-child)>[data-flux-input]>[data-flux-group-target]]:rounded-none',
        '[&>*:first-child:not(:last-child)>[data-flux-input]>[data-flux-group-target]]:rounded-e-none',
        '[&>*:last-child:not(:first-child)>[data-flux-input]>[data-flux-group-target]]:rounded-s-none',

        // "Weld" borders for sub-children wrapped in tooltips or time picker triggers...
        '[&>*:not(:first-child):not(:last-child):not(:only-child)>:is([data-flux-tooltip],ui-time-picker-trigger)>[data-flux-group-target]]:rounded-none',
        '[&>*:first-child:not(:last-child)>:is([data-flux-tooltip],ui-time-picker-trigger)>[data-flux-group-target]]:rounded-e-none',
        '[&>*:last-child:not(:first-child)>:is([data-flux-tooltip],ui-time-picker-trigger)>[data-flux-group-target]]:rounded-s-none',

        // Borders for sub-children wrapped in tooltips or time picker triggers...
        '[&>*:last-child:not(:first-child)>:is([data-flux-tooltip],ui-time-picker-trigger)>[data-flux-group-target]:not([data-invalid])]:border-s-0',
        '[&>*:not(:first-child):not(:last-child)>:is([data-flux-tooltip],ui-time-picker-trigger)>[data-flux-group-target]:not([data-invalid])]:border-s-0',
        '[&>*:has(+[data-flux-input-group-suffix])>:is([data-flux-tooltip],ui-time-picker-trigger)>[data-flux-group-target]:not([data-invalid])]:border-e-0',
    ])
    ;
?>

<?php if (!function_exists('__99164b0f8c82484d1f0a9c311171d167')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php', $__blaze->compiledPath.'/99164b0f8c82484d1f0a9c311171d167.php'); require $__blaze->compiledPath.'/99164b0f8c82484d1f0a9c311171d167.php'; } ?>
<?php if (isset($__slots99164b0f8c82484d1f0a9c311171d167)) { $__slotsStack99164b0f8c82484d1f0a9c311171d167[] = $__slots99164b0f8c82484d1f0a9c311171d167; } ?>
<?php if (isset($__attrs99164b0f8c82484d1f0a9c311171d167)) { $__attrsStack99164b0f8c82484d1f0a9c311171d167[] = $__attrs99164b0f8c82484d1f0a9c311171d167; } ?>
<?php $__attrs99164b0f8c82484d1f0a9c311171d167 = ['attributes' => $attributes,'name' => $name]; ?>
<?php $__slots99164b0f8c82484d1f0a9c311171d167 = []; ?>
<?php $__blaze->pushData($__attrs99164b0f8c82484d1f0a9c311171d167); ?>
<?php ob_start(); ?>
    <div <?php echo e($attributes->class($classes)); ?> data-flux-input-group>
        <?php echo e($slot); ?>

    </div>
<?php $__slots99164b0f8c82484d1f0a9c311171d167['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots99164b0f8c82484d1f0a9c311171d167); ?>
<?php __99164b0f8c82484d1f0a9c311171d167($__blaze, $__attrs99164b0f8c82484d1f0a9c311171d167, $__slots99164b0f8c82484d1f0a9c311171d167, ['attributes', 'name'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack99164b0f8c82484d1f0a9c311171d167)) { $__slots99164b0f8c82484d1f0a9c311171d167 = array_pop($__slotsStack99164b0f8c82484d1f0a9c311171d167); } ?>
<?php if (! empty($__attrsStack99164b0f8c82484d1f0a9c311171d167)) { $__attrs99164b0f8c82484d1f0a9c311171d167 = array_pop($__attrsStack99164b0f8c82484d1f0a9c311171d167); } ?>
<?php $__blaze->popData(); ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/input/group/index.blade.php ENDPATH**/ ?>