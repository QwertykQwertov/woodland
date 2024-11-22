<?
$title = 'Каталог';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'catalog';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

require($_SERVER['DOCUMENT_ROOT'] . '/database/db.php');

$id = $_GET['id'];

if ($id) {
  $sql = "SELECT * FROM products_restaurant WHERE id = $id";
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
  <div class="product-page-overlay d-flex p-5" style="flex:1;" onclick="onImageClick(event)">
    <button class="ki-modal-trigger product-image-wrapper d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#modalCenter">
      <img src="<?= '/assets/images/catalog/restaurant/' . $product['image'] ?>" data-images="<?= $product['other_images'] ?>" class="img-fluid" style="max-width: 100%; max-height: 100%;" alt="<?= $product['name'] ?>">
    </button>

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
        <button type="button" class="btn btn-outline-light btn-lg" onclick="onBtnClick(event, <?= $product['id'] ?>, '<?= $product['name'] ?>' , '<?= $product['article'] ?>', <?= $product['price'] ?> )">В корзину</button>
      </div>

    </div>
  </div>
</div>

<script>
  function onBtnClick(e, id, name, article, price) {
    e.preventDefault()

    addToCart(id, name, article, price)

    toastBody.innerHTML = `Добавлено в корзину: <b>"${name}"</b>`

    const toast = new bootstrap.Toast(toastDiv)
    toast.show()
  }

  function addToCart(id, name, article, price) {
    let link = window.location.pathname + '?id=' + id
    let cart = localStorage.getItem('cart')
    cart = cart ? JSON.parse(cart) : []

    let product = cart.find(el => el.id === id)

    if (product) {
      product.amount++
    } else {
      cart.push({
        id,
        name,
        amount: 1,
        link,
        article,
        price
      })
    }

    localStorage.setItem('cart', JSON.stringify(cart))
  }
</script>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>