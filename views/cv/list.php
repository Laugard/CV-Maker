<?php if (!isset($cvs)) $cvs = []; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your CVs</title>
    <link rel="stylesheet" href="assets/styles.css">
    <style>
        .cv-list {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            padding: 20px 0;
            justify-content: center; /* ⬅️ Her centreres previews */
        }

        .cv-card {
            border: 1px solid #ccc;
            padding: 15px;
            border-radius: 8px;
            width: 200px;
            text-align: center;
            background-color: #fafafa;
            transition: box-shadow 0.3s ease;
        }

        .cv-card:hover {
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.15);
        }

        .cv-card img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
            border-radius: 4px;
        }

        .inline-form {
            margin-top: 10px;
        }

        .cv-card span {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
    </style>

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
            <div class="cv-list">
                <?php foreach ($cvs as $cv): ?>
                    <div class="cv-card">
                        <?php
                        $template = htmlspecialchars($cv['template']);
                        $previewImage = "assets/{$template}-preview.png";
                        ?>
                        <img src="<?= $previewImage ?>" alt="<?= $template ?> Preview">
                        <span><?= htmlspecialchars($cv['name']) ?></span>
                        <form action="generate.php" method="post" class="inline-form">
                            <input type="hidden" name="id" value="<?= $cv['id'] ?>">
                            <button type="submit">Download PDF</button>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>You have not created any CVs yet.</p>
        <?php endif; ?>
    </section>
</main>

</body>
</html>
