<?php
if (!function_exists('_7d6f7861c2ffb61ea1606fd529d83a5e')):
function _7d6f7861c2ffb61ea1606fd529d83a5e($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php
$__defaults = [
    'name' => null,
    'align' => 'right',
    'checked' => null
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$align ??= $attributes['align'] ?? $__defaults['align']; unset($attributes['align']);
$checked ??= $attributes['checked'] ?? $__defaults['checked']; unset($attributes['checked']);
unset($__defaults);
?>

<?php
// We only want to show the name attribute it has been set manually
// but not if it has been set from the `wire:model` attribute...
$showName = isset($name);
if (! isset($name)) {
    $name = $attributes->whereStartsWith('wire:model')->first();
}

$classes = Flux::classes()
    ->add('group h-5 w-8 min-w-8 relative inline-flex items-center outline-offset-2')
    ->add('rounded-full')
    ->add('transition')
    ->add('bg-zinc-800/15 [&[disabled]]:opacity-50 dark:bg-transparent dark:border dark:border-white/20 dark:[&[disabled]]:border-white/10')
    ->add('data-loading:opacity-50 data-loading:pointer-events-none dark:data-loading:border-white/10')
    ->add('[print-color-adjust:exact]')
    ->add([
        'data-checked:bg-(--color-accent)',
        'data-checked:border-0',
    ])
    ;

$indicatorClasses = Flux::classes()
    ->add('size-3.5')
    ->add('rounded-full')
    ->add('transition translate-x-[0.1875rem] dark:translate-x-[0.125rem] rtl:-translate-x-[0.1875rem] dark:rtl:-translate-x-[0.125rem]')
    ->add('bg-white')
    ->add([
        'group-data-checked:translate-x-[0.9375rem] rtl:group-data-checked:-translate-x-[0.9375rem]',
        // We have to add the dark variant of the `translate-x-[0.9375rem]` to ensure that if `.dark` is added to an element mid way
        // down the DOM instead of on the root HTML element, that the above `dark:translate-x-[0.125rem]` doesn't over ride it...
        'dark:group-data-checked:translate-x-[0.9375rem] dark:rtl:group-data-checked:-translate-x-[0.9375rem]',
        'group-data-checked:bg-(--color-accent-foreground)',
    ]);
?>

<?php if ($align === 'left' || $align === 'start'): ?>
    <?php if (!function_exists('_039fbfafb86cae83bddafd9d09fc1316')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/with-inline-field.blade.php', $__blaze->compiledPath.'/039fbfafb86cae83bddafd9d09fc1316.php'); require $__blaze->compiledPath.'/039fbfafb86cae83bddafd9d09fc1316.php'; } ?>
<?php if (isset($__slots039fbfafb86cae83bddafd9d09fc1316)) { $__slotsStack039fbfafb86cae83bddafd9d09fc1316[] = $__slots039fbfafb86cae83bddafd9d09fc1316; } ?>
<?php if (isset($__attrs039fbfafb86cae83bddafd9d09fc1316)) { $__attrsStack039fbfafb86cae83bddafd9d09fc1316[] = $__attrs039fbfafb86cae83bddafd9d09fc1316; } ?>
<?php $__attrs039fbfafb86cae83bddafd9d09fc1316 = ['attributes' => $attributes]; ?>
<?php $__slots039fbfafb86cae83bddafd9d09fc1316 = []; ?>
<?php $__blaze->pushData($__attrs039fbfafb86cae83bddafd9d09fc1316); ?>
<?php ob_start(); ?>
        <ui-switch <?php echo e($attributes->class($classes)); ?> <?php if($showName): ?> name="<?php echo e($name); ?>" <?php endif; ?> <?php if($checked): ?> checked data-checked <?php endif; ?> data-flux-control data-flux-switch>
            <span class="<?php echo e(\Illuminate\Support\Arr::toCssClasses($indicatorClasses)); ?>"></span>
        </ui-switch>
    <?php $__slots039fbfafb86cae83bddafd9d09fc1316['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots039fbfafb86cae83bddafd9d09fc1316); ?>
<?php _039fbfafb86cae83bddafd9d09fc1316($__blaze, $__attrs039fbfafb86cae83bddafd9d09fc1316, $__slots039fbfafb86cae83bddafd9d09fc1316, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack039fbfafb86cae83bddafd9d09fc1316)) { $__slots039fbfafb86cae83bddafd9d09fc1316 = array_pop($__slotsStack039fbfafb86cae83bddafd9d09fc1316); } ?>
<?php if (! empty($__attrsStack039fbfafb86cae83bddafd9d09fc1316)) { $__attrs039fbfafb86cae83bddafd9d09fc1316 = array_pop($__attrsStack039fbfafb86cae83bddafd9d09fc1316); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php if (!function_exists('_500b0e40554b47cdf53886cd92fe41b5')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/with-reversed-inline-field.blade.php', $__blaze->compiledPath.'/500b0e40554b47cdf53886cd92fe41b5.php'); require $__blaze->compiledPath.'/500b0e40554b47cdf53886cd92fe41b5.php'; } ?>
<?php if (isset($__slots500b0e40554b47cdf53886cd92fe41b5)) { $__slotsStack500b0e40554b47cdf53886cd92fe41b5[] = $__slots500b0e40554b47cdf53886cd92fe41b5; } ?>
<?php if (isset($__attrs500b0e40554b47cdf53886cd92fe41b5)) { $__attrsStack500b0e40554b47cdf53886cd92fe41b5[] = $__attrs500b0e40554b47cdf53886cd92fe41b5; } ?>
<?php $__attrs500b0e40554b47cdf53886cd92fe41b5 = ['attributes' => $attributes]; ?>
<?php $__slots500b0e40554b47cdf53886cd92fe41b5 = []; ?>
<?php $__blaze->pushData($__attrs500b0e40554b47cdf53886cd92fe41b5); ?>
<?php ob_start(); ?>
        <ui-switch <?php echo e($attributes->class($classes)); ?> <?php if($showName): ?> name="<?php echo e($name); ?>" <?php endif; ?> <?php if($checked): ?> checked data-checked <?php endif; ?> data-flux-control data-flux-switch>
            <span class="<?php echo e(\Illuminate\Support\Arr::toCssClasses($indicatorClasses)); ?>"></span>
        </ui-switch>
    <?php $__slots500b0e40554b47cdf53886cd92fe41b5['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots500b0e40554b47cdf53886cd92fe41b5); ?>
<?php _500b0e40554b47cdf53886cd92fe41b5($__blaze, $__attrs500b0e40554b47cdf53886cd92fe41b5, $__slots500b0e40554b47cdf53886cd92fe41b5, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack500b0e40554b47cdf53886cd92fe41b5)) { $__slots500b0e40554b47cdf53886cd92fe41b5 = array_pop($__slotsStack500b0e40554b47cdf53886cd92fe41b5); } ?>
<?php if (! empty($__attrsStack500b0e40554b47cdf53886cd92fe41b5)) { $__attrs500b0e40554b47cdf53886cd92fe41b5 = array_pop($__attrsStack500b0e40554b47cdf53886cd92fe41b5); } ?>
<?php $__blaze->popData(); ?>
<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\stubs\resources\views\flux\switch.blade.php ENDPATH**/ ?>