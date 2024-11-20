<!DOCTYPE html>
<html lang="en">
<?
if (!isset($page)) {
  $page = '/';
}

?>

<head>
  <meta charset="UTF-8">
  <title><?= $title ?></title>
  <meta name="description" content="<?= $description ?>">
  <meta name="keywords" content="<?= $keywords ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-navbar-dropdown.css" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/style.css" crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="navbar sticky-top navbar-expand-lg bg-dark ki-navbar" data-bs-theme="dark">
      <div class="container-fluid container">
        <a class="navbar-brand" href="/"><img src="/assets/images/logo/logo_yellow_wb_min.svg" alt="Древопласт" style="height: 120px; width: 120px; border-radius: 50%;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item ">
              <a class="nav-link <? if ($page === '/') echo 'active' ?>" aria-current="page" href="/">Главная</a>
            </li>

            <!--  -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle <? if ($page === 'catalog') echo 'active' ?>" href="#" id="dropdown1" data-flip="false"
                data-toggle="dropdown" aria-expanded="false">Каталог</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown1">

                <li class="dropdown">
                  <a class="dropdown-item dropdown-toggle" href="/catalog/tables/">Столы</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/catalog/tables/products?sub=1">Лофт</a></li>
                    <li><a class="dropdown-item" href="/catalog/tables/products?sub=2">С эпоксидной смолой</a></li>
                    <li><a class="dropdown-item" href="/catalog/tables/products?sub=3">Деревянные (обеденные)</a></li>
                    <li><a class="dropdown-item" href="/catalog/tables/products?sub=4">Журнальные</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a class="dropdown-item dropdown-toggle" href="/catalog/stools/">Табуретки</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/catalog/stools/products?sub=5">Лофт</a></li>
                    <li><a class="dropdown-item" href="/catalog/stools/products?sub=6">Деревянные</a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="/catalog/stands_loft">Тумбы лофт</a></li>
                <li><a class="dropdown-item" href="/catalog/chairs_wood">Стулья деревянные</a></li>
                <li><a class="dropdown-item" href="/catalog/box_packing">Коробки для упаковки</a></li>
                <li class="dropdown">
                  <a class="dropdown-item dropdown-toggle" href="/catalog/restaurant">Для ресторанов и кафе</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/catalog/restaurant/products?sub=7">Разделочные доски</a></li>
                    <li><a class="dropdown-item" href="/catalog/restaurant/products?sub=8">Подносы</a></li>
                    <li><a class="dropdown-item" href="/catalog/restaurant/products?sub=9">Салфетницы</a></li>
                    <li><a class="dropdown-item" href="/catalog/restaurant/products?sub=10">Подставки</a></li>
                    <li><a class="dropdown-item" href="/catalog/restaurant/products?sub=11">Блюда</a></li>
                    <li><a class="dropdown-item" href="/catalog/restaurant/products?sub=12">Подносы</a></li>
                    <li><a class="dropdown-item" href="/catalog/restaurant/products?sub=13">Рейки на фасады стен</a></li>
                    <li><a class="dropdown-item" href="/catalog/restaurant/products?sub=14">Ящики под бутылки</a></li>
                    <li><a class="dropdown-item" href="/catalog/restaurant/products?sub=15">Инвентарь столовый</a></li>
                  </ul>
                </li>
                <!-- <li><a class="dropdown-item" href="/catalog/sandwich">Фрезеровочные материалы</a></li> -->
                <li><a class="dropdown-item" href="/catalog/gardens">Садовая мебель</a></li>
                <li><a class="dropdown-item" href="/catalog/specials">Изделия под заказ</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle <? if ($page === 'services') echo 'active' ?>" href="#" id="dropdown2" data-flip="false"
                data-toggle="dropdown" aria-expanded="false">Услуги</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown2">
                <li><a class="dropdown-item" href="/services/cnc_wood">Резка ЧПУ по дереву</a></li>
                <li><a class="dropdown-item" href="/services/cnc_plast">Резка ЧПУ по пластику</a></li>
                <li><a class="dropdown-item" href="/services/engraving">Гравировка по дереву и оргстеклу</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link <? if ($page === 'contacts') echo 'active' ?>" aria-current="page" href="/contacts/">Контакты</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/#about">О нас</a>
            </li>
          </ul>
          <div class="d-flex align-items-center" style="gap: 10px">
            <a class="ki-nav-phone-link" href="tel:+79936127335">+7 (993) 612-73-35</a>
            <a href="https://t.me/kiska_14" target="_blank" class="btn btn-outline-info" title="Перейти в Telegram"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09" />
              </svg></a>
            <a href="https://api.whatsapp.com/send/?phone=89936127335&text&type=phone_number&app_absent=0" target="_blank" class="btn btn-outline-success" title="Написать в WhatsApp"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
              </svg></a>
            <a href="/cart" class="btn btn-outline-danger" title="Перейти в корзину">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="16" height="16" fill="currentColor"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
              </svg>
            </a>
          </div>
        </div>
    </nav>

  </header>