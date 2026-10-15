<?php
if (!function_exists('_b8d74387e70e90e0db308d4687b85634')):
function _b8d74387e70e90e0db308d4687b85634($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php if (!function_exists('_8e13f878e6c0706d509586d42d4e88e4')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/checkbox/index.blade.php', $__blaze->compiledPath.'/8e13f878e6c0706d509586d42d4e88e4.php'); require $__blaze->compiledPath.'/8e13f878e6c0706d509586d42d4e88e4.php'; } ?>
<?php $__blaze->pushData(['all' => true,'attributes' => $attributes]); ?>
<?php _8e13f878e6c0706d509586d42d4e88e4($__blaze, ['all' => true,'attributes' => $attributes], [], ['all', 'attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\stubs\resources\views\flux\checkbox\all.blade.php ENDPATH**/ ?>