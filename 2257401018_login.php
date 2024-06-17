<?php
    /**
     * NIM      : 2257401018
     * Nama     : Lita Yuliana
     * Kelas    : MI22A 
     */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333333;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .login-container label {
            margin-bottom: 6px;
            color: #555555;
        }

        .login-container input[type="username"],
        .login-container input[type="password"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #dddddd;
            border-radius: 4px;
            font-size: 15px;
        }

        .login-container input[type="submit"] {
            background-color: darkturquoise;
            color: white;
            border: none;
            padding: 12px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-container input[type="submit"]:hover {
            background-color: blue;
        }

        .error-message {
            color: #ff0000;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login Form</h2>
        <form action="" method="POST">
            <label for="username">Username:</label>
            <input type="username" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Login" name="login">
        </form>

        <?php
        
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            
            if (($username == "admin") && ($password == "admin")) {
                echo "<p>Login Berhasil</p>";
            } else {
                echo "<p class='error-message'>Username/Password tidak sesuai</p>";
            }
        }
        ?>

        <br><br>
        <body style="text-align: center;">
            <a href="indext.php">Kembali</a>
        </body>


    </div>
</body>
</html>