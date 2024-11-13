<footer class=" pt-5 bg-dark text-light">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5">
      <div class="col mb-3">
        <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none text-light ki-footer-link">
          <h5>Древопласт</h5>
        </a>
        <p class="text-light">© 2024</p>
      </div>

      <div class="col mb-3"></div>
      <div class="col mb-3"></div>
      <div class="col mb-3">
        <a href="/contacts" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none text-light ki-footer-link">
          <h5>Контакты</h5>
        </a>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light ki-footer-link">МО, г.Истра, д.Черная, улица Солнечная, дом 11</a></li>
          <li class="nav-item mb-2"><a href="tel:+79637194406" class="nav-link p-0 text-light ki-footer-link">+7 (963) 719-44-06 </a></li>
          <li class="nav-item mb-2"><a href="/contacts/" class="nav-link p-0 text-light ki-footer-link">val.zelinskaya@gmail.com</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light ki-footer-link">Время работы:
              пн-пт 9.00-18.00, сб, вс Выходной</a></li>
        </ul>
      </div>

      <div class="col mb-3">
        <h5>Покупателям</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="/catalog/" class="nav-link p-0 text-light ki-footer-link">Товары</a></li>
          <li class="nav-item mb-2"><a href="/services/" class="nav-link p-0 text-light ki-footer-link">Услуги</a></li>
        </ul>
      </div>


    </div>
  </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="modalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-end">
        <button style="background: transparent; border: none" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="h4">×</span>
        </button>
      </div>
      <div class="modal-body d-flex justify-content-center align-items-center">
        <img style="margin: 0-auto; max-width: 100%; max-height: 100%" id="modalImage" src="" alt="">
      </div>
    </div>
  </div>
</div>

<script>
  // Открытие модального окна на странице услуг
  function onImageClick(e) {
    if (e.target.classList.contains('ki-special-image-wrapper')) {
      modalImage.src = e.target.children[0].currentSrc
    } else if (e.target.nodeName === 'IMG') {
      modalImage.src = e.target.currentSrc
    } else {
      e.stopPropagation()
    }
  }
</script>
<script src="/assets/bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"
  integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/fontenele/bootstrap-navbar-dropdowns@5.0.2/dist/js/bootstrap-navbar-dropdowns.min.js"></script>
<script>
  $('.navbar').navbarDropdown({
    theme: 'bs5',
    trigger: 'mouseover'
  });
</script>
</body>

</html>