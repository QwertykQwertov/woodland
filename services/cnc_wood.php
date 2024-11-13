<?
$title = 'Каталог';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'catalog';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";
?>

<div class="container py-5" style="flex: 1;">

  <h2 class="text-center">Резка ЧПУ по дереву</h2>

  <div class="d-flex py-5">
    <div class="ki-special-text-wrapper p-3" style="width: 60%">
      <div class="ki-special-title mb-3">
        <h4>Резка деревянных изделий на станке с числовым программным управлением</h4>
      </div>
      <div class="ki-special-text " style="font-size: 1.25em; text-align: justify">
        <p>Компания "Древопласт" предлагает профессиональные услуги по фрезерной резке дерева на современном оборудовании с ЧПУ.
          Наш высокоточный станок позволяет создавать изделия любой сложности: от простых декоративных элементов до сложных художественных панно и объемных конструкций.
          <br>Мы выполняем:
        </p>
        <ul>
          <li>Резку фасадов и декоративных элементов мебели</li>
          <li>Изготовление рельефных узоров и орнаментов</li>
          <li>Создание объемных логотипов и вывесок</li>
          <li>Производство декоративных панелей</li>
        </ul>
        <p>
          Благодаря использованию передового ЧПУ-оборудования, мы гарантируем высокую точность обработки и безупречное качество готовых изделий.
          Работаем с различными породами древесины и древесными материалами.
          Наши специалисты помогут воплотить в жизнь любые ваши идеи, от разработки эскиза до финальной обработки изделия.
        </p>
      </div>
    </div>
    <div class="ki-special-image-wrapper p-3" style="width: 40%">
      <img style="max-width: 100%;" src="/assets/images/services/ab261ee6.jpg" alt="">
    </div>
  </div>
  <hr>
  <div class="d-flex py-5" style="flex-wrap: wrap;" onclick="onImageClick(event)">
    <button class="ki-special-image-wrapper p-3" data-toggle="modal" data-target="#modalCenter">
      <img style="max-width: 100%; width: 292px; height: 292px;" src="/assets/images/services/cnc_wood1.jpg" alt="">
    </button>
    <button class="ki-special-image-wrapper p-3" data-toggle="modal" data-target="#modalCenter">
      <img style="max-width: 100%; width: 292px; height: 292px;" src="/assets/images/services/cnc_wood2.jpg" alt="">
    </button>
    <button class="ki-special-image-wrapper p-3" data-toggle="modal" data-target="#modalCenter">
      <img style="max-width: 100%; width: 292px; height: 292px;" src="/assets/images/services/cnc_wood3.jpg" alt="">
    </button>
    <button class="ki-special-image-wrapper p-3" data-toggle="modal" data-target="#modalCenter">
      <img style="max-width: 100%; width: 292px; height: 292px;" src="/assets/images/services/cnc_wood4.jpg" alt="">
    </button>

  </div>

</div>


<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>