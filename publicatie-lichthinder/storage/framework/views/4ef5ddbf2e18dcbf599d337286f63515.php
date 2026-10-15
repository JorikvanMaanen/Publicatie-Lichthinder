<?php
if (!function_exists('_4ef5ddbf2e18dcbf599d337286f63515')):
function _4ef5ddbf2e18dcbf599d337286f63515($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
$classes = Flux::classes()
    ->add('*:data-flux-field:mb-3')
    ->add('[&>[data-flux-field]:has(>[data-flux-description])]:mb-4')
    ->add('[&>[data-flux-field]:last-child]:mb-0!')
    ;

// Support adding the .self modifier to the wire:model directive...
if (($wireModel = $attributes->wire('model')) && $wireModel->directive && ! $wireModel->hasModifier('self')) {
    unset($attributes[$wireModel->directive]);

    $wireModel->directive .= '.self';

    $attributes = $attributes->merge([$wireModel->directive => $wireModel->value]);
}
?>

<?php if (!function_exists('_99164b0f8c82484d1f0a9c311171d167')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php', $__blaze->compiledPath.'/99164b0f8c82484d1f0a9c311171d167.php'); require $__blaze->compiledPath.'/99164b0f8c82484d1f0a9c311171d167.php'; } ?>
<?php if (isset($__slots99164b0f8c82484d1f0a9c311171d167)) { $__slotsStack99164b0f8c82484d1f0a9c311171d167[] = $__slots99164b0f8c82484d1f0a9c311171d167; } ?>
<?php if (isset($__attrs99164b0f8c82484d1f0a9c311171d167)) { $__attrsStack99164b0f8c82484d1f0a9c311171d167[] = $__attrs99164b0f8c82484d1f0a9c311171d167; } ?>
<?php $__attrs99164b0f8c82484d1f0a9c311171d167 = ['attributes' => $attributes]; ?>
<?php $__slots99164b0f8c82484d1f0a9c311171d167 = []; ?>
<?php $__blaze->pushData($__attrs99164b0f8c82484d1f0a9c311171d167); ?>
<?php ob_start(); ?>
    <ui-checkbox-group <?php echo e($attributes->class($classes)); ?> data-flux-checkbox-group>
        <?php echo e($slot); ?>

    </ui-checkbox-group>
<?php $__slots99164b0f8c82484d1f0a9c311171d167['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots99164b0f8c82484d1f0a9c311171d167); ?>
<?php _99164b0f8c82484d1f0a9c311171d167($__blaze, $__attrs99164b0f8c82484d1f0a9c311171d167, $__slots99164b0f8c82484d1f0a9c311171d167, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack99164b0f8c82484d1f0a9c311171d167)) { $__slots99164b0f8c82484d1f0a9c311171d167 = array_pop($__slotsStack99164b0f8c82484d1f0a9c311171d167); } ?>
<?php if (! empty($__attrsStack99164b0f8c82484d1f0a9c311171d167)) { $__attrs99164b0f8c82484d1f0a9c311171d167 = array_pop($__attrsStack99164b0f8c82484d1f0a9c311171d167); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\stubs\resources\views\flux\checkbox\group\variants\default.blade.php ENDPATH**/ ?>