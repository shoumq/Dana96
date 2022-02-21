<?require $_SERVER['DOCUMENT_ROOT'].'/config/config.php';?>

<?php $__env->startSection('main_content'); ?>

<div class="row d-flex">
    <div class="col-lg-12 flex">

        <div class="card w-100 mt">
            <div class="card-header py-3">
                <h5 class="mb-0">Менеджер по продажам</h5>
            </div>
            <div class="card-body">
                <form class="row g-3" id="customerFilter">
                    <div class="col-2">
                        <label class="form-label">Водитель</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Директор</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Бухгалтер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Офис-менеджер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Специалист по договорам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Специалист по П. П.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Ассистент</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Юрист</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Снабженец</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Слесарь</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Главный механик</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Руководитель Т. О.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-12 minmt_div">
                        <button type="submit" class="btn btn-primary btn-lg minmt">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>








    <div class="col-lg-12 flex">

        <div class="card w-100 mt">
            <div class="card-header py-3">
                <h5 class="mb-0">Водитель</h5>
            </div>
            <div class="card-body">
                <form class="row g-3" id="customerFilter">
                    <div class="col-2">
                        <label class="form-label">Менеджер по продажам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Директор</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Бухгалтер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Офис-менеджер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Специалист по договорам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Специалист по П. П.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Ассистент</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Юрист</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Снабженец</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Слесарь</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Главный механик</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Руководитель Т. О.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-12 minmt_div">
                        <button type="submit" class="btn btn-primary btn-lg minmt">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>







    <div class="col-lg-12 flex">

        <div class="card w-100 mt">
            <div class="card-header py-3">
                <h5 class="mb-0">Директор</h5>
            </div>
            <div class="card-body">
                <form class="row g-3" id="customerFilter">
                    <div class="col-2">
                        <label class="form-label">Менеджер по продажам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Водитель</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Бухгалтер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Офис-менеджер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Специалист по договорам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Специалист по П. П.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Ассистент</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Юрист</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Снабженец</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Слесарь</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Главный механик</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Руководитель Т. О.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <div class="col-lg-12 flex">

        <div class="card w-100 mt">
            <div class="card-header py-3">
                <h5 class="mb-0">Бухгалтер</h5>
            </div>
            <div class="card-body">
                <form class="row g-3" id="customerFilter">
                    <div class="col-2">
                        <label class="form-label">Менеджер по продажам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Водитель</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Директор</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Офис-менеджер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Специалист по договорам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Специалист по П. П.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Ассистент</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Юрист</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Снабженец</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Слесарь</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Главный механик</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Руководитель Т. О.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="col-lg-12 flex">

        <div class="card w-100 mt">
            <div class="card-header py-3">
                <h5 class="mb-0">Офис-менеджер</h5>
            </div>
            <div class="card-body">
                <form class="row g-3" id="customerFilter">
                    <div class="col-2">
                        <label class="form-label">Менеджер по продажам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Водитель</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Директор</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Бухгалтер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Специалист по договорам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Специалист по П. П.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Ассистент</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Юрист</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Снабженец</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Слесарь</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Главный механик</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Руководитель Т. О.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>





    <div class="col-lg-12 flex">

        <div class="card w-100 mt">
            <div class="card-header py-3">
                <h5 class="mb-0">Специалист по договорам</h5>
            </div>
            <div class="card-body">
                <form class="row g-3" id="customerFilter">
                    <div class="col-2">
                        <label class="form-label">Менеджер по продажам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Водитель</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Директор</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Бухгалтер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Офис-менеджер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Специалист по П. П.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Ассистент</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Юрист</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Снабженец</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Слесарь</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Главный механик</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Руководитель Т. О.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <div class="col-lg-12 flex">

        <div class="card w-100 mt">
            <div class="card-header py-3">
                <h5 class="mb-0">Специалист по П. П.</h5>
            </div>
            <div class="card-body">
                <form class="row g-3" id="customerFilter">
                    <div class="col-2">
                        <label class="form-label">Менеджер по продажам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Водитель</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Директор</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Бухгалтер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Офис-менеджер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Специалист по договорам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Ассистент</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Юрист</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Снабженец</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Слесарь</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Главный механик</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Руководитель Т. О.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>





    <div class="col-lg-12 flex">

        <div class="card w-100 mt">
            <div class="card-header py-3">
                <h5 class="mb-0">Ассистент</h5>
            </div>
            <div class="card-body">
                <form class="row g-3" id="customerFilter">
                    <div class="col-2">
                        <label class="form-label">Менеджер по продажам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Водитель</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Директор</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Бухгалтер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Офис-менеджер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Специалист по договорам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Специалист по П. П.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Юрист</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Снабженец</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Слесарь</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Главный механик</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Руководитель Т. О.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <div class="col-lg-12 flex">

        <div class="card w-100 mt">
            <div class="card-header py-3">
                <h5 class="mb-0">Юрист</h5>
            </div>
            <div class="card-body">
                <form class="row g-3" id="customerFilter">
                    <div class="col-2">
                        <label class="form-label">Менеджер по продажам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Водитель</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Директор</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Бухгалтер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Офис-менеджер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Специалист по договорам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Специалист по П. П.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Ассистент</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Снабженец</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Слесарь</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Главный механик</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Руководитель Т. О.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <div class="col-lg-12 flex">

        <div class="card w-100 mt">
            <div class="card-header py-3">
                <h5 class="mb-0">Снабженец</h5>
            </div>
            <div class="card-body">
                <form class="row g-3" id="customerFilter">
                    <div class="col-2">
                        <label class="form-label">Менеджер по продажам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Водитель</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Директор</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Бухгалтер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Офис-менеджер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Специалист по договорам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Специалист по П. П.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Ассистент</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Юрист</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Слесарь</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Главный механик</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Руководитель Т. О.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <div class="col-lg-12 flex">

        <div class="card w-100 mt">
            <div class="card-header py-3">
                <h5 class="mb-0">Слесарь</h5>
            </div>
            <div class="card-body">
                <form class="row g-3" id="customerFilter">
                    <div class="col-2">
                        <label class="form-label">Менеджер по продажам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Водитель</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Директор</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Бухгалтер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Офис-менеджер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Специалист по договорам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Специалист по П. П.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Ассистент</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Юрист</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Снабженец</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Главный механик</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Руководитель Т. О.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="col-lg-12 flex">

        <div class="card w-100 mt">
            <div class="card-header py-3">
                <h5 class="mb-0">Главный механик</h5>
            </div>
            <div class="card-body">
                <form class="row g-3" id="customerFilter">
                    <div class="col-2">
                        <label class="form-label">Менеджер по продажам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Водитель</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Директор</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Бухгалтер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Офис-менеджер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Специалист по договорам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Специалист по П. П.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Ассистент</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Юрист</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Снабженец</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Слесарь</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Руководитель Т. О.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="col-lg-12 flex">

        <div class="card w-100 mt">
            <div class="card-header py-3">
                <h5 class="mb-0">Руководитель Т. О.</h5>
            </div>
            <div class="card-body">
                <form class="row g-3" id="customerFilter">
                    <div class="col-2">
                        <label class="form-label">Менеджер по продажам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Водитель</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Директор</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Бухгалтер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Офис-менеджер</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Специалист по договорам</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Специалист по П. П.</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Ассистент</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Юрист</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Снабженец</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Слесарь</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Главный механик</label>
                        <select class="form-select" name="vod" id="">
                            <option value="true">Взаимодействует</option>
                            <option value="false">Не взаимодействует</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>