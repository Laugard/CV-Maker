<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: serif; padding: 20px; }
        h1, h2 { color: #000; }
        img { max-width: 120px; border-radius: 50px; margin-bottom: 20px; }
    </style>
</head>
<body>

<?php if (!empty($cv['profile_picture'])): ?>
    <img src="<?= 'http://' . $_SERVER['HTTP_HOST'] . '/CV-Maker/public/' . htmlspecialchars($cv['profile_picture']) ?>" alt="Profile Picture">
<?php endif; ?>

<h1><?= htmlspecialchars($cv['name']) ?></h1>
<p><strong>Email:</strong> <?= htmlspecialchars($cv['email']) ?></p>
<p><strong>Phone:</strong> <?= htmlspecialchars($cv['phone']) ?></p>

<h2>Profile</h2>
<p><?= nl2br(htmlspecialchars($cv['summary'])) ?></p>

<h2>Experience</h2>
<p><?= nl2br(htmlspecialchars($cv['experience'])) ?></p>

<h2>Education</h2>
<p><?= nl2br(htmlspecialchars($cv['education'])) ?></p>

</body>
</html>
