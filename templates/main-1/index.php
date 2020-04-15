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
    <div class="main__header">
      <div class="main__header__left">
        <a href="##">Покупателю</a>
        <span>|</span>
        <a href="##">Поставщику</a>
      </div>

      <div class="main__header__right">
        <a class="main__header__signin bkg-img" href="##">Вход</a>
        <a class="main__header__lang bkg-img" href="##">RU</a>
      </div>
    </div>

    <div class="main__header main__header_mobile">
      <div class="main__header__left">
        <a href="##">Покупателю</a>
        <span>|</span>
        <a href="##">Поставщику</a>
      </div>

      <div class="main__header__right">
        <a class="main__header__signin bkg-img" href="##">Вход</a>
        <a class="main__header__lang bkg-img" href="##">RU</a>
      </div>

      <div class="main__header__input">
        <a href="##"><img src="../../common/img/main-logo-small.png"/></a>
        <div>
          <input type="text" onfocus="document.querySelector('.mobile-search').classList.add('show')"/>
          <a href="##"><img src="../../common/svg/search-icon.svg"/></a>
        </div>
      </div>
    </div>

    <div class="mobile-search">
      <div class="mobile-search__input">
        <input type="text" placeholder=""/>
        <a href="##"><img src="../../common/svg/search-icon.svg"/></a>
      </div>
      <div class="mobile-search__results">
        <a class="bkg-img" href="##">Гипсокартон</a>
        <a class="bkg-img" href="##">Гипсокартон</a>
        <a class="bkg-img" href="##">Гипсокартон</a>
        <a class="bkg-img" href="##">Гипсокартон</a>
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
