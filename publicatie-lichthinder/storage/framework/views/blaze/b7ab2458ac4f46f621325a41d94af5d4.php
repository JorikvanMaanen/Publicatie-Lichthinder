<?php
if (!function_exists('__b7ab2458ac4f46f621325a41d94af5d4')):
function __b7ab2458ac4f46f621325a41d94af5d4($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
extract(Flux::forwardedAttributes($attributes, [
    'tooltipPosition',
    'tooltipKbd',
    'tooltip',
]));
?>

<?php $tooltipPosition = $tooltipPosition ??= $attributes->pluck('tooltip:position'); ?>
<?php $tooltipKbd = $tooltipKbd ??= $attributes->pluck('tooltip:kbd'); ?>
<?php $tooltip = $tooltip ??= $attributes->pluck('tooltip'); ?>

<?php
$__defaults = [
    'tooltipPosition' => 'top',
    'tooltipKbd' => null,
    'tooltip' => null,
];
$tooltipPosition ??= $attributes['tooltip-position'] ?? $attributes['tooltipPosition'] ?? $__defaults['tooltipPosition']; unset($attributes['tooltipPosition'], $attributes['tooltip-position']);
$tooltipKbd ??= $attributes['tooltip-kbd'] ?? $attributes['tooltipKbd'] ?? $__defaults['tooltipKbd']; unset($attributes['tooltipKbd'], $attributes['tooltip-kbd']);
$tooltip ??= $attributes['tooltip'] ?? $__defaults['tooltip']; unset($attributes['tooltip']);
unset($__defaults);
?>

<?php if ($tooltip): ?>
    <?php if (!function_exists('__335abe4552c64ec4e23ada8c923057da')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/335abe4552c64ec4e23ada8c923057da.php'); require $__blaze->compiledPath.'/335abe4552c64ec4e23ada8c923057da.php'; } ?>
<?php if (isset($__slots335abe4552c64ec4e23ada8c923057da)) { $__slotsStack335abe4552c64ec4e23ada8c923057da[] = $__slots335abe4552c64ec4e23ada8c923057da; } ?>
<?php if (isset($__attrs335abe4552c64ec4e23ada8c923057da)) { $__attrsStack335abe4552c64ec4e23ada8c923057da[] = $__attrs335abe4552c64ec4e23ada8c923057da; } ?>
<?php $__attrs335abe4552c64ec4e23ada8c923057da = ['class' => 'inline-flex','content' => $tooltip,'position' => $tooltipPosition,'kbd' => $tooltipKbd]; ?>
<?php $__slots335abe4552c64ec4e23ada8c923057da = []; ?>
<?php $__blaze->pushData($__attrs335abe4552c64ec4e23ada8c923057da); ?>
<?php ob_start(); ?>
        <?php echo e($slot); ?>

    <?php $__slots335abe4552c64ec4e23ada8c923057da['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots335abe4552c64ec4e23ada8c923057da); ?>
<?php __335abe4552c64ec4e23ada8c923057da($__blaze, $__attrs335abe4552c64ec4e23ada8c923057da, $__slots335abe4552c64ec4e23ada8c923057da, ['content', 'position', 'kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack335abe4552c64ec4e23ada8c923057da)) { $__slots335abe4552c64ec4e23ada8c923057da = array_pop($__slotsStack335abe4552c64ec4e23ada8c923057da); } ?>
<?php if (! empty($__attrsStack335abe4552c64ec4e23ada8c923057da)) { $__attrs335abe4552c64ec4e23ada8c923057da = array_pop($__attrsStack335abe4552c64ec4e23ada8c923057da); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/with-tooltip.blade.php ENDPATH**/ ?>