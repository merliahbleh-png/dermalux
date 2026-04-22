<?php include "config.php"; include "includes/navbar.php";
$id = isset($_GET['id']) ? intval($_GET['id']) : 1;
$product = $conn->query("SELECT * FROM products WHERE id = $id")->fetch_assoc();
if (!$product) { die("Product not found"); }
?>
<main class="container section">
    <div class="checkout-shell">
        <div class="checkout-left">
            <p class="eyebrow">CHECKOUT</p>
            <h1>Complete your order</h1>
            <div class="checkout-card">
                <label>Email</label>
                <input type="email" placeholder="name@example.com">
                <label>Shipping address</label>
                <input type="text" placeholder="Street address">
                <div class="two-col">
                    <input type="text" placeholder="City">
                    <input type="text" placeholder="ZIP code">
                </div>
                <button class="btn btn-dark full">Pay now</button>
            </div>
        </div>

        <aside class="checkout-right">
            <div class="order-card">
                <h3>Order summary</h3>
                <div class="summary-product">
                    <img src="assets/img/<?php echo intval($product['id']); ?>.jpg" alt="<?php echo htmlspecialchars($product['name']); ?>">
                    <div>
                        <strong><?php echo htmlspecialchars($product['name']); ?></strong>
                        <p><?php echo htmlspecialchars($product['description']); ?></p>
                    </div>
                </div>
                <div class="summary-row"><span>Product</span><span>€<?php echo number_format($product['price'], 2); ?></span></div>
                <div class="summary-row"><span>Shipping</span><span>Free</span></div>
                <div class="summary-row total"><span>Total</span><span>€<?php echo number_format($product['price'], 2); ?></span></div>
            </div>
        </aside>
    </div>
</main>
<script src="assets/js/app.js"></script>
<?php include "footer.php"; ?>