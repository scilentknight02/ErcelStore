<!-- checkout.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Checkout with Khalti</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://khalti.com/static/khalti-checkout.js"></script>
</head>

<body>
  <div class="container my-5">
    <h2 class="text-center fw-bold text-decoration-underline mb-4">Checkout</h2>
    <div class="row g-4">
      <!-- Billing Form -->
      <div class="col-md-6">
        <div class="p-4 border rounded bg-light">
          <h4 class="mb-3">Billing Info</h4>
          <form id="checkout-form">
            <div class="mb-3">
              <label for="fullName" class="form-label">Full Name</label>
              <input type="text" id="fullName" class="form-control" required />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" id="email" class="form-control" required />
            </div>
            <button type="submit" class="btn btn-primary w-100">Pay with Khalti</button>
          </form>
        </div>
      </div>

      <!-- Order Summary -->
      <div class="col-md-6">
        <div class="p-4 border rounded bg-light">
          <h4 class="mb-3">Order Summary</h4>
          <ul class="list-group mb-3" id="order-summary"></ul>
          <h5 class="text-end">Total: Rs. <span id="summary-total">0.00</span></h5>
        </div>
      </div>
    </div>
  </div>

  <script>
    const cart = [
      { title: 'Macbook Pro 14"', price: 1999, quantity: 1 },
      { title: 'Macbook Pro 13"', price: 1199, quantity: 2 }
    ];

    const summaryEl = document.getElementById("order-summary");
    const summaryTotal = document.getElementById("summary-total");
    let grandTotal = 0;

    function renderSummary() {
      summaryEl.innerHTML = "";
      grandTotal = 0;
      cart.forEach(item => {
        const subtotal = item.price * item.quantity;
        grandTotal += subtotal;
        summaryEl.insertAdjacentHTML("beforeend", `
          <li class="list-group-item d-flex justify-content-between">
            ${item.title} (x${item.quantity})
            <span>Rs. ${subtotal.toFixed(2)}</span>
          </li>
        `);
      });
      summaryTotal.textContent = grandTotal.toFixed(2);
    }

    renderSummary();

    const config = {
      publicKey: "test_public_key_dc74d3fd28b9460b83687a91f4bfbd1a",
      productIdentity: "ORDER123",
      productName: "Macbook Combo Pack",
      productUrl: "http://localhost/checkout.php",
      eventHandler: {
        onSuccess(payload) {
          console.log("Payment success:", payload);
          fetch("verify_payment.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({
              token: payload.token,
              amount: grandTotal * 100 
            })
          })
            .then(res => res.json())
            .then(data => {
              if (data.status === "Completed") {
                alert("Payment verified successfully!");
              } else {
                alert("Verification failed. Please contact support.");
              }
            })
            .catch(err => {
              console.error(err);
              alert("Verification error.");
            });
        },
        onError(error) {
          console.error("Error:", error);
          alert("Payment failed. Please try again.");
        },
        onClose() {
          console.log("Khalti widget closed.");
        }
      }
    };

    const khaltiCheckout = new KhaltiCheckout(config);

    document.getElementById("checkout-form").addEventListener("submit", function (e) {
      e.preventDefault();
      khaltiCheckout.show({ amount: grandTotal * 100 }); 
    });
  </script>
</body>

</html>

<!-- verify_payment.php -->
 <?php
$data = json_decode(file_get_contents("php://input"), true);

$token = $data['token'] ?? null;
$amount = $data['amount'] ?? null;

if (!$token || !$amount) {
    http_response_code(400);
    echo json_encode(["error" => "Missing token or amount"]);
    exit;
}
$payload = json_encode([
    "token" => $token,
    "amount" => $amount
]);
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "https://khalti.com/api/v2/payment/verify/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => [
        "Authorization: Key test_secret_key_51b1c2f2f7e44a58a3c8e15d6b7f43f0",
        "Content-Type: application/json"
    ]
]);
$response = curl_exec($curl);
curl_close($curl);
echo $response;