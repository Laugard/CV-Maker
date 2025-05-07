<?php if (!isset($cvs)) $cvs = []; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your CVs</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>

<header>
    <h1>Welcome to Your Dashboard</h1>
    <nav>
        <ul>
            <li><a href="index.php?page=form">+ Create New CV</a></li>
            <li><a href="index.php?page=logout">Logout</a></li>
        </ul>
    </nav>
</header>

<main>
    <section>
        <h2>Saved CVs</h2>

        <?php if (count($cvs) > 0): ?>
            <ul>
                <?php foreach ($cvs as $cv): ?>
                    <li>
                        <span><?= htmlspecialchars($cv['name']) ?></span>
                        <form action="generate.php" method="post" class="inline-form">
                            <input type="hidden" name="id" value="<?= $cv['id'] ?>">
                            <button type="submit">Download PDF</button>
                        </form>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>You have not created any CVs yet.</p>
        <?php endif; ?>
    </section>
</main>

</body>
</html>
