<?php # [BlazeFolded]:{flux::heading}:{C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/heading.blade.php}:{1789445708} ?>
<?php # [BlazeFolded]:{flux::button}:{C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php}:{1789445708} ?>


<?php if (isset($component)) { $__componentOriginal08b8a564843783787e0bee3357e24f38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal08b8a564843783787e0bee3357e24f38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::auth','data' => ['title' => session('account_status') === 'rejected' ? __('Account afgekeurd') : __('Account aangemaakt')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::auth'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('account_status') === 'rejected' ? __('Account afgekeurd') : __('Account aangemaakt'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <div class="flex flex-col gap-6">
        <div class="flex flex-col text-center">
            <?php ob_start(); ?><h1 class="font-medium [:where(&amp;)]:text-zinc-800 [:where(&amp;)]:dark:text-white text-2xl [&amp;:has(+[data-flux-subheading])]:mb-2 [[data-flux-subheading]+&amp;]:mt-2" data-flux-heading><?php ob_start(); ?>
                <?php echo e(session('account_status') === 'rejected' ? __('Account afgekeurd') : __('Account aangemaakt')); ?>

            <?php echo trim(ob_get_clean()); ?></h1>

        <?php echo ltrim(ob_get_clean()); ?>
        </div>

        <div class="rounded-lg border border-zinc-200 p-4 text-sm dark:border-zinc-700">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('account_status') === 'rejected'): ?>
                <p class="font-medium text-zinc-900 dark:text-zinc-100">
                    <?php echo e(__('Je account is afgekeurd en je hebt geen toegang tot de applicatie.')); ?>

                </p>
                <p class="mt-2 text-zinc-600 dark:text-zinc-400">
                    <?php echo e(__('Neem contact op met een beheerder als je vragen hebt.')); ?>

                </p>
            <?php else: ?>
                <p class="font-medium text-zinc-900 dark:text-zinc-100">
                    <?php echo e(__('Je account is aangemaakt en wacht op goedkeuring.')); ?>

                </p>
                <p class="mt-2 text-zinc-600 dark:text-zinc-400">
                    <?php echo e(__('Een beheerder moet je account eerst goedkeuren. Je ontvangt een e-mail zodra je account is goedgekeurd.')); ?>

                </p>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>

        <?php ob_start(); ?><a href="<?php echo e(route('login')); ?>" data-flux-button="data-flux-button" class="relative items-center font-medium justify-center whitespace-nowrap disabled:opacity-50 dark:disabled:opacity-50 disabled:cursor-default disabled:pointer-events-none disabled:shadow-none justify-center h-10 text-sm rounded-lg gap-2 ps-4 pe-4 inline-flex  bg-[var(--color-accent)] hover:bg-[color-mix(in_oklab,_var(--color-accent),_transparent_10%)] text-[var(--color-accent-foreground)] border border-black/10 dark:border-0 shadow-[inset_0px_1px_--theme(--color-white/.2)] [[data-flux-button-group]_&amp;]:border-e-0 [:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-[1px] dark:[:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-0 [:is([data-flux-button-group]&gt;&amp;:not(:first-child),_[data-flux-button-group]_:not(:first-child)&gt;&amp;)]:border-s-[1px]! [:is([data-flux-button-group]&gt;&amp;:not(:first-child),_[data-flux-button-group]_:not(:first-child)&gt;&amp;)]:border-s-[color-mix(in_srgb,var(--color-accent-foreground),transparent_85%)]    w-full" data-flux-group-target="data-flux-group-target" wire:navigate="">
        <?php ob_start(); ?>
            Naar inloggen
        <?php echo trim(ob_get_clean()); ?>

    </a>
<?php echo ltrim(ob_get_clean()); ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal08b8a564843783787e0bee3357e24f38)): ?>
<?php $attributes = $__attributesOriginal08b8a564843783787e0bee3357e24f38; ?>
<?php unset($__attributesOriginal08b8a564843783787e0bee3357e24f38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08b8a564843783787e0bee3357e24f38)): ?>
<?php $component = $__componentOriginal08b8a564843783787e0bee3357e24f38; ?>
<?php unset($__componentOriginal08b8a564843783787e0bee3357e24f38); ?>
<?php endif; ?><?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\resources\views/layouts/auth/account-created.blade.php ENDPATH**/ ?>