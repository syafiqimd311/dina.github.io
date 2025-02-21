<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit;
}

// Sample profile data with email
$profiles = [
    ["id" => 1, "name" => "Alya Irdina", "program" => "Computer Science", "student_id" => "2024789174", "image" => "image/alya.jpg", "email" => "alyairdina@uitm.com"],
    ["id" => 2, "name" => "Tunku Aina Shafeeqah", "program" => "Business", "student_id" => "2024677598", "image" => "image/tunku.jpg", "email" => "tunkuaina@uitm.com"],
    ["id" => 3, "name" => "Hanie Haida", "program" => "Engineering", "student_id" => "2024657890", "image" => "image/hanie.jpg", "email" => "haniehaida@uitm.com"],
    ["id" => 4, "name" => "Rifaa Nifail", "program" => "Education", "student_id" => "2024567812", "image" => "image/rifaa.jpg", "email" => "rifaanifail@uitm.com"],
    ["id" => 5, "name" => "Nur Irdina Izzati", "program" => "Law", "student_id" => "2024563178", "image" => "image/irdina.jpg", "email" => "irdina@uitm.com"],
    ["id" => 6, "name" => "Nur Izzatul Athirah", "program" => "Psychology", "student_id" => "2024714321", "image" => "image/izzatul.jpg", "email" => "izzatulathirh@uitm.com"],
    ["id" => 7, "name" => "Dhiya maisarah", "program" => "Arts", "student_id" => "2026755387", "image" => "image/dhiya.jpg", "email" => "dhiyamai@uitm.com"],
    ["id" => 8, "name" => "Farah Farzana", "program" => "Health Sciences", "student_id" => "2024165123", "image" => "image/farah.jpg", "email" => "farahrarz@uitm.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiles</title>
    <!-- Link to Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* General body styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('backgroundprofiles.jpg'); /* Add your background image here */
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            color: #333;
        }

        /* Page title */
        h1 {
            text-align: center;
            margin-top: 20px;
            color: black;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
            font-family: 'Poppins', sans-serif; /* Apply the new font */
            font-size: 36px; /* Slightly larger font size */
            font-weight: 600; /* Bold weight for a professional look */
        }

        /* Profile list container */
        .profile-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            padding: 20px;
            max-width: 1000px; /* Constrains the rows */
            margin: 0 auto; /* Centers the container */
        }

        /* Individual profile cards */
        .profile-card {
            flex: 1 1 calc(25% - 30px); /* Four cards per row with a gap of 30px */
            max-width: calc(25% - 30px); /* Ensures the max width matches the flex-basis */
            border: 1px solid #ccc;
            border-radius: 12px;
            overflow: hidden;
            background-color: rgba(255, 255, 255, 0.9); /* Transparent white background */
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .profile-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 14px rgba(0, 0, 0, 0.3);
        }

        /* Profile images */
        .profile-card img {
            width: 100%;
            height: 180px; /* Larger height */
            object-fit: cover;
        }

        /* Profile card text */
        .profile-card h3 {
            margin: 15px 0 5px;
            color: black;
            font-size: 20px; /* Slightly larger font */
        }

        .profile-card p {
            margin: 0 0 10px;
            color: #666;
            font-size: 16px;
        }

        /* Profile email */
        .profile-card .email {
            font-size: 15px;
            color: black;
            text-decoration: none;
        }

        .profile-card .email:hover {
            text-decoration: underline;
        }

        /* Profile link */
        .profile-card a {
            display: inline-block;
            margin: 10px 0 15px;
            padding: 10px 20px;
            text-decoration: none;
            color: black;
            background-color: #fff4f1; /* Blue button */
            border-radius: 4px;
            font-size: 14px;
            transition: background-color 0.2s;
        }

        .profile-card a:hover {
            background-color: #d1dff6;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>UiTM Student Profiles</h1>
    <div class="profile-list">
        <?php foreach ($profiles as $profile): ?>
            <div class="profile-card">
                <img src="<?= $profile['image'] ?>" alt="<?= $profile['name'] ?>">
                <h3><?= $profile['name'] ?></h3>
                <p><?= $profile['program'] ?></p>
                <p><strong>ID:</strong> <?= $profile['student_id'] ?></p>
                <a class="email" href="mailto:<?= $profile['email'] ?>"><?= $profile['email'] ?></a>
                <a href="profile.php?id=<?= $profile['id'] ?>">View Profile</a>
            </div>
        <?php endforeach; ?>
    </div>
    <footer>&copy; 2025 UiTM</footer>
</body>
</html>

