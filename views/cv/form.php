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
    <form action="generate.php" method="post" enctype="multipart/form-data">
        <label>Name:
            <input type="text" name="name" placeholder="F.eks. Mathias Hansen" required>
        </label>
        <label>Email:
            <input type="email" name="email" placeholder="F.eks. mathias@example.com" required>
        </label>
        <label>Phone:
            <input type="text" name="phone" placeholder="F.eks. +45 12 34 56 78">
        </label>
        <label>Summary:
            <textarea name="summary" placeholder="Kort profiltekst, f.eks. 'Engageret webudvikler med passion for brugervenlige løsninger'"></textarea>
        </label>
        <label>Experience:
            <textarea name="experience" placeholder="F.eks. 'Webudvikler hos WebX, 2021-2023 – ansvarlig for frontend i React'"></textarea>
        </label>
        <label>Education:
            <textarea name="education" placeholder="F.eks. 'Datamatiker, Erhvervsakademi Aarhus, 2021-2024'"></textarea>
        </label>
        <label>Profile Picture:
            <input type="file" name="profile_picture" accept="image/*">
        </label>

        <label>Choose Template:</label>

        <style>
            .template-wrapper {
                display: flex;
                justify-content: center;
                gap: 60px;
                margin: 20px 0;
            }

            .template-wrapper label {
                text-align: center;
                position: relative;
            }

            .template-wrapper img {
                width: 150px;
                height: auto;
                border-radius: 4px;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                cursor: pointer;
            }

            .template-wrapper label:hover img {
                transform: scale(3);
                box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
                z-index: 10;
                position: relative;
            }
        </style>

        <div class="template-wrapper">
            <label>
                <input type="radio" name="template" value="classic" checked><br>
                <img src="assets/classic-preview.png" alt="Classic Template"><br>
                <strong>Classic</strong>
            </label>

            <label>
                <input type="radio" name="template" value="modern"><br>
                <img src="assets/modern-preview.png" alt="Modern Template"><br>
                <strong>Modern</strong>
            </label>
        </div>

        <button type="submit">Download CV as PDF</button>
    </form>
    <p class="link"><a href="index.php">Back to dashboard</a></p>
</main>
</body>
</html>
