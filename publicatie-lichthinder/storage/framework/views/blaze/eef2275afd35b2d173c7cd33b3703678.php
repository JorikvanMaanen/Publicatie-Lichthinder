<?php
if (!function_exists('__eef2275afd35b2d173c7cd33b3703678')):
function __eef2275afd35b2d173c7cd33b3703678($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php
$__awareDefaults = ['mode' => 'numeric', 'private' => false];
$mode = $__blaze->getConsumableData('mode', $__awareDefaults['mode']);
$private = $__blaze->getConsumableData('private', $__awareDefaults['private']);
unset($__awareDefaults);
?>

<?php
    $attributes = $attributes
        ->merge([
            'class' => 'w-8! grow-0 has-focus-within:z-10',
            'class:input' => 'px-0! py-3 text-center disabled:opacity-75 disabled:shadow-xs! dark:disabled:shadow-none!',
        ])
        ->merge(['data-flux-otp-input' => ''])
    ;

    if ($mode == 'numeric') {
        $attributes = $attributes->merge(['inputmode' => 'numeric']);
    }

    if ($private) {
        $attributes = $attributes->merge(['type' => 'password']);
    }
?>

<?php if (!function_exists('__85c0f85fb68dc1dab3397e9a52e97dea')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/input/index.blade.php', $__blaze->compiledPath.'/85c0f85fb68dc1dab3397e9a52e97dea.php'); require $__blaze->compiledPath.'/85c0f85fb68dc1dab3397e9a52e97dea.php'; } ?>
<?php $__blaze->pushData(['attributes' => $attributes]); ?>
<?php __85c0f85fb68dc1dab3397e9a52e97dea($__blaze, ['attributes' => $attributes], [], ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/otp/input.blade.php ENDPATH**/ ?>