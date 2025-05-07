<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create CV</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
<main>
    <h1>Create Your CV</h1>
    <form action="generate.php" method="post">
        <label>Name:
            <input type="text" name="name" required>
        </label>
        <label>Email:
            <input type="email" name="email" required>
        </label>
        <label>Phone:
            <input type="text" name="phone">
        </label>
        <label>Summary:
            <textarea name="summary"></textarea>
        </label>
        <label>Experience:
            <textarea name="experience"></textarea>
        </label>
        <label>Education:
            <textarea name="education"></textarea>
        </label>
        <label>Choose Template:
            <select name="template">
                <option value="classic">Classic</option>
                <option value="modern">Modern</option>
            </select>
        </label>
        <button type="submit">Download CV as PDF</button>
    </form>
    <p class="link"><a href="index.php">Back to dashboard</a></p>
</main>
</body>
</html>
