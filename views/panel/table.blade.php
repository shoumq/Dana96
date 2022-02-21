<?require $_SERVER['DOCUMENT_ROOT'].'/config/config.php';?>
@extends('layout')
@section('main_content')
    <div class="row d-flex">
        <div class="col-lg-3">

            {{-- <div class="card w-100 mt">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Добавить сотрудника</h5>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" id="customerFilter">
                            <div class="col-12">
                                <label class="form-label">Имя</label>
                                <input name="idc" type="text" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Фамилия</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Отчество</label>
                                <input name="city" name="from_city" class="form-control mb-3" id="inputCity" type="text" aria-label="Откуда">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Должность</label>
                                <input name="phone" type="text" class="form-control">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn btn-primary">Добавить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> --}}

            <div class="card w-100 mt">
                <div class="card-header py-3">
                    <h5 class="mb-0">Удалить сотрудника</h5>
                </div>
                <div class="card-body">
                    <form class="row g-3" method="POST" action="../handlers/delete.php"">
                        <div class="col-12">
                            <label class="form-label"># сотрудника</label>
                            <input name="idc" type="text" class="form-control">
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 col-lg-12">
                    <table class="table mt">
                        <thead>
                            <tr>
                                <th scope="col">Должность</th>
                                <th scope="col">Взаимодействие</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Менеджер по продажам</td>
                                <td>Бухгалтер, офис-менеджер, специалист по договорам, руководитель транспортного отдела
                                </td>
                            </tr>
                            <tr>
                                <td>Водитель</td>
                                <td>Менеджер по продажам, Бухгалтер, Слесарь, Руководитель транспортного отдела</td>
                            </tr>
                            <tr>
                                <td>Директор</td>
                                <td>Все должности</td>
                            </tr>
                            <tr>
                                <td>Бухгалтер</td>
                                <td>Менеджер по продажам, Офис-менеджер, Специалист по договорам</td>
                            </tr>
                            <tr>
                                <td>Офис-менеджер</td>
                                <td>Менеджер по продажам, Бухгалтер, Специалист по договорам, Специалист по подбору
                                    персонала, Ассистент, Юрист, Руководитель транспортного отдела
                                </td>
                            </tr>
                            <tr>
                                <td>Специалист по договорам</td>
                                <td>Менеджер по продажам, Бухгалтер, Офис-менеджер, Юрист, Руководитель транспортного отдела
                                </td>
                            </tr>
                            <tr>
                                <td>Специалист по подбору персонала</td>
                                <td>Бухгалтер, Офис-менеджер, Специалист по договорам, Руководитель транспортного отдела
                                </td>
                            </tr>
                            <tr>
                                <td>Ассистент</td>
                                <td>Все должности</td>
                            </tr>
                            <tr>
                                <td>Юрист</td>
                                <td>Менеджер по продажам, Бухгалтер, Офис-менеджер, Специалист по договорам, Специалист по
                                    подбору персонала, Руководитель транспортного отдела</td>
                            </tr>
                            <tr>
                                <td>Снабженец</td>
                                <td>Водитель, Слесарь, Главный механик, Руководитель транспортного отдела</td>
                            </tr>
                            <tr>
                                <td>Слесарь</td>
                                <td>Водитель</td>
                            </tr>
                            <tr>
                                <td>Главный механик</td>
                                <td>Менеджер по продажам, Водитель, Бухгалтер, Офис-менеджер, Специалист по подбору
                                    персонала, Снабженец, Слесарь, Руководитель транспортного отдела</td>
                            </tr>
                            <tr>
                                <td>Руководитель транспортного отдела</td>
                                <td>Менеджер по продажам, Водитель, Бухгалтер, Офис-менеджер, Специалист по подбору
                                    персонала, Снабженец, Слесарь</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-9">
            <table class="table mt">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Фамилия</th>
                        <th scope="col">Отчество</th>
                        <th scope="col">Должность</th>
                        <th scope="col">Рейтинг</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $mysql = new mysqli($adress_db, $user_name_db, $password_db, $db_name_db);
                    $result = $mysql->query("SELECT * FROM users");
                    while ($row = $result->fetch_assoc()) { 
                        
                    $rp = $row['position'];
                    $pos_res = $mysql->query("SELECT * FROM position WHERE name_id = '$rp'");
                    $user = $pos_res->fetch_assoc();

                    $rm = $row['mark'];
                    $rcm = $row['count_mark'];
                    
                    if(@eval(" try{ \$sr_mark = $rm/$rcm; } catch(Exception \$e){}") === FALSE)
                        $sr_mark = "Оценок нет";?>

                    <tr>
                        <th scope="row"><?= $row['id'] ?></th>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['surname'] ?></td>
                        <td><?= $row['patronymic'] ?></td>
                        <td><?= $user['name'] ?></td>
                        <td><?= round($sr_mark, 1) ?></td>
                    </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
    </div>
    </body>

    </html>
@endsection
