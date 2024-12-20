<?
$title = 'Услуги';
$description = 'Продажа и изготовление деревянных изделий';
$keywords = 'Деревянные изделия на заказ, столы лофт, тумбы, деревянные стулья, для ресторанов и кафе, мебель из дерева';
$page = 'services';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";
?>

<div class="container py-5" style="flex: 1;">

  <h2 class="text-center">Гравировка по дереву и оргстеклу</h2>

  <div class="d-flex py-5">
    <div class="ki-special-text-wrapper p-3" style="width: 60%">
      <div class="ki-special-title mb-3">
        <h4>Профессиональная гравировка на различных материалах</h4>
      </div>
      <div class="ki-special-text " style="font-size: 1.25em; text-align: justify">
        <p>
          "Древопласт" предлагает профессиональные услуги по гравировке на различных материалах.
          Наше современное оборудование с ЧПУ позволяет наносить изображения любой сложности как на деревянные поверхности, так и на оргстекло (акрил).
          При гравировке на дереве мы создаем уникальные сувениры, памятные таблички, декоративные панно и элементы интерьера.
          Глубина и четкость гравировки позволяют получить эффектные изделия с проработкой мельчайших деталей.
          Гравировка на оргстекле открывает широкие возможности для создания эффектных вывесок, указателей, наградных плакеток и бизнес-сувениров.
          Прозрачность материала в сочетании с гравировкой создает потрясающий визуальный эффект.
          <br>Наши возможности включают:
        <ul>
          <li>Нанесение корпоративных логотипов</li>
          <li>Создание именных табличек и указателей</li>
          <li>Брендирование сувенирной продукции</li>
          <li>Изготовление информационных вывесок</li>
        </ul>
        Мы гарантируем высокую точность воспроизведения любых шрифтов и изображений, включая самые мелкие детали.
        Работаем как с единичными заказами, так и с крупными партиями брендированной продукции.
        Доверьте нанесение вашего логотипа профессионалам "Древопласт"!
        Мы обеспечим качественное исполнение и точное соответствие фирменному стилю вашей компании.
        </p>
      </div>
    </div>
    <div class="p-3" style="width: 40%">
      <img style="max-width: 100%;" src="/assets/images/services/engraving7.jpg " alt="">
    </div>

  </div>
  <hr>
  <div class="d-flex py-5" style="flex-wrap: wrap;" onclick="onImageClick(event)">
    <button class="ki-modal-trigger ki-special-image-wrapper p-3" data-toggle="modal" data-target="#modalCenter">
      <img style="max-width: 100%;" src="/assets/images/services/engraving1.jpg" alt="">
    </button>
    <button class="ki-modal-trigger ki-special-image-wrapper p-3" data-toggle="modal" data-target="#modalCenter">
      <img style="max-width: 100%;" src="/assets/images/services/engraving6.jpg" alt="">
    </button>
    <button class="ki-modal-trigger ki-special-image-wrapper p-3" data-toggle="modal" data-target="#modalCenter">
      <img style="max-width: 100%;" src="/assets/images/services/engraving2.jpg" alt="">
    </button>
    <button class="ki-modal-trigger ki-special-image-wrapper p-3" data-toggle="modal" data-target="#modalCenter">
      <img style="max-width: 100%;" src="/assets/images/services/engraving5.jpg" alt="">
    </button>
    <button class="ki-modal-trigger ki-special-image-wrapper p-3" data-toggle="modal" data-target="#modalCenter">
      <img style="max-width: 100%;" src="/assets/images/services/engraving3.jpg" alt="">
    </button>
    <button class="ki-modal-trigger ki-special-image-wrapper p-3" data-toggle="modal" data-target="#modalCenter">
      <img style="max-width: 100%;" src="/assets/images/services/engraving4.jpg" alt="">
    </button>
    <button class="ki-modal-trigger ki-special-image-wrapper p-3" data-toggle="modal" data-target="#modalCenter">
      <img style="max-width: 100%;" src="/assets/images/services/engraving8.jpg" alt="">
    </button>
    <button class="ki-modal-trigger ki-special-image-wrapper p-3" data-toggle="modal" data-target="#modalCenter">
      <img style="max-width: 100%;" src="/assets/images/services/engraving9.jpg" alt="">
    </button>
    <button class="ki-modal-trigger ki-special-image-wrapper p-3" data-toggle="modal" data-target="#modalCenter">
      <img style="max-width: 100%;" src="/assets/images/services/engraving10.jpg" alt="">
    </button>

  </div>

</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>