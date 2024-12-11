<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
    }

    table {
      min-width: 100%;
    }
  </style>
</head>

<body>
  <h1>Информация о заказчике</h1>
  <p>Имя: <?= $json['name'] ?></p>
  <p>Почта: <?= $json['email'] ?></p>
  <p>Телефон: <?= $json['phone'] ?></p>
  <p>Адрес доставки: <?= $json['address'] ?></p>
  <p>Комментарий к заказу: <?= $json['comment'] ?></p>
  <hr>
  <h4>Состав заказа</h4>
  <table>
    <thead>
      <tr>
        <th>Артикул</th>
        <th>Наименование</th>
        <th>Цена</th>
        <th>Количество</th>
        <th>Сумма</th>
        <th>Ссылка на товар</th>
      </tr>
    </thead>
    <tbody>
      <? foreach ($json['order'] as $product) {
      ?>
        <tr>
          <td><?= $product['article']; ?></td>
          <td><?= $product['name']; ?></td>
          <td><?= $product['price']; ?></td>
          <td><?= $product['amount']; ?></td>
          <td><?= $product['amount'] * $product['price']; ?></td>
          <td><a href="https://wood-plastic.ru/<?= $product['link']; ?>" target="_blank" rel="noopener noreferrer"><?= $product['link']; ?></a></td>
        </tr>
      <? } ?>
    </tbody>
  </table>
  <p style="margin-top: 10px"><b>Сумма заказа: <?= $json['total'] ?></b></p>
</body>

</html>