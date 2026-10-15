<?php
if (!function_exists('_397affbefb5a9d1f4cfafaabcc3b872f')):
function _397affbefb5a9d1f4cfafaabcc3b872f($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    'length' => null,
    'private' => false,
];
$length ??= $attributes['length'] ?? $__defaults['length']; unset($attributes['length']);
$private ??= $attributes['private'] ?? $__defaults['private']; unset($attributes['private']);
unset($__defaults);
?>

<?php
    $classes = Flux::classes()
        ->add('flex items-center gap-2 isolate w-fit')
        ->add('[&_[data-flux-input-group]]:w-auto')
?>

<?php if (!function_exists('_99164b0f8c82484d1f0a9c311171d167')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php', $__blaze->compiledPath.'/99164b0f8c82484d1f0a9c311171d167.php'); require $__blaze->compiledPath.'/99164b0f8c82484d1f0a9c311171d167.php'; } ?>
<?php if (isset($__slots99164b0f8c82484d1f0a9c311171d167)) { $__slotsStack99164b0f8c82484d1f0a9c311171d167[] = $__slots99164b0f8c82484d1f0a9c311171d167; } ?>
<?php if (isset($__attrs99164b0f8c82484d1f0a9c311171d167)) { $__attrsStack99164b0f8c82484d1f0a9c311171d167[] = $__attrs99164b0f8c82484d1f0a9c311171d167; } ?>
<?php $__attrs99164b0f8c82484d1f0a9c311171d167 = ['attributes' => $attributes]; ?>
<?php $__slots99164b0f8c82484d1f0a9c311171d167 = []; ?>
<?php $__blaze->pushData($__attrs99164b0f8c82484d1f0a9c311171d167); ?>
<?php ob_start(); ?>
    <ui-otp
        <?php echo e($attributes->class($classes)); ?>

        data-flux-otp
        data-flux-control
        role="group"
        data-flux-input-aria-label="<?php echo e(__('Character {current} of {total}')); ?>"
    >
        <?php if($slot->isEmpty() && $length): ?>
            <?php for($i = 0; $i < $length; $i++): ?>
                <?php if (!function_exists('_eef2275afd35b2d173c7cd33b3703678')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/otp/input.blade.php', $__blaze->compiledPath.'/eef2275afd35b2d173c7cd33b3703678.php'); require $__blaze->compiledPath.'/eef2275afd35b2d173c7cd33b3703678.php'; } ?>
<?php $__blaze->pushData([]); ?>
<?php _eef2275afd35b2d173c7cd33b3703678($__blaze, [], [], [], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
            <?php endfor; ?>
        <?php else: ?>
            <?php echo e($slot); ?>

        <?php endif; ?>
    </ui-otp>
<?php $__slots99164b0f8c82484d1f0a9c311171d167['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots99164b0f8c82484d1f0a9c311171d167); ?>
<?php _99164b0f8c82484d1f0a9c311171d167($__blaze, $__attrs99164b0f8c82484d1f0a9c311171d167, $__slots99164b0f8c82484d1f0a9c311171d167, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack99164b0f8c82484d1f0a9c311171d167)) { $__slots99164b0f8c82484d1f0a9c311171d167 = array_pop($__slotsStack99164b0f8c82484d1f0a9c311171d167); } ?>
<?php if (! empty($__attrsStack99164b0f8c82484d1f0a9c311171d167)) { $__attrs99164b0f8c82484d1f0a9c311171d167 = array_pop($__attrsStack99164b0f8c82484d1f0a9c311171d167); } ?>
<?php $__blaze->popData(); ?><?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\stubs\resources\views\flux\otp\index.blade.php ENDPATH**/ ?>