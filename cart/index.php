<?
$title = 'Корзина';
$description = 'Продажа и изготовление деревянных изделий';
$keywords = 'Деревянные изделия на заказ, столы лофт, тумбы, деревянные стулья, для ресторанов и кафе, мебель из дерева';
$page = 'cart';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";
?>

<div class="container my-5 cart-wrapper d-flex flex-column" style="flex: 1;">
  <h2 class="mb-5">Корзина</h2>
  <div class="table-wrappper" style="flex: 1">
    <table class="table table-striped" id="cartTable">
      <thead>
        <tr>
          <th scope="col" width="4%" style="text-align: center;">№</th>
          <th scope="col" width="56%">Наименование</th>
          <th scope="col" width="10%" style="text-align: center;">Цена</th>
          <th scope="col" width="10%" style="text-align: center;">Количество</th>
          <th scope="col" width="20%"></th>
        </tr>
      </thead>
      <tbody id="cartBody">
      </tbody>
    </table>
  </div>
  <div id="empty" class="d-none flex-column justify-content-center align-items-center" style="flex:1; color: #9b9d9e;">
    <h3 class="mb-4">Корзина пуста</h3>
    <a href="/catalog" class="btn btn-outline-dark" type="button">К покупкам</a>
  </div>

  <div class="total-wrapper">
    <p class="total h5"></p>
  </div>

  <div id="btnWrapper" class="d-grid">
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalOrder">Перейти к оформлению</button>
  </div>



  <!-- Modal -->
  <div class="modal fade" id="modalOrder" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-between">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Оформление заказа</h1>
          <button style="background: transparent; border: none" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="h4">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="row g-3 needs-validation" novalidate>
            <div class="mb-2">
              <label for="name" class="form-label">Имя</label>
              <input type="text" class="form-control" id="name" name="name" required>
              <div class="invalid-feedback">Пожалуйста, введите имя</div>
            </div>
            <div class="mb-2">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
              <div class="invalid-feedback">Пожалуйста, введите корректный Email</div>
            </div>
            <div class="mb-2">
              <label for="phone" class="form-label">Телефон</label>
              <input type="phone" class="form-control" id="phone" required>
              <div class="invalid-feedback">Пожалуйста, введите номер телефона</div>
            </div>
            <div class="mb-2">
              <span class="input-group-text">Комментарий к заказу</span>
              <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Оформить</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<script src="/assets/js/cart.js"></script>
<script>
  const forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach((form) => {
    form.addEventListener('submit', (event) => {
      event.preventDefault();
      event.stopPropagation();
      if (form.checkValidity()) {
        sendOrder(form)
      }
      form.classList.add('was-validated');
    }, false);
  });

  function sendOrder(form) {
    const order = {
      name: form[0].value,
      email: form[1].value,
      phone: form[2].value,
      comment: form[3].value,
    }
    console.log(order)

    fetch('/api/order', {
      method: 'POST',
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(order)
    }).then(res => res.json()).then(data => console.log())
  }
</script>
<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>