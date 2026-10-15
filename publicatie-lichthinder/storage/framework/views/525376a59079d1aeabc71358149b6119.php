<?php
if (!function_exists('_525376a59079d1aeabc71358149b6119')):
function _525376a59079d1aeabc71358149b6119($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    'name' => $attributes->whereStartsWith('wire:model')->first(),
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
unset($__defaults);
?>

<?php if (!function_exists('_039fbfafb86cae83bddafd9d09fc1316')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/with-inline-field.blade.php', $__blaze->compiledPath.'/039fbfafb86cae83bddafd9d09fc1316.php'); require $__blaze->compiledPath.'/039fbfafb86cae83bddafd9d09fc1316.php'; } ?>
<?php if (isset($__slots039fbfafb86cae83bddafd9d09fc1316)) { $__slotsStack039fbfafb86cae83bddafd9d09fc1316[] = $__slots039fbfafb86cae83bddafd9d09fc1316; } ?>
<?php if (isset($__attrs039fbfafb86cae83bddafd9d09fc1316)) { $__attrsStack039fbfafb86cae83bddafd9d09fc1316[] = $__attrs039fbfafb86cae83bddafd9d09fc1316; } ?>
<?php $__attrs039fbfafb86cae83bddafd9d09fc1316 = ['variant' => 'inline','attributes' => $attributes]; ?>
<?php $__slots039fbfafb86cae83bddafd9d09fc1316 = []; ?>
<?php $__blaze->pushData($__attrs039fbfafb86cae83bddafd9d09fc1316); ?>
<?php ob_start(); ?>
    
    
    
    <ui-radio <?php echo e($attributes->class('flex size-[1.125rem] rounded-full mt-px outline-offset-2')); ?> data-flux-control data-flux-radio tabindex="-1">
        <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::radio.indicator", []); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_9788bead939c4f4f1ec82e79e74ad96e')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/radio/indicator.blade.php', $__blaze->compiledPath.'/9788bead939c4f4f1ec82e79e74ad96e.php'); require $__blaze->compiledPath.'/9788bead939c4f4f1ec82e79e74ad96e.php'; } ?>
<?php $__blaze->pushData([]); ?>
<?php _9788bead939c4f4f1ec82e79e74ad96e($__blaze, [], [], [], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
    </ui-radio>
<?php $__slots039fbfafb86cae83bddafd9d09fc1316['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots039fbfafb86cae83bddafd9d09fc1316); ?>
<?php _039fbfafb86cae83bddafd9d09fc1316($__blaze, $__attrs039fbfafb86cae83bddafd9d09fc1316, $__slots039fbfafb86cae83bddafd9d09fc1316, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack039fbfafb86cae83bddafd9d09fc1316)) { $__slots039fbfafb86cae83bddafd9d09fc1316 = array_pop($__slotsStack039fbfafb86cae83bddafd9d09fc1316); } ?>
<?php if (! empty($__attrsStack039fbfafb86cae83bddafd9d09fc1316)) { $__attrs039fbfafb86cae83bddafd9d09fc1316 = array_pop($__attrsStack039fbfafb86cae83bddafd9d09fc1316); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\stubs\resources\views\flux\radio\variants\default.blade.php ENDPATH**/ ?>