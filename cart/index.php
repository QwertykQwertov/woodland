<?
$title = 'Корзина';
$description = 'Продажа и изготовление деревянных изделий';
$keywords = 'Деревянные изделия на заказ, столы лофт, тумбы, деревянные стулья, для ресторанов и кафе, ';
$page = 'cart';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";
?>

<div class="container my-5 cart-wrapper d-flex flex-column" style="flex: 1;">
  <h2 class="mb-5">Корзина</h2>
  <table class="table table-striped" id="cartTable">
    <thead>
      <tr>
        <th scope="col" width="10%">№</th>
        <th scope="col" width="50%">Наименование</th>
        <th scope="col" width="10%">Количество</th>
        <th scope="col" width="30%"></th>
      </tr>
    </thead>
    <tbody id="cartBody">
    </tbody>
  </table>
  <div id="empty" class="d-none justify-content-center align-items-center" style="flex:1; color: #9b9d9e;">
    <h3>Корзина пуста</h3>
  </div>

  <div id="btnWrapper" class="d-grid">
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalOrder">Перейти к оформлению</button>
  </div>



  <!-- Modal -->
  <div class="modal fade" id="modalOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-between">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Оформление заказа</h1>
          <button style="background: transparent; border: none" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="h4">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<script src="/assets/js/cart.js"></script>
<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>