<?require $_SERVER['DOCUMENT_ROOT'].'/config/config.php';?>

<?php $__env->startSection('main_content'); ?>
    <form method="post" action="../handlers/auth.php">

        <div class="row mt">
            <div class="col-12 col-lg-9 d-flex" style="width: 100%">
                <div class="card w-100 mb-5">
                    <div class="card-body mb-5">
                        <h1 class="center">Войти</h1>

                        <h4 class="mb-0 center mt">E-mail</h4>
                        <div style="margin: auto" class="col-5 center mt-2">
                            <input name="email" type="text" value="" class="col-4 form-control center">
                        </div>

                        <h4 class="mb-0 center mt">Пароль</h4>
                        <div style="margin: auto" class="col-5 center mt-2">
                            <input name="password" type="password" value="" class="col-4 form-control center">
                        </div>

                        <p class="center">
                            <a href="register" class="center">Еще нет аккаунта?</a>
                        </p>

                        <div class="col-12 minmt_div">
                            <button type="submit" class="btn btn-primary btn-lg minmt">Войти</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>