@extends('layout')
@section('main_content')
    <form method="post" action="../handlers/register.php">

        <div class="row mt">
            <div class="col-12 col-lg-9 d-flex" style="width: 100%">
                <div class="card w-100 mb-5">
                    <div class="card-body mb-5">
                        <h1 class="center">Регистрация</h1>

                        <h4 class="mb-0 center mt">Имя</h4>
                        <div style="margin: auto" class="col-5 center mt-2">
                            <input name="name" type="text" value="" class="col-4 form-control center">
                        </div>

                        <h4 class="mb-0 center mt">Фамилия</h4>
                        <div style="margin: auto" class="col-5 center mt-2">
                            <input name="surname" type="text" value="" class="col-4 form-control center">
                        </div>

                        <h4 class="mb-0 center mt">Отчество</h4>
                        <div style="margin: auto" class="col-5 center mt-2">
                            <input name="patronymic" type="text" value="" class="col-4 form-control center">
                        </div>

                        <h4 class="mb-0 center mt">Должность</h4>
                        <div style="margin: auto" class="col-5 center mt-2">
                            <select class="form-select" name="position" id="">
                                <option value="d1">Менеджер по продажам</option>
                                <option value="d2">Водитель</option>
                                <option value="d3">Директор</option>
                                <option value="d4">Бухгалтер</option>
                                <option value="d5">Офис-менеджер</option>
                                <option value="d6">Специалист по договорам</option>
                                <option value="d7">Специалист по подбору персонала</option>
                                <option value="d8">Ассистент</option>
                                <option value="d9">Юрист</option>
                                <option value="d10">Снабженец</option>
                                <option value="d11">Слесарь</option>
                                <option value="d12">Главный механик</option>
                                <option value="d13">Руководитель транспортного отдела</option>
                            </select>
                        </div>

                        <h4 class="mb-0 center mt">E-mail</h4>
                        <div style="margin: auto" class="col-5 center mt-2">
                            <input name="email" type="text" value="" class="col-4 form-control center">
                        </div>

                        <h4 class="mb-0 center mt">Пароль</h4>
                        <div style="margin: auto" class="col-5 center mt-2">
                            <input name="password" type="password" value="" class="col-4 form-control center">
                        </div>

                        <p class="center">
                            <a href="login" class="center">Еще нет аккаунта?</a>
                        </p>

                        <div class="col-12 minmt_div">
                            <button type="submit" class="btn btn-primary btn-lg minmt">Зарегистрироваться</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection
