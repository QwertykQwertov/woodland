<?
$title = 'Каталог';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'catalog';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

require($_SERVER['DOCUMENT_ROOT'] . '/database/db.php');

$id = $_GET['id'];

if ($id) {
  $sql = "SELECT * FROM products_tables WHERE id = $id";
} else {
  // 404
}

$result = $conn->query($sql);

if ($result->num_rows != 0) {

  $product = $result->fetch_assoc();
} else {
  print_r('Error' . $result);
}
?>

<div class="container product-page d-flex flex-column" style="min-height: 80vh; padding: 0;">
  <div class="product-page-overlay d-flex p-5" style="flex:1;">
    <div class="product-image-wrapper d-flex align-items-center">
      <img src="<?= '/assets/images/catalog/tables/' . $product['image'] ?>" class="img-fluid" style="max-width: 100%; max-height: 100%;" alt="<?= $product['name'] ?>">
    </div>

    <div class="product-text-wrapper p-3">
      <h3 class="text-center"><?= $product['name'] ?></h3>
      <hr>
      <div class="product-description" style="font-size: 1.25em">
        <p><b>Длина, мм: </b><?= $product['length'] ?></p>
        <p><b>Высота, мм: </b> <?= $product['height'] ?></p>
        <p><b>Ширина, мм: </b> <?= $product['width'] ?></p>
        <p><?= $product['full_description'] ?></p>
      </div>
      <hr>
      <div class="product-footer d-flex justify-content-between align-items-center">
        <p class="h2"><?= number_format($product['price'], 0, '.', ' ') . ' ₽' ?></p>
        <button type="button" class="btn btn-outline-light btn-lg">В корзину</button>
      </div>

    </div>

    <!-- <div class="container my-5">

      <div class="card my-5">
        <div class="row g-0">
          <div class="" style="max-width: 30%; border-right: 1px solid var(--bs-border-color-translucent);">
            <img src="<?= '/assets/images/catalog/' . $product['image'] ?>" class="img-fluid rounded-start" style="width: 100%;" alt="<?= $product['name'] ?>">
          </div>
          <div class="" style="flex: 1;">
            <div class="card-header">
              <h3><?= $product['name'] . ', ' . $product['pack'] ?></h3>
            </div>
            <div class="card-body">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Розница</th>
                    <th scope="col">Опт*</th>
                    <th scope="col">Дилер**</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?= number_format($product['price'], 0, '.', ' ') . ' ₽/бухта' ?></td>
                    <td><?= number_format($product['opt_price'], 0, '.', ' ') . ' ₽/бухта' ?></td>
                    <td><?= number_format($product['diler_price'], 0, '.', ' ') . ' ₽/бухта' ?></td>
                  </tr>
                </tbody>
              </table>
              <p><em><strong>*</strong> Оптовая цена действует от 20 единиц</em></p>
              <p><em><strong>**</strong> Дилерская цена действует от 100 единиц</em></p>
              <p class="card-text"><?= $product['description'] ?></p>

              <h4>Характеристики</h4>
              <p class="card-text"><?= 'Цвет: ' . $product['color'] . ' ₽/бухта' ?></p>
              <p class="card-text"><?= 'Диаметр: ' . $product['diameter'] . ' мм' ?></p>
              <p class="card-text"><?= 'Упаковка: ' . $product['pack'] ?></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card my-5">
        <div class="row g-0">
          <div class="card-body">
            <h5>Применение:</h5>
            <p class="card-text">Сварочный пруток применяется для надежной и качественной сварки пластмассовых материалов.</p>
          </div>
        </div>
      </div>

      <div class="card my-5">
        <div class="row g-0">
          <div class="card-body">
            <h5>Сварка пластика включает в себя несколько этапов:</h5>
            <p class="card-text"><?= $product['instruction'] ?></p>
          </div>
        </div>
      </div>

    </div> -->
  </div>
</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>