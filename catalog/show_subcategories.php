<?
$title = 'Каталог';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'catalog';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

require($_SERVER['DOCUMENT_ROOT'] . '/database/db.php');

$sql = 'SELECT * FROM subcategories WHERE category = ' . $category_id;
$result = $conn->query($sql);
$category_name = $conn->query('SELECT name FROM categories WHERE id = ' . $category_id)->fetch_assoc();

if ($result->num_rows != 0) {
  $subcategories = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<div class="container my-5">
  <h2 class="mb-5"><?= $category_name['name'] ?></h2>
  <div class="subcategories-wrapper d-flex justify-content-between">
    <?php foreach ($subcategories as $subcategory): ?>
      <div class="subcategory-card">
        <a href="<?= '/catalog/' . $folder . '/products?sub=' . $subcategory['id']; ?>">
          <img class="subcategory-img" src="/assets/images/subcategories/<?= $subcategory['image'];?>" alt="">
          <div class="ki-overlay">
            <div class="subcategory-name">
              <p class="h3"><?= $subcategory['name']; ?></p>
            </div>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>

</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>