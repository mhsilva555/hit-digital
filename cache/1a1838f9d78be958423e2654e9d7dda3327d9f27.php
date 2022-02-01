

<?php $__env->startSection('content'); ?>


    <main class="pages painel">

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="m-0 text-white">PAINEL ADMINISTRATIVO</h3>
                </div>

                <div class="col-lg-6 text-end">
                    <a class="btn btn-danger" href="<?php echo e(Url()); ?>/painel/sair">SAIR</a>
                </div>
            </div>

            <hr>

            
            <form method="POST" action="<?php echo e(Url()); ?>/painel/update">
                <textarea id="editor" name="texto">
                    <?php echo e(\App\Models\Update::get()); ?>

                </textarea>

                <button type="submit" class="btn btn-success mt-3">Atualizar</button>
            </form>
        </div>

    </main>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\teste-hit-digital\resources\views/painel.blade.php ENDPATH**/ ?>