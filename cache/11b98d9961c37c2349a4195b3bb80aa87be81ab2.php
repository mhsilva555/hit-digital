

<?php $__env->startSection('content'); ?>


    <main class="pages login">

        <div class="login-wrapper d-flex justify-content-center align-items-center">
            <div class="form-login">

                <h3 class="text-center">Login Painel</h3>

                <form action="<?php echo e(Url()); ?>/loginUser" method="POST" class="form-group">
                    <input class="form-control" type="text" name="user" placeholder="Usuário">
                    <input class="form-control" type="password" name="password" placeholder="*********">

                    <button type="submit" class="btn btn-dark mt-2">Logar</button>
                </form>

            </div>
        </div>

    </main>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\teste-hit-digital\resources\views/login.blade.php ENDPATH**/ ?>