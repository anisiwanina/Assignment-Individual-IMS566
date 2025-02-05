<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location: welcome.php");
    exit;
}

$users = [
    "anis24" => "nina24",
    "miazahra" => "zahra123",
    "alifnajmi" => "alif04",
    "seomate91" => "seohyunforever",
    "adamuwais" => "adamuwais12"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] == $password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        header("Location: welcome.php");
        exit;
    } else {
        $error_message = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - UiTM E-Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('img1.jpg'); 
            background-size: cover;
            background-position: center;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            width: 100%;
            max-width: 450px;
        }

        .card {
            border-radius: 12px;
            background-color: rgba(44, 22, 67, 0.85); 
            border: none;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3); 
        }

        .card-header {
            background-color: rgba(102, 51, 153, 0.9); 
            color: white;
            text-align: center;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            font-size: 22px;
            font-weight: bold;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 6px;
        }

        .btn-primary {
            background-color: #A663CC; 
            border: none;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #914EC0;
        }

        .alert-danger {
            background-color: rgba(220, 20, 60, 0.9);
            color: white;
            border: none;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="card">
            <div class="card-header">UiTM E-Profile Login</div>

            <div class="card-body">
                <?php
                if (isset($error_message)) {
                    echo "<div class='alert alert-danger'>$error_message</div>";
                }
                ?>
                <form method="post" action="login.php">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>


</body>
</html>
