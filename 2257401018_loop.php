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
    <title>Perulangan Form</title>
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

        .loop-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
        }

        .loop-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333333;
        }

        .loop-container form {
            display: flex;
            flex-direction: column;
        }

        .loop-container label {
            margin-bottom: 5px;
            color: #555555;
        }

        .loop-container input[type="text"],
        .loop-container input[type="jumlah"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #dddddd;
            border-radius: 4px;
            font-size: 15px;
        }

        .loop-container input[type="submit"] {
            background-color: darkgray;
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

        .loop-container input[type="submit"]:hover {
            background-color: gray;
        }

        .error-message {
            color: #ff0000;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
  <div class="loop-container">
    <form action="" method="POST">
    <h2>Form Perulangan</h2>

    Text:
    <br>
    <input type="text" name="text">

    Jumlah Perulangan:
    <br>
    <input type="jumlah" name="jumlah">
    <br>

    <input type="submit" value="Cetak" name="cetak">
    </form> <br>

    <?php
    
    if(isset($_POST['jumlah'])){
        $text = $_POST['text'];
        $jumlah = $_POST['jumlah'];

        for($i=1; $i<=$jumlah; $i++ ){
            echo $i. "$text <br><br>";
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