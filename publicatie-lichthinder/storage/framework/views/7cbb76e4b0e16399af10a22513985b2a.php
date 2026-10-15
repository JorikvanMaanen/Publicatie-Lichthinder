<?php
if (!function_exists('_7cbb76e4b0e16399af10a22513985b2a')):
function _7cbb76e4b0e16399af10a22513985b2a($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    'iconVariant' => 'mini',
    'size' => null,
];
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$size ??= $attributes['size'] ?? $__defaults['size']; unset($attributes['size']);
unset($__defaults);
?>

<?php
$attributes = $attributes->merge([
    'variant' => 'subtle',
    'class' => '-me-1',
    'square' => true,
    'size' => null,
]);
?>

<?php if (!function_exists('_1a3f4c3198373ad6d7a08bfd68ac80d4')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php', $__blaze->compiledPath.'/1a3f4c3198373ad6d7a08bfd68ac80d4.php'); require $__blaze->compiledPath.'/1a3f4c3198373ad6d7a08bfd68ac80d4.php'; } ?>
<?php if (isset($__slots1a3f4c3198373ad6d7a08bfd68ac80d4)) { $__slotsStack1a3f4c3198373ad6d7a08bfd68ac80d4[] = $__slots1a3f4c3198373ad6d7a08bfd68ac80d4; } ?>
<?php if (isset($__attrs1a3f4c3198373ad6d7a08bfd68ac80d4)) { $__attrsStack1a3f4c3198373ad6d7a08bfd68ac80d4[] = $__attrs1a3f4c3198373ad6d7a08bfd68ac80d4; } ?>
<?php $__attrs1a3f4c3198373ad6d7a08bfd68ac80d4 = ['attributes' => $attributes,'size' => $size === 'sm' || $size === 'xs' ? 'xs' : 'sm']; ?>
<?php $__slots1a3f4c3198373ad6d7a08bfd68ac80d4 = []; ?>
<?php $__blaze->pushData($__attrs1a3f4c3198373ad6d7a08bfd68ac80d4); ?>
<?php ob_start(); ?>
    <?php if (!function_exists('_cddc9aa76b722d3563675f1c1846eb26')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/chevron-down.blade.php', $__blaze->compiledPath.'/cddc9aa76b722d3563675f1c1846eb26.php'); require $__blaze->compiledPath.'/cddc9aa76b722d3563675f1c1846eb26.php'; } ?>
<?php $__blaze->pushData(['variant' => $iconVariant]); ?>
<?php _cddc9aa76b722d3563675f1c1846eb26($__blaze, ['variant' => $iconVariant], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
<?php $__slots1a3f4c3198373ad6d7a08bfd68ac80d4['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots1a3f4c3198373ad6d7a08bfd68ac80d4); ?>
<?php _1a3f4c3198373ad6d7a08bfd68ac80d4($__blaze, $__attrs1a3f4c3198373ad6d7a08bfd68ac80d4, $__slots1a3f4c3198373ad6d7a08bfd68ac80d4, ['attributes', 'size'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack1a3f4c3198373ad6d7a08bfd68ac80d4)) { $__slots1a3f4c3198373ad6d7a08bfd68ac80d4 = array_pop($__slotsStack1a3f4c3198373ad6d7a08bfd68ac80d4); } ?>
<?php if (! empty($__attrsStack1a3f4c3198373ad6d7a08bfd68ac80d4)) { $__attrs1a3f4c3198373ad6d7a08bfd68ac80d4 = array_pop($__attrsStack1a3f4c3198373ad6d7a08bfd68ac80d4); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\stubs\resources\views\flux\input\expandable.blade.php ENDPATH**/ ?>