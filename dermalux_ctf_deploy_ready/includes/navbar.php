<?php if (session_status() === PHP_SESSION_NONE) { session_start(); } ?>
<link rel="stylesheet" href="assets/css/style.css">
<header class="site-header">
    <div class="announcement-bar">Free shipping on orders over €49</div>
    <nav class="navbar">
        <a class="brand" href="index.php">DERMALUX</a>

        <div class="nav-center">
            <a href="index.php">Shop</a>
            <a href="products.php">All Products</a>
            <a href="checkout.php">Checkout</a>
        </div>

        <div class="nav-right">
            <?php if (isset($_SESSION['user'])): ?>
                <span class="account-pill"><?php echo htmlspecialchars($_SESSION['user']); ?></span>
            <?php else: ?>
                <a href="login.php" class="account-link">Account</a>
            <?php endif; ?>
        </div>
    </nav>
</header>