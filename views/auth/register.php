<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
<main>
    <h1>Register</h1>

    <?php if (isset($error)): ?>
        <p class="error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form action="index.php?page=register" method="post">
        <label>Email:
            <input type="email" name="email" required>
        </label>
        <label>Password:
            <input type="password" name="password" required>
        </label>
        <button type="submit">Register</button>
    </form>

    <p class="link">Already have an account? <a href="index.php?page=login">Login here</a></p>
</main>
</body>
</html>
