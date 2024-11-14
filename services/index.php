<?
$title = 'Каталог';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'services';
$services = [
  ["image" => "cnc_wood2.jpg", "name" => "Резка ЧПУ по дереву", "link" => "cnc_wood"],
  ["image" => "cnc_plast1.jpg", "name" => "Резка ЧПУ по пластику", "link" => "cnc_plast"],
  ["image" => "engraving_main.jpg", "name" => "Гравировка", "link" => "engraving"]
];

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";
?>

<div class="container my-5">
  <h2 class="mb-5">Услуги</h2>
  <div class="subcategories-wrapper d-flex justify-content-between">
    <?php foreach ($services as $service): ?>
      <div class="subcategory-card">
        <a href=<?= "/services/" . $service['link']; ?>>
          <img class="subcategory-img" src=<?= "/assets/images/services/" . $service['image']; ?> alt="">
          <div class="ki-overlay">
            <div class="subcategory-name">
              <p class="h3"><?= $service['name']; ?></p>
            </div>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>

</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>