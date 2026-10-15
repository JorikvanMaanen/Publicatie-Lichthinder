<?php # [BlazeFolded]:{flux::menu}:{C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/menu/index.blade.php}:{1789445708} ?>
<?php
if (!function_exists('_0a3b2a09e6f28982e0c00ab78038a1ec')):
function _0a3b2a09e6f28982e0c00ab78038a1ec($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php $iconTrailing ??= $attributes->pluck('icon:trailing'); ?>
<?php $iconVariant ??= $attributes->pluck('icon:variant'); ?>

<?php
$__defaults = [
    'iconVariant' => 'mini',
    'iconTrailing' => null,
    'heading' => '',
    'icon' => null,
    'keepOpen' => false,
];
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$iconTrailing ??= $attributes['icon-trailing'] ?? $attributes['iconTrailing'] ?? $__defaults['iconTrailing']; unset($attributes['iconTrailing'], $attributes['icon-trailing']);
$heading ??= $attributes['heading'] ?? $__defaults['heading']; unset($attributes['heading']);
$icon ??= $attributes['icon'] ?? $__defaults['icon']; unset($attributes['icon']);
$keepOpen ??= $attributes['keep-open'] ?? $attributes['keepOpen'] ?? $__defaults['keepOpen']; unset($attributes['keepOpen'], $attributes['keep-open']);
unset($__defaults);
?>

<?php
$iconClasses = Flux::classes()
    ->add('ms-auto text-zinc-400 [[data-flux-menu-item]:hover_&]:text-current')
    // When using the outline icon variant, we need to size it down to match the default icon sizes...
    ->add($iconVariant === 'outline' ? 'size-5' : '');
?>

<ui-submenu data-flux-menu-submenu>
    <?php if (!function_exists('_2676c56a9d9737ef2e5fa2b1d9c23c75')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/menu/item.blade.php', $__blaze->compiledPath.'/2676c56a9d9737ef2e5fa2b1d9c23c75.php'); require $__blaze->compiledPath.'/2676c56a9d9737ef2e5fa2b1d9c23c75.php'; } ?>
<?php if (isset($__slots2676c56a9d9737ef2e5fa2b1d9c23c75)) { $__slotsStack2676c56a9d9737ef2e5fa2b1d9c23c75[] = $__slots2676c56a9d9737ef2e5fa2b1d9c23c75; } ?>
<?php if (isset($__attrs2676c56a9d9737ef2e5fa2b1d9c23c75)) { $__attrsStack2676c56a9d9737ef2e5fa2b1d9c23c75[] = $__attrs2676c56a9d9737ef2e5fa2b1d9c23c75; } ?>
<?php $__attrs2676c56a9d9737ef2e5fa2b1d9c23c75 = ['icon' => $icon,'iconVariant' => $iconVariant]; ?>
<?php $__slots2676c56a9d9737ef2e5fa2b1d9c23c75 = []; ?>
<?php $__blaze->pushData($__attrs2676c56a9d9737ef2e5fa2b1d9c23c75); ?>
<?php ob_start(); ?>
        <?php echo e($heading); ?>


         <?php ob_start(); ?>
            <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
                <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $iconTrailing, 'variant' => $iconVariant, 'class' => $iconClasses]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_d4e12d850528cbd87d9331f87e5be4c6')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/d4e12d850528cbd87d9331f87e5be4c6.php'); require $__blaze->compiledPath.'/d4e12d850528cbd87d9331f87e5be4c6.php'; } ?>
<?php $__blaze->pushData(['icon' => $iconTrailing,'variant' => $iconVariant,'class' => $iconClasses]); ?>
<?php _d4e12d850528cbd87d9331f87e5be4c6($__blaze, ['icon' => $iconTrailing,'variant' => $iconVariant,'class' => $iconClasses], [], ['icon', 'variant', 'class'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
            <?php elseif ($iconTrailing): ?>
                <?php echo e($iconTrailing); ?>

            <?php else: ?>
                <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => 'chevron-right', 'variant' => $iconVariant, 'class' => $iconClasses->add('rtl:hidden')]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_d4e12d850528cbd87d9331f87e5be4c6')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/d4e12d850528cbd87d9331f87e5be4c6.php'); require $__blaze->compiledPath.'/d4e12d850528cbd87d9331f87e5be4c6.php'; } ?>
<?php $__blaze->pushData(['icon' => 'chevron-right','variant' => $iconVariant,'class' => $iconClasses->add('rtl:hidden')]); ?>
<?php _d4e12d850528cbd87d9331f87e5be4c6($__blaze, ['icon' => 'chevron-right','variant' => $iconVariant,'class' => $iconClasses->add('rtl:hidden')], [], ['variant', 'class'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
                <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => 'chevron-left', 'variant' => $iconVariant, 'class' => $iconClasses->add('hidden rtl:inline')]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_d4e12d850528cbd87d9331f87e5be4c6')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/d4e12d850528cbd87d9331f87e5be4c6.php'); require $__blaze->compiledPath.'/d4e12d850528cbd87d9331f87e5be4c6.php'; } ?>
<?php $__blaze->pushData(['icon' => 'chevron-left','variant' => $iconVariant,'class' => $iconClasses->add('hidden rtl:inline')]); ?>
<?php _d4e12d850528cbd87d9331f87e5be4c6($__blaze, ['icon' => 'chevron-left','variant' => $iconVariant,'class' => $iconClasses->add('hidden rtl:inline')], [], ['variant', 'class'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
            <?php endif; ?>
        <?php $__slots2676c56a9d9737ef2e5fa2b1d9c23c75['suffix'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
    <?php $__slots2676c56a9d9737ef2e5fa2b1d9c23c75['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots2676c56a9d9737ef2e5fa2b1d9c23c75); ?>
<?php _2676c56a9d9737ef2e5fa2b1d9c23c75($__blaze, $__attrs2676c56a9d9737ef2e5fa2b1d9c23c75, $__slots2676c56a9d9737ef2e5fa2b1d9c23c75, ['icon', 'iconVariant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack2676c56a9d9737ef2e5fa2b1d9c23c75)) { $__slots2676c56a9d9737ef2e5fa2b1d9c23c75 = array_pop($__slotsStack2676c56a9d9737ef2e5fa2b1d9c23c75); } ?>
<?php if (! empty($__attrsStack2676c56a9d9737ef2e5fa2b1d9c23c75)) { $__attrs2676c56a9d9737ef2e5fa2b1d9c23c75 = array_pop($__attrsStack2676c56a9d9737ef2e5fa2b1d9c23c75); } ?>
<?php $__blaze->popData(); ?>

    <?php ob_start(); ?><ui-menu
    class="[:where(&amp;)]:min-w-48 p-[.3125rem] rounded-lg shadow-xs border border-zinc-200 dark:border-zinc-600 bg-white dark:bg-zinc-700 focus:outline-hidden" <?php if (($__blazeAttr = $keepOpen) !== false && !is_null($__blazeAttr)): ?>keep-open="<?php echo e($__blazeAttr === true ? 'keep-open' : $__blazeAttr); ?>"<?php endif; unset($__blazeAttr); ?>

    popover="manual"
    data-flux-menu
>
    <?php ob_start(); ?>
        <?php echo e($slot); ?>

    <?php echo trim(ob_get_clean()); ?>

</ui-menu>
<?php echo ltrim(ob_get_clean()); ?>
</ui-submenu>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\stubs\resources\views\flux\menu\submenu.blade.php ENDPATH**/ ?>