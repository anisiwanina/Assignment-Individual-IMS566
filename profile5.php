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
    <title>Profile - Evelyn Agus</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #EAD6FF; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .profile-container {
            background-color: white;
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(100, 50, 120, 0.2);
            text-align: center;
            max-width: 450px;
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #B98CDC;
            margin-bottom: 15px;
        }

        .profile-name {
            font-size: 24px;
            font-weight: bold;
            color:rgb(12, 11, 12);
        }

        .profile-info {
            font-size: 16px;
            color:rgb(12, 12, 12);
            text-align: left;
            margin: 10px 0;
        }

        .info-label {
            font-weight: bold;
            color:rgb(13, 13, 14);
        }

        .btn-back {
            background-color: #B98CDC;
            border: none;
            color: black;
            padding: 10px 15px;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
        }

        .btn-back:hover {
            background-color: #A064C8;
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

    <div class="profile-container">
        <img src="evelyn.jpg" alt="Evelyn Agus" class="profile-img">
        <h2 class="profile-name">Evelyn A/P Agus</h2>

        <p class="profile-info"><span class="info-label">Matric Number:</span> 2024884756</p>
        <p class="profile-info"><span class="info-label">Class:</span> KIM1101A</p>
        <p class="profile-info"><span class="info-label">Faculty:</span> Faculty of Information Management</p>
        <p class="profile-info"><span class="info-label">Email:</span> 2024884756@student.uitm.edu.my</p>
        <p class="profile-info"><span class="info-label">Phone:</span> 017-765 4321</p>
        <p class="profile-info"><span class="info-label">Address:</span> Jalan Jaya, 90100 Kota Kinabalu, Sabah</p>
        <p class="profile-info"><span class="info-label">Personal Advisor (PA):</span> Puan Farah Binti Ismail</p>
        <a href="welcome.php" class="btn-back">Back to Dashboard</a>
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>
