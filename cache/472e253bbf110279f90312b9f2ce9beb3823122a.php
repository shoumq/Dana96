<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config/config.php'; ?>

<?php $__env->startSection('main_content'); ?>
    <form method="post" action="../handlers/marks.php">

        <div class="row mt">
            <div class="col-12 col-lg-6 d-flex mt-m">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="align-items-center">
                            <h4 class="mb-0">Ваша должность</h4>

                            <?php
                            $pos = $_COOKIE['position'];
                            $mysql = new mysqli($adress_db, $user_name_db, $password_db, $db_name_db);
                            $result = $mysql->query("SELECT * FROM position WHERE name_id = '$pos'");
                            $user = $result->fetch_assoc();
                            ?>

                            <div class="col-12">
                                <label class="form-label"></label>
                                <input type="text" value="<?= $user['name'] ?>" disabled class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 d-flex mt-m">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="align-items-center">
                            <h4 class="mb-0">Оцените: </h4>
                            <div class="col-12">
                                <label class="form-label"></label>
                                <select name="select_mark" class="form-select">
                                    <?php
                                    $mysql = new mysqli($adress_db, $user_name_db, $password_db, $db_name_db);

                                    if ($_COOKIE['position'] == "d1") {
                                        $result = $mysql->query("SELECT * FROM users WHERE position = 'd4' OR position = 'd5' OR position = 'd6' OR position = 'd13'");
                                    }

                                    elseif ($_COOKIE['position'] == "d1") {
                                        $result = $mysql->query("SELECT * FROM users WHERE position = 'd4' OR position = 'd5' OR position = 'd6' OR position = 'd13'");
                                    }

                                    elseif ($_COOKIE['position'] == "d2") {
                                        $result = $mysql->query("SELECT * FROM users WHERE position = 'd1' OR position = 'd4' OR position = 'd11' OR position = 'd13'");
                                    }

                                    elseif ($_COOKIE['position'] == "d3") {
                                        $result = $mysql->query("SELECT * FROM users");
                                    }
                                    
                                    elseif ($_COOKIE['position'] == "d4") {
                                        $result = $mysql->query("SELECT * FROM users WHERE position = 'd1' OR position = 'd5' OR position = 'd6'");
                                    }

                                    elseif ($_COOKIE['position'] == "d5") {
                                        $result = $mysql->query("SELECT * FROM users WHERE position = 'd1' OR position = 'd4' OR position = 'd6' OR position = 'd7' OR position = 'd8' OR position = 'd9' OR position = 'd13'");
                                    }

                                    elseif ($_COOKIE['position'] == "d6") {
                                        $result = $mysql->query("SELECT * FROM users WHERE position = 'd1' OR position = 'd4' OR position = 'd5' OR position = 'd9' OR position = 'd13'");
                                    }

                                    elseif ($_COOKIE['position'] == "d7") {
                                        $result = $mysql->query("SELECT * FROM users WHERE position = 'd4' OR position = 'd5' OR position = 'd6' OR position = 'd13'");
                                    }

                                    elseif ($_COOKIE['position'] == "d8") {
                                        $result = $mysql->query("SELECT * FROM users");
                                    }

                                    elseif ($_COOKIE['position'] == "d9") {
                                        $result = $mysql->query("SELECT * FROM users WHERE position = 'd1' OR position = 'd4' OR position = 'd5' OR position = 'd6' OR position = 'd7' OR position = 'd13'");
                                    }

                                    elseif ($_COOKIE['position'] == "d10") {
                                        $result = $mysql->query("SELECT * FROM users WHERE position = 'd2' OR position = 'd11' OR position = 'd12' OR position = 'd13'");
                                    }

                                    elseif ($_COOKIE['position'] == "d11") {
                                        $result = $mysql->query("SELECT * FROM users WHERE position = 'd2'");
                                    }

                                    elseif ($_COOKIE['position'] == "d12") {
                                        $result = $mysql->query("SELECT * FROM users WHERE position = 'd1' OR position = 'd2' OR position = 'd4' OR position = 'd5' OR position = 'd7' OR position = 'd10' OR position = 'd11' OR position = 'd13'");
                                    }

                                    elseif ($_COOKIE['position'] == "d13") {
                                        $result = $mysql->query("SELECT * FROM users WHERE position = 'd1' OR position = 'd2' OR position = 'd4' OR position = 'd5' OR position = 'd7' OR position = 'd10' OR position = 'd11'");
                                    }

                                    while ($row = $result->fetch_assoc()) { 
                                    $rp = $row['position'];

                                    $pos_res = $mysql->query("SELECT * FROM position WHERE name_id = '$rp'");
                                    $user = $pos_res->fetch_assoc();?>
                                    <option><?= $row['name'] ?> <?= $row['surname'] ?> ( <?= $user['name'] ?>,
                                        <?= $row['email'] ?> )</option>
                                    <?php } ?> ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 d-flex mt-m">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="align-items-center">
                            <h4 class="mb-0">Оценка</h4>
                            <div class="col-12">
                                <label class="form-label"></label>
                                <input name="mark_input" type="number" max="5" min="1" class="form-control"
                                    placeholder="от 1 до 5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 minmt_div">
            <button type="submit" class="btn btn-primary btn-lg minmt">Оценить</button>
        </div>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>