<?
$title = 'Древопласт';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

$dir = $_SERVER['DOCUMENT_ROOT'] . '/assets/images/slider_min';


$slider_data = array_values(array_diff(scandir($dir), array('..', '.')));
?>
<!-- Slider -->
<section class="slider">
  <div style="flex:1;">
    <div class="row m-0">
      <div id="carouselExampleAutoplaying" class="carousel slide p-0" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
          <? foreach ($slider_data as $key => $item) { ?>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="<?= $key ?>" aria-label="Слайд <?= $key ?>" class="<? if ($key == 0) echo 'active' ?>" aria-current="<?= $key == 0 ?>"></button>
          <? } ?>
        </div>
        <div class="carousel-inner" role="listbox">

          <? foreach ($slider_data as $key => $item) {
          ?>
            <div class="carousel-item <? if ($key == 0) echo 'active' ?>">
              <div class="card" style="border: none;">
                <div class="card-img">
                  <img src="/assets/images/slider_min/<?= $item ?>" class="img-fluid" alt="<?= $item ?>" style="width: 100%; max-height: 70vh;">
                </div>
              </div>
            </div>
          <? } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Следующий</span>
        </button>
      </div>
    </div>
  </div>
</section>
<!-- END slider -->
<!-- Welcome -->
<!-- <div class="welcome">
  <div class="welcome-overlay">
    <h1 class="welcome-title">Изделия из дерева любой сложности</h2>
  </div>
</div> -->
<!-- END welcome -->

<!-- О компании -->
<section class="about" id="about">
  <div class="container">
    <!-- <hr class="ki-custom-hr"> -->
    <div class='about-wrapper d-flex gap-5 my-5 align-items-center'>
      <!-- <div class="about-image-wrapper">
        <img class="about-image" src="/assets/images/about_test.jpg" alt="Наша команда">
      </div> -->
      <div class="about-text-wrapper my-5">
        <h2 class="text-center mb-5 fs-1">Немного о нас</h2>
        <p style="text-align: justify; line-height: 1.8; font-size: 1.2em; text-indent: 20px;">Мастерская «Древопласт» — это столярная мастерская, специализирующаяся на производстве изделий из дерева и пластика. Мы создаем товары как для дома, так и для бизнеса, придерживаясь принципов минимализма, эстетики и практичности.</p>
        <p style="text-align: justify; line-height: 1.8; font-size: 1.2em; text-indent: 20px;">Каждый заказ мы рассматриваем индивидуально и разрабатываем соответствующие чертежи. Кроме того, на наших изделиях мы можем выполнить гравировку вашего логотипа или любой надписи. Каждое изделие изготавливается с особой тщательностью и вниманием к деталям, воплощая в жизнь ваши самые смелые идеи. Все наши товары обработаны маслом или воском для долговечности и защиты.</p>
        <p style="text-align: justify; line-height: 1.8; font-size: 1.2em; text-indent: 20px;">Мы — команда молодых и энергичных специалистов c творческим подходом, что позволяет нам создавать настоящие произведения искусства из дерева. Мы дорожим доверием наших клиентов и всегда стремимся превзойти их ожидания и будем рады сотрудничеству с каждым, кто к нам обращается!</p>
        <p style="text-align: justify; line-height: 1.8; font-size: 1.2em; text-indent: 20px;">Обратившись к нам, вы получите не просто деревянные изделия, а эксклюзивные предметы, которые станут украшением вашего дома или офиса и будут радовать вас долгие годы. Позвольте нам воплотить в жизнь ваши творческие замыслы!</p>
      </div>
    </div>
  </div>
</section>

<!-- End О компании -->

