<?php $page = preg_replace('/[^a-z\-_]/', '', $_GET['page'] ) ?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../../common/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../main.css"/>
    <link rel="stylesheet" type="text/css" href="../../content/<?php echo $page ?>/style.css"/>
    <title>{{ title }}</title>
  </head>
  <body><div id="content">
    <div class="main__header main__header_alt-2">
      <div class="main__header__left">
        <a href="##"><img class="main__header__left__logo" src="../../common/img/main-logo-mid.png"/></a>
        <div>
          <a href="##">Покупателю</a>
          <span>|</span>
          <a href="##">Поставщику</a>
        </div>
      </div>
    </div>

    <div class="main__header main__header_mobile main__header_alt-2">
      <div class="main__header__left">
        <a href="##"><img class="main__header__left__logo" src="../../common/img/main-logo-mid.png"/></a>
      </div>
    </div>

    <div class="main__content">
      <?php include("../../content/$page/index.html") ?>
    </div>

    <div class="main__footer">
      <div class="main__footer__links">
        <div>
          <a href="##">О сервисе</a>
          <a href="##">Сотрудничество</a>
        </div>
        <div>
          <a href="##">Конфиденциальность</a>
          <a href="##">Контакты</a>
        </div>
      </div>

      <div class="main__footer__label">Powered by  Sixhands</div>
    </div>
  </div></body>
</html>
