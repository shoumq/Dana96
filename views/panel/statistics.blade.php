<?require $_SERVER['DOCUMENT_ROOT'].'/config/config.php';?>
@extends('layout')
@section('main_content')
    <div class="row d-flex">

        <h1 class="mt-3">Статистика</h1>

        <div class="col-12 col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Фамилия</th>
                        <th scope="col">Отчество</th>
                        <th scope="col">Должность</th>
                        <th scope="col">Оценка</th>
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
                        <td><?= $sr_mark ?></td>
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
