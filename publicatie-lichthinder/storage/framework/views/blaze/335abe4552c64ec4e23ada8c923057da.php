<?php
if (!function_exists('__335abe4552c64ec4e23ada8c923057da')):
function __335abe4552c64ec4e23ada8c923057da($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    'interactive' => null,
    'position' => 'top',
    'align' => 'center',
    'content' => null,
    'kbd' => null,
    'toggleable' => null,
];
$interactive ??= $attributes['interactive'] ?? $__defaults['interactive']; unset($attributes['interactive']);
$position ??= $attributes['position'] ?? $__defaults['position']; unset($attributes['position']);
$align ??= $attributes['align'] ?? $__defaults['align']; unset($attributes['align']);
$content ??= $attributes['content'] ?? $__defaults['content']; unset($attributes['content']);
$kbd ??= $attributes['kbd'] ?? $__defaults['kbd']; unset($attributes['kbd']);
$toggleable ??= $attributes['toggleable'] ?? $__defaults['toggleable']; unset($attributes['toggleable']);
unset($__defaults);
?>

<?php
// Support adding the .self modifier to the wire:model directive...
if (($wireModel = $attributes->wire('model')) && $wireModel->directive && ! $wireModel->hasModifier('self')) {
    unset($attributes[$wireModel->directive]);

    $wireModel->directive .= '.self';

    $attributes = $attributes->merge([$wireModel->directive => $wireModel->value]);
}
?>

<?php if ($toggleable): ?>
    <ui-dropdown position="<?php echo e($position); ?> <?php echo e($align); ?>" <?php echo e($attributes); ?> data-flux-tooltip>
        <?php echo e($slot); ?>


        <?php if ($content !== null): ?>
            <?php if (!function_exists('__f5a41af84441bffd23359d76cb5c35a4')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/content.blade.php', $__blaze->compiledPath.'/f5a41af84441bffd23359d76cb5c35a4.php'); require $__blaze->compiledPath.'/f5a41af84441bffd23359d76cb5c35a4.php'; } ?>
<?php if (isset($__slotsf5a41af84441bffd23359d76cb5c35a4)) { $__slotsStackf5a41af84441bffd23359d76cb5c35a4[] = $__slotsf5a41af84441bffd23359d76cb5c35a4; } ?>
<?php if (isset($__attrsf5a41af84441bffd23359d76cb5c35a4)) { $__attrsStackf5a41af84441bffd23359d76cb5c35a4[] = $__attrsf5a41af84441bffd23359d76cb5c35a4; } ?>
<?php $__attrsf5a41af84441bffd23359d76cb5c35a4 = ['kbd' => $kbd]; ?>
<?php $__slotsf5a41af84441bffd23359d76cb5c35a4 = []; ?>
<?php $__blaze->pushData($__attrsf5a41af84441bffd23359d76cb5c35a4); ?>
<?php ob_start(); ?><?php echo e($content); ?><?php $__slotsf5a41af84441bffd23359d76cb5c35a4['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slotsf5a41af84441bffd23359d76cb5c35a4); ?>
<?php __f5a41af84441bffd23359d76cb5c35a4($__blaze, $__attrsf5a41af84441bffd23359d76cb5c35a4, $__slotsf5a41af84441bffd23359d76cb5c35a4, ['kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackf5a41af84441bffd23359d76cb5c35a4)) { $__slotsf5a41af84441bffd23359d76cb5c35a4 = array_pop($__slotsStackf5a41af84441bffd23359d76cb5c35a4); } ?>
<?php if (! empty($__attrsStackf5a41af84441bffd23359d76cb5c35a4)) { $__attrsf5a41af84441bffd23359d76cb5c35a4 = array_pop($__attrsStackf5a41af84441bffd23359d76cb5c35a4); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    </ui-dropdown>
<?php else: ?>
    <ui-tooltip position="<?php echo e($position); ?> <?php echo e($align); ?>" <?php echo e($attributes); ?> data-flux-tooltip <?php if($interactive): ?> interactive <?php endif; ?>>
        <?php echo e($slot); ?>


        <?php if ($content !== null): ?>
            <?php if (!function_exists('__f5a41af84441bffd23359d76cb5c35a4')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/content.blade.php', $__blaze->compiledPath.'/f5a41af84441bffd23359d76cb5c35a4.php'); require $__blaze->compiledPath.'/f5a41af84441bffd23359d76cb5c35a4.php'; } ?>
<?php if (isset($__slotsf5a41af84441bffd23359d76cb5c35a4)) { $__slotsStackf5a41af84441bffd23359d76cb5c35a4[] = $__slotsf5a41af84441bffd23359d76cb5c35a4; } ?>
<?php if (isset($__attrsf5a41af84441bffd23359d76cb5c35a4)) { $__attrsStackf5a41af84441bffd23359d76cb5c35a4[] = $__attrsf5a41af84441bffd23359d76cb5c35a4; } ?>
<?php $__attrsf5a41af84441bffd23359d76cb5c35a4 = ['kbd' => $kbd]; ?>
<?php $__slotsf5a41af84441bffd23359d76cb5c35a4 = []; ?>
<?php $__blaze->pushData($__attrsf5a41af84441bffd23359d76cb5c35a4); ?>
<?php ob_start(); ?><?php echo e($content); ?><?php $__slotsf5a41af84441bffd23359d76cb5c35a4['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slotsf5a41af84441bffd23359d76cb5c35a4); ?>
<?php __f5a41af84441bffd23359d76cb5c35a4($__blaze, $__attrsf5a41af84441bffd23359d76cb5c35a4, $__slotsf5a41af84441bffd23359d76cb5c35a4, ['kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackf5a41af84441bffd23359d76cb5c35a4)) { $__slotsf5a41af84441bffd23359d76cb5c35a4 = array_pop($__slotsStackf5a41af84441bffd23359d76cb5c35a4); } ?>
<?php if (! empty($__attrsStackf5a41af84441bffd23359d76cb5c35a4)) { $__attrsf5a41af84441bffd23359d76cb5c35a4 = array_pop($__attrsStackf5a41af84441bffd23359d76cb5c35a4); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    </ui-tooltip>
<?php endif; ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/index.blade.php ENDPATH**/ ?>