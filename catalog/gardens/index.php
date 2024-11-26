<?
$title = 'Каталог';
$description = 'Продажа и изготовление деревянных изделий';
$keywords = 'Деревянные изделия на заказ, столы лофт, тумбы, деревянные стулья, для ресторанов и кафе, мебель из дерева';
$page = 'catalog';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

require($_SERVER['DOCUMENT_ROOT'] . '/database/db.php');


// $sql = "SELECT * FROM products_gardens";
// $result = $conn->query($sql);

// if ($result->num_rows != 0) {
//   $products = $result->fetch_all(MYSQLI_ASSOC);
// }
?>

<div class="container my-5" style="flex: 1;">

</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>

<script>
  function onBtnClick(e, id) {
    e.preventDefault()
    console.log(e, id)
  }
</script>