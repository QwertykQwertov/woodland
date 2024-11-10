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

    <?php foreach ($products as $product): ?>
      <div class="ki-product-card text-center">
        <a href="<?= '/catalog/tables/product?id=' . $product['id'] ?>" style="text-decoration: none; color: var(--bs-body-color);">
          <div class="ki-card-image-wrapper">
            <img class="ki-card-image" src=<?= '/assets/images/catalog/tables/' . $product['image'] ?> alt=<?= $product['name'] ?>>
          </div>
          <div class="ki-card-description d-flex flex-column mt-2">
            <p class="ki-card-title h5"><?= $product['name'] ?></p>
            <p class="ki-card-text"><?= $product['short_description'] ?></p>
            <p class="ki-card-price h4"><?= number_format($product['price'], 0, '.', ' ') . '₽'; ?></p>
          </div>
          <div class="ki-card-footer">
            <hr>
            <button type="button" class="btn btn-outline-dark" onclick="onBtnClick(event, <?= $product['id'] ?>)">В корзину</button>
          </div>
        </a>
      </div>
    <?php endforeach; ?>

  </div>

</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>

<script>
  function onBtnClick(e, id) {
    e.preventDefault()
    console.log(e, id)
  }
</script>