<!-- Преимущества -->
<section class="advantages">
  <div class="advantages-overlay">
    <div class="container py-5">
      <div class="py-5">
        <h2 class="text-center mb-5 fs-1">Наши преимущества</h2>

        <div class="row justify-content-around align-items-start">
          <div class="col-5 d-flex gap-1 ki-advantages-card">
            <div class="">
              <!-- <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 576 512">
                <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" />
              </svg> -->
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z" />
              </svg>
            </div>
            <div class="">
              <h3 class="uk-margin-small-bottom" style="margin-bottom: 5px;">Высокое качество</h3>
              <p class="uk-margin-remove">Высокое качество материалов и исполнения. Мы тщательно отбираем лучшую древесину от надежных поставщиков и используем только экологически чистые материалы. Каждое изделие изготавливается с особой тщательностью и вниманием к деталям</p>
            </div>
          </div>

          <div class="col-5 d-flex gap-1 ki-advantages-card">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 640 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M192 256c61.9 0 112-50.1 112-112S253.9 32 192 32 80 82.1 80 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C51.6 288 0 339.6 0 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zM480 256c53 0 96-43 96-96s-43-96-96-96-96 43-96 96 43 96 96 96zm48 32h-3.8c-13.9 4.8-28.6 8-44.2 8s-30.3-3.2-44.2-8H432c-20.4 0-39.2 5.9-55.7 15.4 24.4 26.3 39.7 61.2 39.7 99.8v38.4c0 2.2-.5 4.3-.6 6.4H592c26.5 0 48-21.5 48-48 0-61.9-50.1-112-112-112z" />
              </svg>
            </div>
            <div class="">
              <h3 class="uk-margin-small-bottom" style="margin-bottom: 5px;">Индивидуальный подход</h3>
              <p class="uk-margin-remove">Индивидуальный подход и творческий потенциал. Наши мастера обладают высочайшей квалификацией и креативным мышлением, что позволяет им воплощать в жизнь самые смелые идеи и пожелания клиентов. Мы готовы реализовать любые чертежи и фотографии</p>
            </div>
          </div>
        </div>

        <div class="row justify-content-around align-items-start">
          <div class="col-5 d-flex gap-1 ki-advantages-card">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M488.6 250.2L392 214V105.5c0-15-9.3-28.4-23.4-33.7l-100-37.5c-8.1-3.1-17.1-3.1-25.3 0l-100 37.5c-14.1 5.3-23.4 18.7-23.4 33.7V214l-96.6 36.2C9.3 255.5 0 268.9 0 283.9V394c0 13.6 7.7 26.1 19.9 32.2l100 50c10.1 5.1 22.1 5.1 32.2 0l103.9-52 103.9 52c10.1 5.1 22.1 5.1 32.2 0l100-50c12.2-6.1 19.9-18.6 19.9-32.2V283.9c0-15-9.3-28.4-23.4-33.7zM358 214.8l-85 31.9v-68.2l85-37v73.3zM154 104.1l102-38.2 102 38.2v.6l-102 41.4-102-41.4v-.6zm84 291.1l-85 42.5v-79.1l85-38.8v75.4zm0-112l-102 41.4-102-41.4v-.6l102-38.2 102 38.2v.6zm240 112l-85 42.5v-79.1l85-38.8v75.4zm0-112l-102 41.4-102-41.4v-.6l102-38.2 102 38.2v.6z" />
              </svg>
            </div>
            <div class="">
              <h3 class="uk-margin-small-bottom" style="margin-bottom: 5px;">Широкий ассортимент</h3>
              <p class="uk-margin-remove">Мы можем изготовить на заказ не только мебель, но и разнообразные предметы интерьера, декора, элементы конструкций и другие деревянные изделия любой сложности</p>
            </div>
          </div>

          <div class="col-5 d-flex gap-1 ki-advantages-card">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M288 32C128.9 32 0 160.9 0 320c0 52.8 14.3 102.3 39.1 144.8 5.6 9.6 16.3 15.2 27.4 15.2h443c11.1 0 21.8-5.6 27.4-15.2C561.8 422.3 576 372.8 576 320c0-159.1-128.9-288-288-288zm0 64c14.7 0 26.6 10.1 30.3 23.7-1.1 2.3-2.6 4.2-3.5 6.7l-9.2 27.7c-5.1 3.5-11 6-17.6 6-17.7 0-32-14.3-32-32S270.3 96 288 96zM96 384c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm48-160c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm246.8-72.4l-61.3 184C343.1 347.3 352 364.5 352 384c0 11.7-3.4 22.6-8.9 32H232.9c-5.5-9.5-8.9-20.3-8.9-32 0-33.9 26.5-61.4 59.9-63.6l61.3-184c4.2-12.6 17.7-19.5 30.4-15.2 12.6 4.2 19.4 17.8 15.2 30.4zm14.7 57.2l15.5-46.6c3.5-1.3 7.1-2.2 11.1-2.2 17.7 0 32 14.3 32 32s-14.3 32-32 32c-11.4 0-20.9-6.3-26.6-15.2zM480 384c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z" />
              </svg>
            </div>
            <div class="">
              <h3 class="uk-margin-small-bottom" style="margin-bottom: 5px;">Гибкость и оперативность</h3>
              <p class="uk-margin-remove">Мы готовы быстро и качественно выполнить заказ в максимально сжатые сроки, подстраиваясь под потребности и пожелания клиента</p>
            </div>
          </div>
        </div>

        <div class="row justify-content-around align-items-start">

          <div class="col-5 d-flex gap-1 ki-advantages-card">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-building-check" viewBox="0 0 16 16">
                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514Z" />
                <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1V1Z" />
                <path d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z" />
              </svg>
            </div>
            <div class="">
              <h3 class="uk-margin-small-bottom" style="margin-bottom: 5px;">Безупречный сервис</h3>
              <p class="uk-margin-remove">Мы дорожим доверием наших клиентов и всегда стремимся предоставить им индивидуальный подход и высокий уровень обслуживания на всех этапах сотрудничества</p>
            </div>
          </div>

          <div class="col-5 d-flex gap-1 ki-advantages-card">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 48c110.5 0 200 89.5 200 200 0 110.5-89.5 200-200 200-110.5 0-200-89.5-200-200 0-110.5 89.5-200 200-200m140.2 130.3l-22.5-22.7c-4.7-4.7-12.3-4.7-17-.1L215.3 303.7l-59.8-60.3c-4.7-4.7-12.3-4.7-17-.1l-22.7 22.5c-4.7 4.7-4.7 12.3-.1 17l90.8 91.5c4.7 4.7 12.3 4.7 17 .1l172.6-171.2c4.7-4.7 4.7-12.3 .1-17z" />
              </svg>
            </div>
            <div class="">
              <h3 class="uk-margin-small-bottom" style="margin-bottom: 5px;">Гарантия качества и долговечности</h3>
              <p class="uk-margin-remove">Мы уверены в надежности и долговечности всех наших изделий, поэтому предоставляем гарантию на них</p>
            </div>
          </div>
        </div>
        <!-- Таким образом, компания "Дерево Мастер" выделяется на фоне конкурентов благодаря сочетанию высокого качества, творческого подхода, широкого ассортимента и безупречного сервиса, что позволяет нам создавать по-настоящему уникальные деревянные изделия. -->
      </div>
      <hr class="ki-custom-hr">
    </div>
  </div>
