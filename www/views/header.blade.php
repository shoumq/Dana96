<header>
    <img src="https://dana96.ru/upload/CAllcorp2/0a8/0a858862fb1baf142b9a5666a035f592.svg" class="img_header" alt="">

    <?php if (isset($_COOKIE['id'])):?>

    <div style="margin-left: 60px" class="btn-group" role="group" aria-label="Basic example">
        <a href="/" type="button" class="btn btn-outline-secondary">Главная</a>
        <a href="/table" type="button" class="btn btn-outline-secondary">Таблица</a>
      </div>

      <form style="float: right; margin-top: 25px" class="" action="../handlers/logout.php" method="post">
        <button style="float: right" href="/" type="submit" class="btn btn-outline-secondary">Выйти</button>
      </form>

    <?php else:?>
    <?php endif;?>
</header>
