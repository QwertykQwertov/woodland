let cart
window.addEventListener('load', () => {
  showCart()
})

function showCart() {
  const cartBody = document.getElementById('cartBody')
  const totalElement = document.querySelector('.total')
  let total = null
  let cartBodyContent = ''

  cart = localStorage.getItem('cart')
  cart = cart ? JSON.parse(cart) : []

  if (!cart.length) {
    const cartTable = document.getElementById('cartTable')
    cartTable.remove()

    const btn = document.getElementById('btnWrapper')
    btn.remove()

    const emptyMessage = document.querySelector('.d-none')
    emptyMessage.classList.remove('d-none')
    emptyMessage.classList.add('d-flex')

    totalElement.textContent = ''

    return
  }



  cart.forEach((element, i) => {
    total += element.price * element.amount
    cartBodyContent += `<tr id="${element.article}">
        <td data-field="row" scope="row" style="text-align: center;">${i + 1}</td>
        <td data-field="name">${element.name}</td>
        <td data-field="name" style="text-align: center;">${new Intl.NumberFormat("ru-RU").format(element.price)} ₽</td>
        <td data-field="amount" style="text-align: center;">${element.amount}</td>
        <td style="text-align: right;">
          <button class="btn btn-outline-primary" onclick="incrementPosition(${element.id})" type="button" title="Увеличить количество на 1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="currentColor" viewBox="0 0 448 512">
              <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" />
            </svg>
          </button>
          <button class="btn btn-outline-primary" onclick="decrementPosition(${element.id})" type="button" title="Уменьшить количество на 1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="currentColor" viewBox="0 0 448 512">
              <path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
            </svg>
          </button>
          <a class="btn btn-outline-success" href="${element.link}" title="Перейти на страницу товара">
            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="currentColor" viewBox="0 0 576 512">
              <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
            </svg>
          </a>
          <button class="btn btn-outline-danger" onclick="removePosition(${element.id})" type="button" title="Удалить позицию"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="currentColor" viewBox="0 0 448 512">
              <path d="M170.5 51.6L151.5 80l145 0-19-28.4c-1.5-2.2-4-3.6-6.7-3.6l-93.7 0c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80 368 80l48 0 8 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-8 0 0 304c0 44.2-35.8 80-80 80l-224 0c-44.2 0-80-35.8-80-80l0-304-8 0c-13.3 0-24-10.7-24-24S10.7 80 24 80l8 0 48 0 13.8 0 36.7-55.1C140.9 9.4 158.4 0 177.1 0l93.7 0c18.7 0 36.2 9.4 46.6 24.9zM80 128l0 304c0 17.7 14.3 32 32 32l224 0c17.7 0 32-14.3 32-32l0-304L80 128zm80 64l0 208c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-208c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0l0 208c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-208c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0l0 208c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-208c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
            </svg></button>
        </td>
      </tr>`
  });

  cartBody.innerHTML = cartBodyContent
  totalElement.textContent = `Итого: ${new Intl.NumberFormat("ru-RU").format(total)} ₽`

}

function incrementPosition(id) {
  let product = cart.find(el => el.id === id)

  product.amount++
  updateCartInLocalStorage()

  showCart()
}

function decrementPosition(id) {
  const product = cart.find(el => el.id === id)

  if (product.amount == 1) {
    removePosition(id)
  } else {
    product.amount--
  }
  updateCartInLocalStorage()

  showCart()
}

function removePosition(id) {
  cart = cart.filter(el => el.id !== id)
  updateCartInLocalStorage()
  showCart()
}

function updateCartInLocalStorage() {
  localStorage.setItem('cart', JSON.stringify(cart))
}