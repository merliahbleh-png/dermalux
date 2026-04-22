<?php
include "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $u = $_POST['username'] ?? '';
    $p = $_POST['password'] ?? '';

    $stmt = $conn->prepare("INSERT INTO users(username, password) VALUES (?, ?)");
    $hash = password_hash($p, PASSWORD_DEFAULT);
    $stmt->bind_param("ss", $u, $hash);

    if ($stmt->execute()) {
        header("Location: login.php");
        exit();
    }

    $error = "Registration failed";
}
?>
<link rel="stylesheet" href="assets/css/style.css">

<div class="auth-page">
    <div class="auth-card">
        <a class="brand auth-brand" href="index.php">DERMALUX</a>
        <h1>Create account</h1>
        <p class="auth-subtitle">Start your skincare routine with a premium-looking storefront.</p>

        <form method="POST" class="auth-form">
            <input name="username" type="text" placeholder="Username" required>
            <input name="password" type="password" placeholder="Password" required>
            <button class="btn btn-dark full">Register</button>
        </form>

        <?php if (!empty($error)): ?>
            <p class="flash-error"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>

        <p class="auth-switch">Already have an account? <a href="login.php">Login</a></p>
    </div>
</div>
