<?php
if (!function_exists('_a4e94f5cd9c54e63cb5b5d5d5b992be4')):
function _a4e94f5cd9c54e63cb5b5d5d5b992be4($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
$classes = Flux::classes('[grid-area:footer]')
    ->add($attributes->has('container') ? '' : 'p-6 lg:p-8')
    ;
?>

<div <?php echo e($attributes->class($classes)); ?> data-flux-footer>
    <?php if (!function_exists('_7a2473f7211b42756d704ae873e1ce6b')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/with-container.blade.php', $__blaze->compiledPath.'/7a2473f7211b42756d704ae873e1ce6b.php'); require $__blaze->compiledPath.'/7a2473f7211b42756d704ae873e1ce6b.php'; } ?>
<?php if (isset($__slots7a2473f7211b42756d704ae873e1ce6b)) { $__slotsStack7a2473f7211b42756d704ae873e1ce6b[] = $__slots7a2473f7211b42756d704ae873e1ce6b; } ?>
<?php if (isset($__attrs7a2473f7211b42756d704ae873e1ce6b)) { $__attrsStack7a2473f7211b42756d704ae873e1ce6b[] = $__attrs7a2473f7211b42756d704ae873e1ce6b; } ?>
<?php $__attrs7a2473f7211b42756d704ae873e1ce6b = ['attributes' => $attributes->except('class')->class('p-6 lg:p-8')]; ?>
<?php $__slots7a2473f7211b42756d704ae873e1ce6b = []; ?>
<?php $__blaze->pushData($__attrs7a2473f7211b42756d704ae873e1ce6b); ?>
<?php ob_start(); ?>
        <?php echo e($slot); ?>

    <?php $__slots7a2473f7211b42756d704ae873e1ce6b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots7a2473f7211b42756d704ae873e1ce6b); ?>
<?php _7a2473f7211b42756d704ae873e1ce6b($__blaze, $__attrs7a2473f7211b42756d704ae873e1ce6b, $__slots7a2473f7211b42756d704ae873e1ce6b, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack7a2473f7211b42756d704ae873e1ce6b)) { $__slots7a2473f7211b42756d704ae873e1ce6b = array_pop($__slotsStack7a2473f7211b42756d704ae873e1ce6b); } ?>
<?php if (! empty($__attrsStack7a2473f7211b42756d704ae873e1ce6b)) { $__attrs7a2473f7211b42756d704ae873e1ce6b = array_pop($__attrsStack7a2473f7211b42756d704ae873e1ce6b); } ?>
<?php $__blaze->popData(); ?>
</div>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\stubs\resources\views\flux\footer.blade.php ENDPATH**/ ?>