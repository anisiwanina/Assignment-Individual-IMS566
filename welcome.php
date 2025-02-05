<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html, body {
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            background-color: #D6B6FF;
            overflow: hidden; 
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: white;
            padding: 10px 20px; 
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logo {
            width: 120px; 
        }

        .logout-btn {
            background-color: #6C3483;
            border: none;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
        }

        .logout-btn:hover {
            background-color: #D6B6FF;
        }

        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 15px;
        }

        .profile-card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            padding: 15px;
            cursor: pointer;
            transition: 0.3s;
        }

        .profile-card:hover {
            transform: scale(1.05);
        }

        .profile-card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 3px solid #FF6B6B;
            object-fit: cover;
        }

        .profile-card h5 {
            margin-top: 10px;
            font-weight: bold;
        }

        .footer {
            background-color: rgba(44, 22, 67, 0.9); 
            color: white;
            padding: 10px 0;
            text-align: center;
            font-size: 14px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <div class="header">
        <img src="welcome.png" alt="UiTM Logo" class="logo">
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>

    <div class="content">
        <h1 class="mb-4">Welcome to UiTM Student E-Profiles</h1>

        <div class="container">
            <div class="row justify-content-center">
                <?php
                    $students = [
                        ["name" => "Anis Iwanina", "matric" => "2024905315", "image" => "anis.jpg", "link" => "profile1.php"],
                        ["name" => "Aliff Najmi", "matric" => "2024565987", "image" => "aliff.jpg", "link" => "profile2.php"],
                        ["name" => "Alice Davis", "matric" => "2024749821", "image" => "alice.jpg", "link" => "profile3.php"],
                        ["name" => "Umar Faliq", "matric" => "2024210543", "image" => "umar.jpg", "link" => "profile4.php"],
                        ["name" => "Evelyn Agus", "matric" => "2024876345", "image" => "evelyn.jpg", "link" => "profile5.php"]
                    ];

                    foreach ($students as $student) {
                        echo '<div class="col-md-4 col-sm-6 mb-4">';
                        echo '<div class="profile-card" onclick="window.location.href=\'' . $student["link"] . '\'">';
                        echo '<img src="' . $student["image"] . '" alt="Profile Picture">';
                        echo '<h5>' . $student["name"] . '</h5>';
                        echo '<p class="text-muted">Matric Number: ' . $student["matric"] . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>
