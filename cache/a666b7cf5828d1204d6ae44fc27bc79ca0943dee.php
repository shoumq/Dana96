<header>
    <img src="https://dana96.ru/upload/CAllcorp2/0a8/0a858862fb1baf142b9a5666a035f592.svg" class="img_header" alt="">

    <div style="margin-left: 60px" class="btn-group" role="group" aria-label="Basic example">
        <a href="/" type="button" class="btn btn-outline-secondary">Главная</a>
        <?
        if($_COOKIE['position'] == 'd3'):
        ?>
        <a href="/table" type="button" class="btn btn-outline-secondary">Таблица</a>
        <?endif;?>
      </div>
</header>
