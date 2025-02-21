<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit;
}

// Sample profile data
$profiles = [
    ["id" => 1, "name" => "Alya Irdina Binti Mohd Azman", "program" => "Computer Science", "student_id" => "2024789174", "image" => "image/alya.jpg", "email" => "alyairdina@uitm.com"],
    ["id" => 2, "name" => "Tunku Aina Shafeeqah Binti Tunku Sulieman", "program" => "Business", "student_id" => "2024677598", "image" => "image/tunku.jpg", "email" => "tunkuaina@uitm.com"],
    ["id" => 3, "name" => "Hanie Haida Binti Hamdan", "program" => "Engineering", "student_id" => "2024657890", "image" => "image/hanie.jpg", "email" => "haniehaida@uitm.com"],
    ["id" => 4, "name" => "Rifaa Nifail Bin Rashidi", "program" => "Education", "student_id" => "2024567812", "image" => "image/rifaa.jpg", "email" => "rifaanifail@uitm.com"],
    ["id" => 5, "name" => "Nur Irdina Izzati Binti Mohamad Nazri", "program" => "Law", "student_id" => "2024563178", "image" => "image/irdina.jpg", "email" => "irdina@uitm.com"],
    ["id" => 6, "name" => "Nur Izzatul Athirah Binti Nor Asmadi", "program" => "Psychology", "student_id" => "2024714321", "image" => "image/izzatul.jpg", "email" => "izzatulathirh@uitm.com"],
    ["id" => 7, "name" => "Dhiya maisarah Binti Mohd Asri", "program" => "Arts", "student_id" => "2026755387", "image" => "image/dhiya.jpg", "email" => "dhiyamai@uitm.com"],
    ["id" => 8, "name" => "Farah Farzana Binti Azman", "program" => "Health Sciences", "student_id" => "2024165123", "image" => "image/farah.jpg", "email" => "farahrarz@uitm.com"]
];

$id = $_GET['id'] ?? null;

if (!$id) {
    echo "Profile not found.";
    exit;
}

// Find the profile by matching the id
$profile = null;
foreach ($profiles as $p) {
    if ($p['id'] == $id) {
        $profile = $p;
        break;
    }
}

if (!$profile) {
    echo "Profile not found.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .student-card {
            width: 400px;
            background-color: #ecc9c9;
            color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            position: relative;
            overflow: hidden;
        }
        .student-card::before {
            content: '';
            position: absolute;
            top: -50px;
            left: -50px;
            width: 150px;
            height: 150px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            z-index: 0;
        }
        .student-card h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        .student-card .profile-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
            display: block;
            border: 3px solid white;
        }
        .student-card p {
            margin: 5px 0;
            font-size: 16px;
            line-height: 1.5;
            text-align: left;
        }
        .student-card strong {
            color: white;
        }
        .student-card .back-link {
            margin-top: 20px;
            display: block;
            text-align: center;
            text-decoration: none;
            color: #0056b3;
            background-color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }
        .student-card .back-link:hover {
            background-color: #e6e6e6;
        }
    </style>
</head>
<body>
    <div class="student-card">
        <h1>Student Card</h1>
        <img class="profile-pic" src="<?= $profile['image'] ?>" alt="<?= $profile['name'] ?>">
        <p><strong>Studies at:</strong> UiTM</p>
        <p><strong>Name:</strong> <?= $profile['name'] ?></p>
        <p><strong>Program:</strong> <?= $profile['program'] ?></p>
        <p><strong>Student ID:</strong> <?= $profile['student_id'] ?></p>
        <a class="back-link" href="profiles.php">Back to Profiles</a>
    </div>
</body>
</html>