</section>
<!-- End Преимущества -->

<!-- Материалы  -->
<section class="materials">
  <div class="container">
    <!-- <hr class="ki-custom-hr"> -->
    <div class='about-wrapper d-flex flex-column gap-5 my-5 align-items-center'>
      <!-- <div class="about-image-wrapper">
        <img class="about-image" src="/assets/images/about_test.jpg" alt="Наша команда">
      </div> -->
      <div class="about-text-wrapper mt-5">
        <h2 class="text-center mb-5 fs-1">Материалы</h2>
        <p style="text-align: justify; line-height: 1.2; font-size: 1.5em">
          Для изготовления наших изделий мы используем только качественные и отборные материалы. Работаем с различными породами древесины во всех оттенках, а также
          работаем с дсп, и лдсп.
        </p>
      </div>

      <div class="material-cards-wrapper d-flex justify-content-between">
        <div class="material-card">
          <img src="./assets/images/materials/buk.jpg" alt="">
        </div>
        <div class="material-card">
          <img src="./assets/images/materials/listvennica.jpg" alt="">
        </div>
        <div class="material-card">
          <img src="./assets/images/materials/olive.jpg" alt="">
        </div>
        <div class="material-card">
          <img src="/assets/images/materials/venge.jpg" alt="">
        </div>
        <div class="material-card">
          <img src="/assets/images/materials/vishnya.jpg" alt="">
        </div>
        <div class="material-card">
          <img src="/assets/images/materials/wood_black.jpg" alt="">
        </div>
        <div class="material-card">
          <img src="/assets/images/materials/yasen.jpg" alt="">
        </div>
        <div class="material-card">
          <img src="/assets/images/materials/wood_dark.jpg" alt="">
        </div>

      </div>
    </div>
  </div>
</section>
<!-- END Материалы  -->

<!-- По индивидуальному заказу -->
<section class="individual">
  <div class="individual-overlay">
    <div class="container py-5">
      <div class="py-5">
        <h2 class="text-center mb-5 fs-1">Деревянные изделия по индивидуальному заказу</h2>
        <p style="text-align: justify; line-height: 1.2; font-size: 1.5em; text-indent: 20px;">Мы предлагаем полный цикл изготовления продукции - от проработки технической документации до финальной реализации проекта. Благодаря современному оборудованию и опытным специалистам, мы гарантируем высокую точность исполнения и соответствие всем заданным параметрам.</p>
        <p style="text-align: justify; line-height: 1.2; font-size: 1.5em; text-indent: 20px;">Каждый проект для нас уникален, и мы уделяем особое внимание требованиям и пожеланиям клиента. Наши технологи готовы проконсультировать по всем техническим вопросам и предложить оптимальные решения для вашей задачи. Мы обеспечиваем строгий контроль качества на всех этапах производства и соблюдаем согласованные сроки изготовления.</p>
        <p style="text-align: justify; line-height: 1.2; font-size: 1.5em; text-indent: 20px;"> Доверьте реализацию ваших проектов профессионалам - мы воплотим в жизнь изделия любой сложности по вашим чертежам!</p>
        </p>
      </div>
      <hr class="ki-custom-hr">

    </div>
  </div>
</section>
<!-- END По индивидуальному заказу -->

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>