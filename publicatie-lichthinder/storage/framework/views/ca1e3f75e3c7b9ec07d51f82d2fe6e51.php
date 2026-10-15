<?php
if (!function_exists('_ca1e3f75e3c7b9ec07d51f82d2fe6e51')):
function _ca1e3f75e3c7b9ec07d51f82d2fe6e51($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    'variant' => null,
    'size' => null,
    'name' => null,
];
$variant ??= $attributes['variant'] ?? $__defaults['variant']; unset($attributes['variant']);
$size ??= $attributes['size'] ?? $__defaults['size']; unset($attributes['size']);
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
unset($__defaults);
?>

<?php
// We only want to show the name attribute on the checkbox if it has been set
// manually, but not if it has been set from the wire:model attribute...
$showName = isset($name);

if (! isset($name)) {
    $name = $attributes->whereStartsWith('wire:model')->first();
}

$classes = Flux::classes()
    ->add('flex flex-wrap gap-3')
    ;
?>

<?php if (!function_exists('_99164b0f8c82484d1f0a9c311171d167')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php', $__blaze->compiledPath.'/99164b0f8c82484d1f0a9c311171d167.php'); require $__blaze->compiledPath.'/99164b0f8c82484d1f0a9c311171d167.php'; } ?>
<?php if (isset($__slots99164b0f8c82484d1f0a9c311171d167)) { $__slotsStack99164b0f8c82484d1f0a9c311171d167[] = $__slots99164b0f8c82484d1f0a9c311171d167; } ?>
<?php if (isset($__attrs99164b0f8c82484d1f0a9c311171d167)) { $__attrsStack99164b0f8c82484d1f0a9c311171d167[] = $__attrs99164b0f8c82484d1f0a9c311171d167; } ?>
<?php $__attrs99164b0f8c82484d1f0a9c311171d167 = ['attributes' => $attributes]; ?>
<?php $__slots99164b0f8c82484d1f0a9c311171d167 = []; ?>
<?php $__blaze->pushData($__attrs99164b0f8c82484d1f0a9c311171d167); ?>
<?php ob_start(); ?>
    <ui-checkbox-group <?php echo e($attributes->class($classes)); ?> <?php if($showName): ?> name="<?php echo e($name); ?>" <?php endif; ?> data-flux-checkbox-group-pills>
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
} endif; ?><?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\stubs\resources\views\flux\checkbox\group\variants\pills.blade.php ENDPATH**/ ?>