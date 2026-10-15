<?php # [BlazeFolded]:{flux::heading}:{C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/heading.blade.php}:{1789445708} ?>
<?php # [BlazeFolded]:{flux::button}:{C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php}:{1789445708} ?>
<section class="w-full">
    <?php echo $__env->make('partials.settings-heading', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php ob_start(); ?><h2 class="font-medium [:where(&amp;)]:text-zinc-800 [:where(&amp;)]:dark:text-white text-sm [&amp;:has(+[data-flux-subheading])]:mb-2 [[data-flux-subheading]+&amp;]:mt-2 sr-only" data-flux-heading><?php ob_start(); ?><?php echo e(__('Profile settings')); ?><?php echo trim(ob_get_clean()); ?></h2>

        <?php echo ltrim(ob_get_clean()); ?>

    <?php if (isset($component)) { $__componentOriginal951a5936e8413b65cd052beecc1fba57 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal951a5936e8413b65cd052beecc1fba57 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.settings.layout','data' => ['heading' => __('Profile'),'subheading' => __('Update your name and email address')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('settings.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Profile')),'subheading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Update your name and email address'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

        <form wire:submit="updateProfileInformation" class="my-6 w-full space-y-6">
            <?php if (!function_exists('_85c0f85fb68dc1dab3397e9a52e97dea')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/input/index.blade.php', $__blaze->compiledPath.'/85c0f85fb68dc1dab3397e9a52e97dea.php'); require $__blaze->compiledPath.'/85c0f85fb68dc1dab3397e9a52e97dea.php'; } ?>
<?php $__blaze->pushData(['wire:model' => 'name','label' => __('Name'),'type' => 'text','required' => true,'autofocus' => true,'autocomplete' => 'name']); ?>
<?php _85c0f85fb68dc1dab3397e9a52e97dea($__blaze, ['wire:model' => 'name','label' => __('Name'),'type' => 'text','required' => true,'autofocus' => true,'autocomplete' => 'name'], [], ['label', 'required', 'autofocus'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>

            <?php if (!function_exists('_85c0f85fb68dc1dab3397e9a52e97dea')) { $__blaze->compile('C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/input/index.blade.php', $__blaze->compiledPath.'/85c0f85fb68dc1dab3397e9a52e97dea.php'); require $__blaze->compiledPath.'/85c0f85fb68dc1dab3397e9a52e97dea.php'; } ?>
<?php $__blaze->pushData(['wire:model' => 'email','label' => __('Email'),'type' => 'email','required' => true,'autocomplete' => 'email']); ?>
<?php _85c0f85fb68dc1dab3397e9a52e97dea($__blaze, ['wire:model' => 'email','label' => __('Email'),'type' => 'email','required' => true,'autocomplete' => 'email'], [], ['label', 'required'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>

            <div class="flex items-center gap-4">
                <?php ob_start(); ?><button type="submit" class="relative items-center font-medium justify-center whitespace-nowrap disabled:opacity-50 dark:disabled:opacity-50 disabled:cursor-default disabled:pointer-events-none disabled:shadow-none justify-center h-10 text-sm rounded-lg gap-2 ps-4 pe-4 inline-flex  bg-[var(--color-accent)] hover:bg-[color-mix(in_oklab,_var(--color-accent),_transparent_10%)] text-[var(--color-accent-foreground)] border border-black/10 dark:border-0 shadow-[inset_0px_1px_--theme(--color-white/.2)] [[data-flux-button-group]_&amp;]:border-e-0 [:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-[1px] dark:[:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-0 [:is([data-flux-button-group]&gt;&amp;:not(:first-child),_[data-flux-button-group]_:not(:first-child)&gt;&amp;)]:border-s-[1px]! [:is([data-flux-button-group]&gt;&amp;:not(:first-child),_[data-flux-button-group]_:not(:first-child)&gt;&amp;)]:border-s-[color-mix(in_srgb,var(--color-accent-foreground),transparent_85%)] *:transition-opacity [&amp;[disabled]&gt;:not([data-flux-loading-indicator])]:opacity-0 [&amp;[disabled]&gt;[data-flux-loading-indicator]]:opacity-100 [&amp;[disabled]]:pointer-events-none" data-flux-button="data-flux-button" data-flux-group-target="data-flux-group-target">
        <div class="absolute inset-0 flex items-center justify-center opacity-0" data-flux-loading-indicator>
                <svg class="shrink-0 [:where(&amp;)]:size-4 animate-spin" data-flux-icon xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true" data-slot="icon">
    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
</svg>
                    </div>
        
        
                    
            
            <span><?php ob_start(); ?><?php echo e(__('Save')); ?><?php echo trim(ob_get_clean()); ?></span>
    </button>
<?php echo ltrim(ob_get_clean()); ?>
            </div>
        </form>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal951a5936e8413b65cd052beecc1fba57)): ?>
<?php $attributes = $__attributesOriginal951a5936e8413b65cd052beecc1fba57; ?>
<?php unset($__attributesOriginal951a5936e8413b65cd052beecc1fba57); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal951a5936e8413b65cd052beecc1fba57)): ?>
<?php $component = $__componentOriginal951a5936e8413b65cd052beecc1fba57; ?>
<?php unset($__componentOriginal951a5936e8413b65cd052beecc1fba57); ?>
<?php endif; ?>
</section>
<?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\resources\views/livewire/settings/profile.blade.php ENDPATH**/ ?>