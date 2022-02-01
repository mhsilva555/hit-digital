

<?php $__env->startSection('content'); ?>

    <main class="pages home">
        <div class="content">
            <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="d-flex justify-content-center">
                <div class="page-title">
                    <h2>Introdução</h2>
                </div>
            </div>

            <div class="wrapper-content text-homepage">
                <?php echo e(\App\Models\Update::get()); ?>

            </div>

        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\teste-hit-digital\resources\views/home.blade.php ENDPATH**/ ?>