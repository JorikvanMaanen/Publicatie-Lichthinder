<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => __('Home')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Home'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <div class="flex min-h-full w-full flex-1 flex-col items-center justify-center p-6">
        <a
            href="<?php echo e(asset('images/lichthinder webpagina.png')); ?>"
            target="_blank"
            rel="noopener noreferrer"
            class="group flex w-full max-w-4xl flex-col items-center gap-4 rounded-xl p-4 transition hover:bg-zinc-50 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 dark:hover:bg-zinc-700"
        >
            <img
                src="<?php echo e(asset('images/lichthinder webpagina.png')); ?>"
                alt="Publicatie lichthinder"
                class="h-auto max-h-[70vh] w-full rounded-lg object-contain shadow-sm"
            >
            <span class="text-center text-lg font-medium text-zinc-900 group-hover:underline dark:text-zinc-100">
                Publicatie lichthinder
            </span>
        </a>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal81a506f898233b9e7d58286e6bea3c18)): ?>
<?php $attributes = $__attributesOriginal81a506f898233b9e7d58286e6bea3c18; ?>
<?php unset($__attributesOriginal81a506f898233b9e7d58286e6bea3c18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81a506f898233b9e7d58286e6bea3c18)): ?>
<?php $component = $__componentOriginal81a506f898233b9e7d58286e6bea3c18; ?>
<?php unset($__componentOriginal81a506f898233b9e7d58286e6bea3c18); ?>
<?php endif; ?>
<?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\resources\views\home.blade.php ENDPATH**/ ?>