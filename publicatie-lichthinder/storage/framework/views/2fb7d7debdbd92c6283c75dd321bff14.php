<?php
if (!function_exists('_2fb7d7debdbd92c6283c75dd321bff14')):
function _2fb7d7debdbd92c6283c75dd321bff14($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
<?php $__attrs1a3f4c3198373ad6d7a08bfd68ac80d4 = ['attributes' => $attributes,'size' => $size === 'sm' || $size === 'xs' ? 'xs' : 'sm','xData' => 'fluxInputViewable','xOn:click' => 'toggle()','xBind:dataViewableOpen' => 'open','ariaLabel' => e(__('Toggle password visibility'))]; ?>
<?php $__slots1a3f4c3198373ad6d7a08bfd68ac80d4 = []; ?>
<?php $__blaze->pushData($__attrs1a3f4c3198373ad6d7a08bfd68ac80d4); ?>
<?php ob_start(); ?>
    <?php if (!function_exists('_40a61c02e8c537e03002f274f0412a95')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/eye-slash.blade.php', $__blaze->compiledPath.'/40a61c02e8c537e03002f274f0412a95.php'); require $__blaze->compiledPath.'/40a61c02e8c537e03002f274f0412a95.php'; } ?>
<?php $__blaze->pushData(['variant' => $iconVariant,'class' => 'hidden [[data-viewable-open]>&]:block']); ?>
<?php _40a61c02e8c537e03002f274f0412a95($__blaze, ['variant' => $iconVariant,'class' => 'hidden [[data-viewable-open]>&]:block'], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
    <?php if (!function_exists('_d30cac4848e8e743499e663412b75786')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/eye.blade.php', $__blaze->compiledPath.'/d30cac4848e8e743499e663412b75786.php'); require $__blaze->compiledPath.'/d30cac4848e8e743499e663412b75786.php'; } ?>
<?php $__blaze->pushData(['variant' => $iconVariant,'class' => 'block [[data-viewable-open]>&]:hidden']); ?>
<?php _d30cac4848e8e743499e663412b75786($__blaze, ['variant' => $iconVariant,'class' => 'block [[data-viewable-open]>&]:hidden'], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
<?php $__slots1a3f4c3198373ad6d7a08bfd68ac80d4['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots1a3f4c3198373ad6d7a08bfd68ac80d4); ?>
<?php _1a3f4c3198373ad6d7a08bfd68ac80d4($__blaze, $__attrs1a3f4c3198373ad6d7a08bfd68ac80d4, $__slots1a3f4c3198373ad6d7a08bfd68ac80d4, ['attributes', 'size'], ['xData' => 'x-data', 'xOn:click' => 'x-on:click', 'xBind:dataViewableOpen' => 'x-bind:data-viewable-open', 'ariaLabel' => 'aria-label'], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack1a3f4c3198373ad6d7a08bfd68ac80d4)) { $__slots1a3f4c3198373ad6d7a08bfd68ac80d4 = array_pop($__slotsStack1a3f4c3198373ad6d7a08bfd68ac80d4); } ?>
<?php if (! empty($__attrsStack1a3f4c3198373ad6d7a08bfd68ac80d4)) { $__attrs1a3f4c3198373ad6d7a08bfd68ac80d4 = array_pop($__attrsStack1a3f4c3198373ad6d7a08bfd68ac80d4); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\stubs\resources\views\flux\input\viewable.blade.php ENDPATH**/ ?>