<?php
if (!function_exists('_52ed6fe916e36e00fa82c5c0958eaff8')):
function _52ed6fe916e36e00fa82c5c0958eaff8($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    'name',
    'descriptionTrailing',
    'description',
    'label',
    'badge',
]));
?>

<?php $descriptionTrailing = $descriptionTrailing ??= $attributes->pluck('description:trailing'); ?>

<?php
$__defaults = [
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'descriptionTrailing' => null,
    'description' => null,
    'label' => null,
    'badge' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$descriptionTrailing ??= $attributes['description-trailing'] ?? $attributes['descriptionTrailing'] ?? $__defaults['descriptionTrailing']; unset($attributes['descriptionTrailing'], $attributes['description-trailing']);
$description ??= $attributes['description'] ?? $__defaults['description']; unset($attributes['description']);
$label ??= $attributes['label'] ?? $__defaults['label']; unset($attributes['label']);
$badge ??= $attributes['badge'] ?? $__defaults['badge']; unset($attributes['badge']);
unset($__defaults);
?>

<?php if (isset($label) || isset($description) || isset($descriptionTrailing)): ?>
    <?php

        $fieldAttributes = Flux::attributesAfter('field:', $attributes, []);
        $labelAttributes = Flux::attributesAfter('label:', $attributes, ['badge' => $badge]);
        $descriptionAttributes = Flux::attributesAfter('description:', $attributes, []);
        $errorAttributes = Flux::attributesAfter('error:', $attributes, ['name' => $name]);
    ?>
    <?php if (!function_exists('_2bf95674b6a73fc5258918128fde6ee3')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/field.blade.php', $__blaze->compiledPath.'/2bf95674b6a73fc5258918128fde6ee3.php'); require $__blaze->compiledPath.'/2bf95674b6a73fc5258918128fde6ee3.php'; } ?>
<?php if (isset($__slots2bf95674b6a73fc5258918128fde6ee3)) { $__slotsStack2bf95674b6a73fc5258918128fde6ee3[] = $__slots2bf95674b6a73fc5258918128fde6ee3; } ?>
<?php if (isset($__attrs2bf95674b6a73fc5258918128fde6ee3)) { $__attrsStack2bf95674b6a73fc5258918128fde6ee3[] = $__attrs2bf95674b6a73fc5258918128fde6ee3; } ?>
<?php $__attrs2bf95674b6a73fc5258918128fde6ee3 = ['attributes' => $fieldAttributes]; ?>
<?php $__slots2bf95674b6a73fc5258918128fde6ee3 = []; ?>
<?php $__blaze->pushData($__attrs2bf95674b6a73fc5258918128fde6ee3); ?>
<?php ob_start(); ?>
        <?php if (isset($label)): ?>
            <?php if (!function_exists('_68043f1bae6c52aadf12aa901b4ecd75')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/label.blade.php', $__blaze->compiledPath.'/68043f1bae6c52aadf12aa901b4ecd75.php'); require $__blaze->compiledPath.'/68043f1bae6c52aadf12aa901b4ecd75.php'; } ?>
<?php if (isset($__slots68043f1bae6c52aadf12aa901b4ecd75)) { $__slotsStack68043f1bae6c52aadf12aa901b4ecd75[] = $__slots68043f1bae6c52aadf12aa901b4ecd75; } ?>
<?php if (isset($__attrs68043f1bae6c52aadf12aa901b4ecd75)) { $__attrsStack68043f1bae6c52aadf12aa901b4ecd75[] = $__attrs68043f1bae6c52aadf12aa901b4ecd75; } ?>
<?php $__attrs68043f1bae6c52aadf12aa901b4ecd75 = ['attributes' => $labelAttributes]; ?>
<?php $__slots68043f1bae6c52aadf12aa901b4ecd75 = []; ?>
<?php $__blaze->pushData($__attrs68043f1bae6c52aadf12aa901b4ecd75); ?>
<?php ob_start(); ?><?php echo e($label); ?><?php $__slots68043f1bae6c52aadf12aa901b4ecd75['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots68043f1bae6c52aadf12aa901b4ecd75); ?>
<?php _68043f1bae6c52aadf12aa901b4ecd75($__blaze, $__attrs68043f1bae6c52aadf12aa901b4ecd75, $__slots68043f1bae6c52aadf12aa901b4ecd75, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack68043f1bae6c52aadf12aa901b4ecd75)) { $__slots68043f1bae6c52aadf12aa901b4ecd75 = array_pop($__slotsStack68043f1bae6c52aadf12aa901b4ecd75); } ?>
<?php if (! empty($__attrsStack68043f1bae6c52aadf12aa901b4ecd75)) { $__attrs68043f1bae6c52aadf12aa901b4ecd75 = array_pop($__attrsStack68043f1bae6c52aadf12aa901b4ecd75); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php if (isset($description)): ?>
            <?php if (!function_exists('_89ae9094a59bb6723cb1a9fddb4c3bc3')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/89ae9094a59bb6723cb1a9fddb4c3bc3.php'); require $__blaze->compiledPath.'/89ae9094a59bb6723cb1a9fddb4c3bc3.php'; } ?>
<?php if (isset($__slots89ae9094a59bb6723cb1a9fddb4c3bc3)) { $__slotsStack89ae9094a59bb6723cb1a9fddb4c3bc3[] = $__slots89ae9094a59bb6723cb1a9fddb4c3bc3; } ?>
<?php if (isset($__attrs89ae9094a59bb6723cb1a9fddb4c3bc3)) { $__attrsStack89ae9094a59bb6723cb1a9fddb4c3bc3[] = $__attrs89ae9094a59bb6723cb1a9fddb4c3bc3; } ?>
<?php $__attrs89ae9094a59bb6723cb1a9fddb4c3bc3 = ['attributes' => $descriptionAttributes]; ?>
<?php $__slots89ae9094a59bb6723cb1a9fddb4c3bc3 = []; ?>
<?php $__blaze->pushData($__attrs89ae9094a59bb6723cb1a9fddb4c3bc3); ?>
<?php ob_start(); ?><?php echo e($description); ?><?php $__slots89ae9094a59bb6723cb1a9fddb4c3bc3['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots89ae9094a59bb6723cb1a9fddb4c3bc3); ?>
<?php _89ae9094a59bb6723cb1a9fddb4c3bc3($__blaze, $__attrs89ae9094a59bb6723cb1a9fddb4c3bc3, $__slots89ae9094a59bb6723cb1a9fddb4c3bc3, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack89ae9094a59bb6723cb1a9fddb4c3bc3)) { $__slots89ae9094a59bb6723cb1a9fddb4c3bc3 = array_pop($__slotsStack89ae9094a59bb6723cb1a9fddb4c3bc3); } ?>
<?php if (! empty($__attrsStack89ae9094a59bb6723cb1a9fddb4c3bc3)) { $__attrs89ae9094a59bb6723cb1a9fddb4c3bc3 = array_pop($__attrsStack89ae9094a59bb6723cb1a9fddb4c3bc3); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php echo e($slot); ?>


        
        <?php $__getScope = fn($scope = []) => $scope; ?><?php if (isset($scope)) $__scope = $scope; ?><?php $scope = $__getScope(scope: ['attributes' => $errorAttributes->getAttributes()]); ?>
        <?php if (!function_exists('_f945040121cc63141fffd11c251ebe10')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/error.blade.php', $__blaze->compiledPath.'/f945040121cc63141fffd11c251ebe10.php'); require $__blaze->compiledPath.'/f945040121cc63141fffd11c251ebe10.php'; } ?>
<?php $__blaze->pushData(['attributes' => new \Illuminate\View\ComponentAttributeBag($scope['attributes'])]); ?>
<?php _f945040121cc63141fffd11c251ebe10($__blaze, ['attributes' => new \Illuminate\View\ComponentAttributeBag($scope['attributes'])], [], ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
        <?php if (isset($__scope)) { $scope = $__scope; unset($__scope); } ?>

        <?php if (isset($descriptionTrailing)): ?>
            <?php if (!function_exists('_89ae9094a59bb6723cb1a9fddb4c3bc3')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/89ae9094a59bb6723cb1a9fddb4c3bc3.php'); require $__blaze->compiledPath.'/89ae9094a59bb6723cb1a9fddb4c3bc3.php'; } ?>
<?php if (isset($__slots89ae9094a59bb6723cb1a9fddb4c3bc3)) { $__slotsStack89ae9094a59bb6723cb1a9fddb4c3bc3[] = $__slots89ae9094a59bb6723cb1a9fddb4c3bc3; } ?>
<?php if (isset($__attrs89ae9094a59bb6723cb1a9fddb4c3bc3)) { $__attrsStack89ae9094a59bb6723cb1a9fddb4c3bc3[] = $__attrs89ae9094a59bb6723cb1a9fddb4c3bc3; } ?>
<?php $__attrs89ae9094a59bb6723cb1a9fddb4c3bc3 = ['attributes' => $descriptionAttributes]; ?>
<?php $__slots89ae9094a59bb6723cb1a9fddb4c3bc3 = []; ?>
<?php $__blaze->pushData($__attrs89ae9094a59bb6723cb1a9fddb4c3bc3); ?>
<?php ob_start(); ?><?php echo e($descriptionTrailing); ?><?php $__slots89ae9094a59bb6723cb1a9fddb4c3bc3['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots89ae9094a59bb6723cb1a9fddb4c3bc3); ?>
<?php _89ae9094a59bb6723cb1a9fddb4c3bc3($__blaze, $__attrs89ae9094a59bb6723cb1a9fddb4c3bc3, $__slots89ae9094a59bb6723cb1a9fddb4c3bc3, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack89ae9094a59bb6723cb1a9fddb4c3bc3)) { $__slots89ae9094a59bb6723cb1a9fddb4c3bc3 = array_pop($__slotsStack89ae9094a59bb6723cb1a9fddb4c3bc3); } ?>
<?php if (! empty($__attrsStack89ae9094a59bb6723cb1a9fddb4c3bc3)) { $__attrs89ae9094a59bb6723cb1a9fddb4c3bc3 = array_pop($__attrsStack89ae9094a59bb6723cb1a9fddb4c3bc3); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    <?php $__slots2bf95674b6a73fc5258918128fde6ee3['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots2bf95674b6a73fc5258918128fde6ee3); ?>
<?php _2bf95674b6a73fc5258918128fde6ee3($__blaze, $__attrs2bf95674b6a73fc5258918128fde6ee3, $__slots2bf95674b6a73fc5258918128fde6ee3, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack2bf95674b6a73fc5258918128fde6ee3)) { $__slots2bf95674b6a73fc5258918128fde6ee3 = array_pop($__slotsStack2bf95674b6a73fc5258918128fde6ee3); } ?>
<?php if (! empty($__attrsStack2bf95674b6a73fc5258918128fde6ee3)) { $__attrs2bf95674b6a73fc5258918128fde6ee3 = array_pop($__attrsStack2bf95674b6a73fc5258918128fde6ee3); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\stubs\resources\views\flux\with-field.blade.php ENDPATH**/ ?>