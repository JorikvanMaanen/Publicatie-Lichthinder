<?php
if (!function_exists('_b01666d83305dbe2ba49f1aebc723642')):
function _b01666d83305dbe2ba49f1aebc723642($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
$__awareDefaults = [ 'variant' ];
$variant = $__blaze->getConsumableData('variant');
unset($__awareDefaults);
?>

<?php
$__defaults = [
    'iconVariant' => 'outline',
    'iconTrailing' => null,
    'badgeColor' => null,
    'variant' => null,
    'iconDot' => null,
    'accent' => true,
    'badge' => null,
    'icon' => null,
];
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$iconTrailing ??= $attributes['icon-trailing'] ?? $attributes['iconTrailing'] ?? $__defaults['iconTrailing']; unset($attributes['iconTrailing'], $attributes['icon-trailing']);
$badgeColor ??= $attributes['badge-color'] ?? $attributes['badgeColor'] ?? $__defaults['badgeColor']; unset($attributes['badgeColor'], $attributes['badge-color']);
$variant ??= $attributes['variant'] ?? $__defaults['variant']; unset($attributes['variant']);
$iconDot ??= $attributes['icon-dot'] ?? $attributes['iconDot'] ?? $__defaults['iconDot']; unset($attributes['iconDot'], $attributes['icon-dot']);
$accent ??= $attributes['accent'] ?? $__defaults['accent']; unset($attributes['accent']);
$badge ??= $attributes['badge'] ?? $__defaults['badge']; unset($attributes['badge']);
$icon ??= $attributes['icon'] ?? $__defaults['icon']; unset($attributes['icon']);
unset($__defaults);
?>

<?php
// Button should be a square if it has no text contents...
$square ??= $slot->isEmpty();

// Size-up icons in square/icon-only buttons...
$iconClasses = Flux::classes($square ? 'size-5!' : 'size-4!');

$classes = Flux::classes()
    ->add('h-10 lg:h-8 relative flex items-center gap-3 rounded-lg')
    ->add($square ? 'px-2.5!' : '')
    ->add('py-0 text-start w-full px-3 my-px')
    ->add('text-zinc-500 dark:text-white/80')
    ->add(match ($variant) {
        'outline' => match ($accent) {
            true => [
                'data-current:text-(--color-accent-content) hover:data-current:text-(--color-accent-content)',
                'data-current:bg-white dark:data-current:bg-white/[7%] data-current:border data-current:border-zinc-200 dark:data-current:border-transparent',
                'hover:text-zinc-800 dark:hover:text-white dark:hover:bg-white/[7%] hover:bg-zinc-800/5 ',
                'border border-transparent',
            ],
            false => [
                'data-current:text-zinc-800 dark:data-current:text-zinc-100 data-current:border-zinc-200',
                'data-current:bg-white dark:data-current:bg-white/10 data-current:border data-current:border-zinc-200 dark:data-current:border-white/10 data-current:shadow-xs',
                'hover:text-zinc-800 dark:hover:text-white',
            ],
        },
        default => match ($accent) {
            true => [
                'data-current:text-(--color-accent-content) hover:data-current:text-(--color-accent-content)',
                'data-current:bg-zinc-800/[4%] dark:data-current:bg-white/[7%]',
                'hover:text-zinc-800 dark:hover:text-white hover:bg-zinc-800/[4%] dark:hover:bg-white/[7%]',
            ],
            false => [
                'data-current:text-zinc-800 dark:data-current:text-zinc-100',
                'data-current:bg-zinc-800/[4%] dark:data-current:bg-white/10',
                'hover:text-zinc-800 dark:hover:text-white hover:bg-zinc-800/[4%] dark:hover:bg-white/10',
            ],
        },
    })
    ;
?>

<?php if (!function_exists('_80d688b243d205b6100a5dfcb69b1f6d')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/button-or-link.blade.php', $__blaze->compiledPath.'/80d688b243d205b6100a5dfcb69b1f6d.php'); require $__blaze->compiledPath.'/80d688b243d205b6100a5dfcb69b1f6d.php'; } ?>
<?php if (isset($__slots80d688b243d205b6100a5dfcb69b1f6d)) { $__slotsStack80d688b243d205b6100a5dfcb69b1f6d[] = $__slots80d688b243d205b6100a5dfcb69b1f6d; } ?>
<?php if (isset($__attrs80d688b243d205b6100a5dfcb69b1f6d)) { $__attrsStack80d688b243d205b6100a5dfcb69b1f6d[] = $__attrs80d688b243d205b6100a5dfcb69b1f6d; } ?>
<?php $__attrs80d688b243d205b6100a5dfcb69b1f6d = ['attributes' => $attributes->class($classes),'dataFluxNavlistItem' => true]; ?>
<?php $__slots80d688b243d205b6100a5dfcb69b1f6d = []; ?>
<?php $__blaze->pushData($__attrs80d688b243d205b6100a5dfcb69b1f6d); ?>
<?php ob_start(); ?>
    <?php if ($icon): ?>
        <div class="relative">
            <?php if (is_string($icon) && $icon !== ''): ?>
                <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $icon, 'variant' => $iconVariant, 'class' => $iconClasses]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_d4e12d850528cbd87d9331f87e5be4c6')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/d4e12d850528cbd87d9331f87e5be4c6.php'); require $__blaze->compiledPath.'/d4e12d850528cbd87d9331f87e5be4c6.php'; } ?>
