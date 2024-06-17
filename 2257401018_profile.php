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
    <title>Profile Form</title>
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

        .profile-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 450px;
        }

        .profile-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333333;
        }

        .profile-container form {
            display: flex;
            flex-direction: column;
        }

        .profile-container label {
            margin-bottom: 8px;
            color: #555555;
        }

        .profile-container input[type="nim"],
        .profile-container input[type="nama"],
        .profile-container input[type="kelas"],
        .profile-container input[type="email"],
        .profile-container input[type="nohp"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #dddddd;
            border-radius: 4px;
            font-size: 15px;
        }

        .profile-container input[type="submit"] {
            background-color: turquoise;
            color: white;
            border: none;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .profile-container input[type="submit"]:hover {
            background-color: darkgreen;
        }

        .error-message {
            color: #ff0000;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h2>Profile Form</h2>
        <form action="" method="POST" name="form1">
            <label for="nim">NIM:</label>
            <input type="nim" id="nim" name="nim" required>
            
            <label for="nama">Nama:</label>
            <input type="nama" id="nama" name="nama" required>

            <label for="kelas">Kelas:</label>
            <input type="kelas" id="kelas" name="kelas" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="nohp">Nomor HP:</label>
            <input type="nohp" id="nohp" name="nohp" required>
            
            <input type="submit" name="simpan" value="Simpan">
            
        </form>

        <br>

        <?php
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $email = $_POST['email'];
        $nohp = $_POST['nohp'];


            if (isset($_POST['simpan'])) {
                $nim = $_POST['nim'];
                $nama = $_POST['nama'];
                $kelas = $_POST['kelas'];
                $email = $_POST['email'];
                $nohp = $_POST['nohp'];
            ?>

            <table border="1" cellspacing="0" cellpadding="8" align="center">
                <tr>
                    <td>NIM</td><br>
                    <td><?php echo $nim; ?></td>
                    </tr>
                    <tr>
                    <td>Nama</td>
                    <td><?php echo $nama; ?></td>
                    </tr>
                    <tr>
                    <td>Kelas</td>
                    <td><?php echo $kelas; ?></td>
                    </tr>
                    <tr>
                    <td>Email</td>
                    <td><?php echo $email; ?></td>
                    </tr>
                    <tr>
                    <td>Nomor HP</td>
                    <td><?php echo $nohp; ?></td>
                </tr>
        <?php
        }
        ?>
        </table>

        <br><br>
        <body style="text-align: left;">
            <a href="indext.php">Kembali</a>
        </body>
    </div>
</body>
</html>