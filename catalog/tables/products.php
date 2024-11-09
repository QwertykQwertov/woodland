<?
$title = 'Каталог';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'catalog';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

require($_SERVER['DOCUMENT_ROOT'] . '/database/db.php');

$subcategory = $_GET['sub'];

if ($subcategory) {
  $sql = "SELECT * FROM products_tables WHERE subcategory = $subcategory";
} else {
  $sql = "SELECT * FROM products_tables";
}

$result = $conn->query($sql);

if ($result->num_rows != 0) {
  $products = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<div class="container my-5" style="flex: 1;">
  <div class="ki-product-card-wrapper d-flex justify-content-around">

    <div class="ki-product-card text-center">
      <div class="ki-card-image-wrapper">
        <img class="ki-card-image" src="/assets/images/catalog/tables/journal1.jpg" alt="">
      </div>
      <div class="ki-card-description d-flex flex-column mt-2">
        <p class="ki-card-title h5">Журнальный столик 1</p>
        <p class="ki-card-text">Красивый журнальный столик для вашего интерьера</p>
        <p class="ki-card-price h4">9 999₽</p>
      </div>
      <div class="ki-card-footer">
        <hr>
        <button type="button" class="btn btn-outline-dark">В корзину</button>
      </div>
    </div>
    <div class="ki-product-card text-center">
      <div class="ki-card-image-wrapper">
        <img class="ki-card-image" src="/assets/images/catalog/tables/journal2.jpg" alt="">
      </div>
      <div class="ki-card-description d-flex flex-column mt-2">
        <p class="ki-card-title h5">Журнальный столик 2</p>
        <p class="ki-card-text">Красивый журнальный столик для вашего интерьера</p>
        <p class="ki-card-price h4">4 999₽</p>
      </div>
      <div class="ki-card-footer">
        <hr>
        <button type="button" class="btn btn-outline-dark">В корзину</button>
      </div>
    </div>
    <div class="ki-product-card text-center">
      <div class="ki-card-image-wrapper">
        <img class="ki-card-image" src="/assets/images/catalog/tables/journal3.jpg" alt="">
      </div>
      <div class="ki-card-description d-flex flex-column mt-2">
        <p class="ki-card-title h5">Журнальный столик 3</p>
        <p class="ki-card-text">Красивый журнальный столик для вашего интерьера Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, mollitia?</p>
        <p class="ki-card-price h4">5 999₽</p>
      </div>
      <div class="ki-card-footer">
        <hr>
        <button type="button" class="btn btn-outline-dark">В корзину</button>
      </div>
    </div>

  </div>


  <div class="container mt-5 mb-5">
    <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
      <?php foreach ($products as $product): ?>
        <div class="col">
          <a href="/catalog/pvc_rod/product?id=<?= $product['id']; ?>" class="card h-100 ki-card">
            <div style="padding:10px;">
              <img style="width: 100%; height: 300px;" src=<?= '/assets/images/catalog/tables/' . $product['image'] ?> class="card-img-top" alt=<?= $product['name'] ?>>
            </div>
            <div class="card-body d-flex flex-column ">
              <h5 class="card-title"><?= $product['name'] ?></h5>
              <p class="card-text" style="flex:1;">
                <?php if ($product['diameter']) { ?>
                  Диаметр, мм: <?= $product['diameter'] ?><br>
                <? } ?>
                Цвет: <?= $product['color'] ?><br>
                Упаковка: <?= $product['pack'] ?><br>
                <!-- <p class="card-text" style="flex: 1;"><small class="text-body-secondary"><?= $product['description'] ?></small></p> -->
              <div class="card-footer bg-transparent d-flex justify-content-center px-0">
                <p>Цена от: <strong class="text-danger"><?= number_format($product['opt_price'], 0, '.', ' '); ?> ₽/бухта</strong></p>
                <!-- <p><span class="badge rounded-pill bg-primary"><?= $product['price']; ?> руб/бухта</span></p>
                <p>Опт: <span class="badge rounded-pill bg-secondary"><?= $product['opt_price']; ?> руб/бухта</span></p> -->
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>