<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Checkout</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    .form-section {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <div class="container my-5">
    <h2 class="text-center fw-bold text-decoration-underline mb-4">
      Checkout
    </h2>

    <div class="row g-4">
      <!-- Billing Details -->
      <div class="col-md-6">
        <div class="form-section">
          <h4 class="mb-3">Billing Information</h4>
          <form id="checkout-form">
            <div class="mb-3">
              <label for="fullName" class="form-label">Full Name</label>
              <input type="text" id="fullName" class="form-control" required />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" id="email" class="form-control" required />
            </div>
            <div class="mb-3">
              <label for="address" class="form-label">Shipping Address</label>
              <input type="text" id="address" class="form-control" required />
            </div>
            <div class="mb-3">
              <label for="card" class="form-label">Card Number</label>
              <input type="text" id="card" class="form-control" placeholder="xxxx-xxxx-xxxx-xxxx" required />
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="expiry" class="form-label">Expiry Date</label>
                <input type="text" id="expiry" class="form-control" placeholder="MM/YY" required />
              </div>
              <div class="col-md-6 mb-3">
                <label for="cvv" class="form-label">CVV</label>
                <input type="text" id="cvv" class="form-control" placeholder="123" required />
              </div>
            </div>
            <button type="submit" class="btn btn-success w-100 mt-2">
              Confirm Payment
            </button>
          </form>
        </div>
      </div>

      <!-- Order Summary -->
      <div class="col-md-6">
        <div class="form-section">
          <h4 class="mb-3">Order Summary</h4>
          <ul id="order-summary" class="list-group mb-3">
            <!-- Items will be rendered here -->
          </ul>
          <h5 class="text-end">
            Total: $<span id="summary-total">0.00</span>
          </h5>
        </div>
      </div>
    </div>
  </div>

  <script>
    const cart = [
      {
        title: 'Macbook Pro 14"',
        price: 1999,
        quantity: 1,
      },
      {
        title: 'Macbook Pro 13"',
        price: 1199,
        quantity: 2,
      },
    ];

    const summaryEl = document.getElementById("order-summary");
    const summaryTotal = document.getElementById("summary-total");

    function renderSummary() {
      summaryEl.innerHTML = "";
      let total = 0;

      cart.forEach((item) => {
        const subtotal = item.price * item.quantity;
        total += subtotal;

        const listItem = `
            <li class="list-group-item d-flex justify-content-between align-items-center">
              ${item.title} (x${item.quantity})
              <span>$${subtotal.toFixed(2)}</span>
            </li>
          `;
        summaryEl.insertAdjacentHTML("beforeend", listItem);
      });

      summaryTotal.textContent = total.toFixed(2);
    }

    document
      .getElementById("checkout-form")
      .addEventListener("submit", function (e) {
        e.preventDefault();
        alert("Payment Successful! Thank you for your order.");
        // Redirect or clear cart here
      });

    renderSummary();
  </script>
</body>

</html>