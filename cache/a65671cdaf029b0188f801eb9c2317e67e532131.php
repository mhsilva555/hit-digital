

<?php $__env->startSection('content'); ?>

    <main class="pages contato">
        <div class="content">
            <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="d-flex justify-content-center">
                <div class="page-title">
                    <h2>Contato</h2>
                </div>
            </div>

            <div class="wrapper-content form-contato">
                <form action="<?php echo e(Url()); ?>/contato/enviaEmail" method="POST" class="form-group">
                    <div class="row">
                        <div class="cols col-lg-6">
                            <fieldset>
                                <input class="form-control" type="text" name="nome" placeholder="Nome*" required>
                            </fieldset>
                        </div>

                        <div class="cols col-lg-6">
                            <fieldset>
                                <input class="form-control" type="email" name="email" placeholder="E-mail*" required>
                            </fieldset>
                        </div>

                        <div class="cols mt-3 col-lg-12">
                            <fieldset>
                                <textarea rows="8" class="form-control" name="mensagem" placeholder="Mensagem*"></textarea>
                            </fieldset>
                        </div>

                        <div class="cols col-lg-12 text-center">
                            <button type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\teste-hit-digital\resources\views/contato.blade.php ENDPATH**/ ?>