<?php $__blaze->pushData(['icon' => $icon,'variant' => $iconVariant,'class' => $iconClasses]); ?>
<?php _d4e12d850528cbd87d9331f87e5be4c6($__blaze, ['icon' => $icon,'variant' => $iconVariant,'class' => $iconClasses], [], ['icon', 'variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
            <?php else: ?>
                <?php echo e($icon); ?>

            <?php endif; ?>

            <?php if ($iconDot): ?>
                <div class="absolute top-[-2px] end-[-2px]">
                    <div class="size-[6px] rounded-full bg-zinc-500 dark:bg-zinc-400"></div>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if ($slot->isNotEmpty()): ?>
        <div class="flex-1 text-sm font-medium leading-none whitespace-nowrap [[data-nav-footer]_&]:hidden [[data-nav-sidebar]_[data-nav-footer]_&]:block" data-content><?php echo e($slot); ?></div>
    <?php endif; ?>

    <?php if ($iconDot && ! $icon && $iconTrailing): ?>
        <div class="relative">
            <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
                <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $iconTrailing, 'variant' => $iconVariant, 'class' => 'size-4!']); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_d4e12d850528cbd87d9331f87e5be4c6')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/d4e12d850528cbd87d9331f87e5be4c6.php'); require $__blaze->compiledPath.'/d4e12d850528cbd87d9331f87e5be4c6.php'; } ?>
<?php $__blaze->pushData(['icon' => $iconTrailing,'variant' => $iconVariant,'class' => 'size-4!']); ?>
<?php _d4e12d850528cbd87d9331f87e5be4c6($__blaze, ['icon' => $iconTrailing,'variant' => $iconVariant,'class' => 'size-4!'], [], ['icon', 'variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
            <?php else: ?>
                <?php echo e($iconTrailing); ?>

            <?php endif; ?>

            <div class="absolute top-[-2px] end-[-2px]">
                <div class="size-[6px] rounded-full bg-zinc-500 dark:bg-zinc-400"></div>
            </div>
        </div>
    <?php elseif (is_string($iconTrailing) && $iconTrailing !== ''): ?>
        <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $iconTrailing, 'variant' => $iconVariant, 'class' => 'size-4!']); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_d4e12d850528cbd87d9331f87e5be4c6')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/d4e12d850528cbd87d9331f87e5be4c6.php'); require $__blaze->compiledPath.'/d4e12d850528cbd87d9331f87e5be4c6.php'; } ?>
<?php $__blaze->pushData(['icon' => $iconTrailing,'variant' => $iconVariant,'class' => 'size-4!']); ?>
<?php _d4e12d850528cbd87d9331f87e5be4c6($__blaze, ['icon' => $iconTrailing,'variant' => $iconVariant,'class' => 'size-4!'], [], ['icon', 'variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
    <?php elseif ($iconTrailing): ?>
        <?php echo e($iconTrailing); ?>

    <?php endif; ?>

    <?php if (isset($badge) && $badge !== ''): ?>
        <?php $badgeAttributes = Flux::attributesAfter('badge:', $attributes, ['color' => $badgeColor]); ?>
        <?php if (!function_exists('_d2db88f7df3abd689083235616095eb4')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/navlist/badge.blade.php', $__blaze->compiledPath.'/d2db88f7df3abd689083235616095eb4.php'); require $__blaze->compiledPath.'/d2db88f7df3abd689083235616095eb4.php'; } ?>
<?php if (isset($__slotsd2db88f7df3abd689083235616095eb4)) { $__slotsStackd2db88f7df3abd689083235616095eb4[] = $__slotsd2db88f7df3abd689083235616095eb4; } ?>
<?php if (isset($__attrsd2db88f7df3abd689083235616095eb4)) { $__attrsStackd2db88f7df3abd689083235616095eb4[] = $__attrsd2db88f7df3abd689083235616095eb4; } ?>
<?php $__attrsd2db88f7df3abd689083235616095eb4 = ['attributes' => $badgeAttributes]; ?>
<?php $__slotsd2db88f7df3abd689083235616095eb4 = []; ?>
<?php $__blaze->pushData($__attrsd2db88f7df3abd689083235616095eb4); ?>
<?php ob_start(); ?><?php echo e($badge); ?><?php $__slotsd2db88f7df3abd689083235616095eb4['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsd2db88f7df3abd689083235616095eb4); ?>
<?php _d2db88f7df3abd689083235616095eb4($__blaze, $__attrsd2db88f7df3abd689083235616095eb4, $__slotsd2db88f7df3abd689083235616095eb4, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackd2db88f7df3abd689083235616095eb4)) { $__slotsd2db88f7df3abd689083235616095eb4 = array_pop($__slotsStackd2db88f7df3abd689083235616095eb4); } ?>
<?php if (! empty($__attrsStackd2db88f7df3abd689083235616095eb4)) { $__attrsd2db88f7df3abd689083235616095eb4 = array_pop($__attrsStackd2db88f7df3abd689083235616095eb4); } ?>
<?php $__blaze->popData(); ?>
    <?php endif; ?>
<?php $__slots80d688b243d205b6100a5dfcb69b1f6d['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots80d688b243d205b6100a5dfcb69b1f6d); ?>
<?php _80d688b243d205b6100a5dfcb69b1f6d($__blaze, $__attrs80d688b243d205b6100a5dfcb69b1f6d, $__slots80d688b243d205b6100a5dfcb69b1f6d, ['attributes', 'dataFluxNavlistItem'], ['dataFluxNavlistItem' => 'data-flux-navlist-item'], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack80d688b243d205b6100a5dfcb69b1f6d)) { $__slots80d688b243d205b6100a5dfcb69b1f6d = array_pop($__slotsStack80d688b243d205b6100a5dfcb69b1f6d); } ?>
<?php if (! empty($__attrsStack80d688b243d205b6100a5dfcb69b1f6d)) { $__attrs80d688b243d205b6100a5dfcb69b1f6d = array_pop($__attrsStack80d688b243d205b6100a5dfcb69b1f6d); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/navlist/item.blade.php ENDPATH**/ ?>