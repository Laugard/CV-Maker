<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: 'Helvetica Neue', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 40px;
        }
        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        section {
            margin-bottom: 30px;
        }
        h2 {
            color: #2980b9;
            margin-top: 20px;
        }
        img {
            max-width: 120px;
            border-radius: 50px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<?php if (!empty($cv['profile_picture'])): ?>
    <img src="<?= 'http://' . $_SERVER['HTTP_HOST'] . '/CV-Maker/public/' . htmlspecialchars($cv['profile_picture']) ?>" alt="Profile Picture">
<?php endif; ?>

<h1><?= htmlspecialchars($cv['name']) ?></h1>
<p><strong>Email:</strong> <?= htmlspecialchars($cv['email']) ?></p>
<p><strong>Phone:</strong> <?= htmlspecialchars($cv['phone']) ?></p>

<section>
    <h2>Profile</h2>
    <p><?= nl2br(htmlspecialchars($cv['summary'])) ?></p>
</section>

<section>
    <h2>Experience</h2>
    <p><?= nl2br(htmlspecialchars($cv['experience'])) ?></p>
</section>

<section>
    <h2>Education</h2>
    <p><?= nl2br(htmlspecialchars($cv['education'])) ?></p>
</section>

</body>
</html>
