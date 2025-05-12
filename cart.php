<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Your Cart</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    .cart-img {
      width: 80px;
    }
  </style>
</head>

<body>

  <div class="container my-5">
    <h2 class="text-center mb-4 fw-bold text-decoration-underline">Shopping Cart</h2>

    <div class="table-responsive">
      <table class="table table-bordered align-middle text-center">
        <thead class="table-dark">
          <tr>
            <th>Product</th>
            <th>Title</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>Remove</th>
          </tr>
        </thead>
        <tbody id="cart-items">
        </tbody>
      </table>
    </div>

    <div class="text-end mt-4">
      <h4>Total: $<span id="total-price">0.00</span></h4>
      <a href="checkout.php" class="btn btn-success mt-3">Proceed to Checkout</a>
    </div>
  </div>

  <script>
    const cart = [
      {
        title: "Macbook Pro 14\"",
        price: 1999,
        quantity: 1,
        image: "Images/Products-Img/Macbook-Pro.jpg"
      },
      {
        title: "Macbook Air 13\"",
        price: 1199,
        quantity: 2,
        image: "Images/Products-Img/Macbook-Air.jpg"
      }
    ];

    const cartItemsEl = document.getElementById("cart-items");
    const totalPriceEl = document.getElementById("total-price");

    function renderCart() {
      cartItemsEl.innerHTML = "";
      let total = 0;

      cart.forEach((item, index) => {
        const subtotal = item.price * item.quantity;
        total += subtotal;

        const row = `
          <tr>
            <td><img src="${item.image}" alt="${item.title}" class="cart-img rounded"></td>
            <td>${item.title}</td>
            <td>$${item.price.toFixed(2)}</td>
            <td>
              <input type="number" value="${item.quantity}" min="1" class="form-control form-control-sm" onchange="updateQuantity(${index}, this.value)">
            </td>
            <td>$${subtotal.toFixed(2)}</td>
            <td><button class="btn btn-danger btn-sm" onclick="removeItem(${index})">Remove</button></td>
          </tr>
        `;
        cartItemsEl.insertAdjacentHTML("beforeend", row);
      });

      totalPriceEl.textContent = total.toFixed(2);
    }

    function updateQuantity(index, value) {
      cart[index].quantity = parseInt(value);
      renderCart();
    }

    function removeItem(index) {
      cart.splice(index, 1);
      renderCart();
    }

    renderCart();
  </script>

</body>

</html>