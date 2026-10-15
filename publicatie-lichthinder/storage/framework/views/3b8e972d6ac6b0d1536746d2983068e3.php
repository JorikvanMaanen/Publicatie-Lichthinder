<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>
    <?php echo e(filled($title ?? null) ? $title.' - '.config('app.name', 'Laravel') : config('app.name', 'Laravel')); ?>

</title>

<link rel="icon" href="<?php echo e(asset('images/NSVVLOGO.png')); ?>" type="image/png">
<link rel="apple-touch-icon" href="<?php echo e(asset('images/NSVVLOGO.png')); ?>">

<?php echo app('Illuminate\Foundation\Vite')->fonts(); ?>

<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
<?php echo app('flux')->fluxAppearance(); ?>

<?php /**PATH C:\Users\j_van\Desktop\school\Publicatie Lichthinder\app\Publicatie Lichthinder\publicatie-lichthinder\resources\views/partials/head.blade.php ENDPATH**/ ?>