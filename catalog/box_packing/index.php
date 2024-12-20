<?
$title = 'Каталог';
$description = 'Продажа и изготовление деревянных изделий';
$keywords = 'Деревянные изделия на заказ, столы лофт, тумбы, деревянные стулья, для ресторанов и кафе, мебель из дерева';
$page = 'catalog';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

require($_SERVER['DOCUMENT_ROOT'] . '/database/db.php');
$sql = "SELECT * FROM products_box";

$result = $conn->query($sql);

if ($result->num_rows != 0) {
  $products = $result->fetch_all(MYSQLI_ASSOC);
} else {
  $products = [];
}
?>

<div class="container my-5" style="flex: 1;">
  <div class="ki-product-card-wrapper d-flex justify-content-around">

    <?php foreach ($products as $product): ?>
      <div class="ki-product-card text-center">
        <a href="<?= '/catalog/box_packing/product?id=' . $product['id'] ?>" class="ki-product-card-link">
          <div class="ki-card-image-wrapper">
            <img class="ki-card-image" src=<?= '/assets/images/catalog/box_packing/' . $product['image'] ?> alt=<?= $product['name'] ?>>
          </div>
          <div class="ki-card-description d-flex flex-column mt-2">
            <p class="ki-card-title h5"><?= $product['name'] ?></p>
            <p class="ki-card-text"><?= $product['short_description'] ?></p>
            <p class="ki-card-price h4"><?= number_format($product['price'], 0, '.', ' ') . '₽'; ?></p>
          </div>
          <div class="ki-card-footer">
            <hr>
            <button type="button" class="btn btn-outline-dark" onclick="onBtnClick(event, <?= $product['id'] ?>, '<?= $product['name'] ?>' , '<?= $product['article'] ?>', <?= $product['price'] ?> )">В корзину</button>
          </div>
        </a>
      </div>
    <?php endforeach; ?>

  </div>

</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>

<script>
  function onBtnClick(e, id, name, article, price) {
    e.preventDefault()

    addToCart(id, name, article, price)

    toastBody.innerHTML = `Добавлено в корзину: <b>"${name}"</b>`

    const toast = new bootstrap.Toast(toastDiv)
    toast.show()
  }

  function addToCart(id, name, article, price) {
    let link = window.location.pathname.slice(0, -1) + '?id=' + id
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