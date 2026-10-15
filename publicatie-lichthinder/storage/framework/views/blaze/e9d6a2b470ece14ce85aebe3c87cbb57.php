<?php
if (!function_exists('__e9d6a2b470ece14ce85aebe3c87cbb57')):
function __e9d6a2b470ece14ce85aebe3c87cbb57($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php
$classes = Flux::classes()
    ->add('shrink-0 size-[1.125rem] rounded-[.3rem] flex justify-center items-center')
    ->add('text-sm text-zinc-700 dark:text-zinc-800')
    ->add('shadow-xs [ui-checkbox[disabled]_&]:opacity-75 [ui-checkbox[data-checked][disabled]_&]:opacity-50 [ui-checkbox[disabled]_&]:shadow-none [ui-checkbox[data-checked]_&]:shadow-none [ui-checkbox[data-indeterminate]_&]:shadow-none')
    ->add('[ui-checkbox[data-checked]:not([data-indeterminate])_&>svg:first-child]:block [ui-checkbox[data-indeterminate]_&>svg:last-child]:block')
    ->add([
        'border',
        'border-zinc-300 dark:border-white/10',
        '[ui-checkbox[disabled]_&]:border-zinc-200 dark:[ui-checkbox[disabled]_&]:border-white/5',
        '[ui-checkbox[data-checked]_&]:border-transparent [ui-checkbox[data-indeterminate]_&]:border-transparent',
        '[ui-checkbox[disabled][data-checked]_&]:border-transparent [ui-checkbox[disabled][data-indeterminate]_&]:border-transparent',
        '[print-color-adjust:exact]',
    ])
    ->add([
        'bg-white dark:bg-white/10',
        '[ui-checkbox[data-checked]_&]:bg-[var(--color-accent)]',
        'hover:[ui-checkbox[data-checked]_&]:bg-(--color-accent)',
        'focus:[ui-checkbox[data-checked]_&]:bg-(--color-accent)',
        '[ui-checkbox[data-indeterminate]_&]:bg-[var(--color-accent)]',
        'hover:[ui-checkbox[data-indeterminate]_&]:bg-(--color-accent)',
        'focus:[ui-checkbox[data-indeterminate]_&]:bg-(--color-accent)',
    ])
    ;
?>

<div <?php echo e($attributes->class($classes)); ?> data-flux-checkbox-indicator>
    <?php if (!function_exists('__966ee7b0e32dab6553e81c063fb311e7')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/check.blade.php', $__blaze->compiledPath.'/966ee7b0e32dab6553e81c063fb311e7.php'); require $__blaze->compiledPath.'/966ee7b0e32dab6553e81c063fb311e7.php'; } ?>
<?php $__blaze->pushData(['variant' => 'micro','class' => 'hidden text-[var(--color-accent-foreground)]']); ?>
<?php __966ee7b0e32dab6553e81c063fb311e7($__blaze, ['variant' => 'micro','class' => 'hidden text-[var(--color-accent-foreground)]'], [], [], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
    <?php if (!function_exists('__e592432f25568aaae52f799982ac8583')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/minus.blade.php', $__blaze->compiledPath.'/e592432f25568aaae52f799982ac8583.php'); require $__blaze->compiledPath.'/e592432f25568aaae52f799982ac8583.php'; } ?>
<?php $__blaze->pushData(['variant' => 'micro','class' => 'hidden text-[var(--color-accent-foreground)]']); ?>
<?php __e592432f25568aaae52f799982ac8583($__blaze, ['variant' => 'micro','class' => 'hidden text-[var(--color-accent-foreground)]'], [], [], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
</div>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/checkbox/indicator.blade.php ENDPATH**/ ?>