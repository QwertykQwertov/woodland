<?
$title = 'ИП Валентины';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

$dir = $_SERVER['DOCUMENT_ROOT'] . '/assets/images/slider';


$slider_data = array_values(array_diff(scandir($dir), array('..', '.')));
?>

<!-- Welcome -->
<div class="welcome">
  <div class="welcome-overlay">
    <h1 class="welcome-title">Изделия из дерева любой сложности</h2>
  </div>
</div>
<!-- END welcome -->

<!-- О компании -->
<section class="about">
  <div class="container">
    <!-- <hr class="ki-custom-hr"> -->
    <div class='about-wrapper d-flex gap-5 my-5 align-items-center'>
      <!-- <div class="about-image-wrapper">
        <img class="about-image" src="/assets/images/about_test.jpg" alt="Наша команда">
      </div> -->
      <div class="about-text-wrapper my-5">
        <h2 class="text-center mb-5 fs-1">Немного о нас</h2>
        <p style="text-align: justify; line-height: 1.8;">Представляем вам компанию <strong>"Дерево Мастер"</strong> - ведущего производителя высококачественных деревянных изделий на заказ. Наша команда профессионалов с многолетним опытом работы создает уникальные предметы мебели, декора и других деревянных конструкций по индивидуальным чертежам и фотографиям клиента.<br>

          Мы гордимся тем, что используем только экологически чистые материалы, тщательно отбирая лучшую древесину от надежных поставщиков. Каждое изделие изготавливается с особой тщательностью и вниманием к деталям, чтобы воплотить в жизнь ваши самые смелые идеи.<br>

          Наши мастера обладают высочайшей квалификацией и творческим подходом, что позволяет им создавать настоящие произведения искусства из дерева. Будь то элегантная мебель для дома, эксклюзивные предметы интерьера или уникальные декоративные элементы - мы воплощаем в реальность любые ваши пожелания.<br>

          Компания <strong>"Дерево Мастер"</strong> гарантирует высокое качество, надежность и долговечность всех наших изделий. Мы дорожим доверием наших клиентов и всегда стремимся превзойти их ожидания, предлагая индивидуальный подход и безупречный сервис на каждом этапе сотрудничества.<br>

          Обратившись к нам, вы получите не просто деревянные изделия, а эксклюзивные предметы, которые станут украшением вашего дома или офиса и будут радовать вас долгие годы. Позвольте нам воплотить в жизнь ваши творческие замыслы!</p>
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
        <h2 class="text-center mb-5 fs-1">Наши <span style="color: #e40024;">преимущества</span></h2>

        <div class="row justify-content-around align-items-start">
          <div class="col-5 d-flex gap-1 ki-advantages-card">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-journal-richtext" viewBox="0 0 16 16">
                <path d="M7.5 3.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047L11 4.75V7a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 7v-.5s1.54-1.274 1.639-1.208zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
              </svg>
            </div>
            <div class="">
              <h3 class="uk-margin-small-bottom" style="margin-bottom: 5px;">Высокое качество</h3>
              <p class="uk-margin-remove">Высокое качество материалов и исполнения. Мы тщательно отбираем лучшую древесину от надежных поставщиков и используем только экологически чистые материалы. Каждое изделие изготавливается с особой тщательностью и вниманием к деталям</p>
            </div>
          </div>

          <div class="col-5 d-flex gap-1 ki-advantages-card">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z" />
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
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-building-check" viewBox="0 0 16 16">
                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514Z" />
                <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1V1Z" />
                <path d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z" />
              </svg>
            </div>
            <div class="">
              <h3 class="uk-margin-small-bottom" style="margin-bottom: 5px;">Широкий ассортимент</h3>
              <p class="uk-margin-remove">Мы можем изготовить на заказ не только мебель, но и разнообразные предметы интерьера, декора, элементы конструкций и другие деревянные изделия любой сложности</p>
            </div>
          </div>

          <div class="col-5 d-flex gap-1 ki-advantages-card">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z" />
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
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z" />
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

<!-- Slider -->
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
                <img src="/assets/images/slider/<?= $item ?>" class="img-fluid" alt="<?= $item ?>" style="width: 100%; max-height: 70vh;">
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
<!-- END slider -->
<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>