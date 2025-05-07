<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: serif; padding: 20px; }
        h1, h2 { color: #000; }
    </style>
</head>
<body>
<h1><?= isset($cv['name']) ? htmlspecialchars($cv['name']) : '' ?></h1>
<p><strong>Email:</strong> <?= isset($cv['email']) ? htmlspecialchars($cv['email']) : '' ?></p>
<p><strong>Phone:</strong> <?= isset($cv['phone']) ? htmlspecialchars($cv['phone']) : '' ?></p>

<h2>Profile</h2>
<p><?= isset($cv['summary']) ? nl2br(htmlspecialchars($cv['summary'])) : '' ?></p>

<h2>Experience</h2>
<p><?= isset($cv['experience']) ? nl2br(htmlspecialchars($cv['experience'])) : '' ?></p>

<h2>Education</h2>
<p><?= isset($cv['education']) ? nl2br(htmlspecialchars($cv['education'])) : '' ?></p>
</body>
</html>
