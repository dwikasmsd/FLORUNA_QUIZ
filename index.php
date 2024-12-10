<?php
// Start session
session_start();

// Check if user is already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floruna Quiz</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #000, #b3ffc4);
        }
        .container {
            display: flex;
            width: 80%;
            max-width: 600px;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .left {
            background: #000;
            color: white;
            padding: 20px;
            text-align: center;
            flex: 1;
        }
        .left img {
            max-width: 100%;
            height: auto;
        }
        .right {
            padding: 20px;
            flex: 1;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        input[type="text"], input[type="password"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
        }
        .register {
            margin-top: 10px;
            text-align: center;
        }
        .register a {
            text-decoration: none;
            color: #007bff;
        }
        .register a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <h1>Floruna Quiz</h1>
            <img src="orangutan.png" alt="Orangutan">
        </div>
        <div class="right">
            <form action="login.php" method="post">
                <label for="username">ID:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Log In</button>
                <div class="register">
                    <p>or <a href="register.php">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
