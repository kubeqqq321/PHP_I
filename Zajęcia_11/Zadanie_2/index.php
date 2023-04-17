<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <script src="index.js"></script>
    <title>Logowanie</title>
</head>

<body>
    <div class="loginContainer">
        <label for="login">Login</label>
        <div class="container">
            <form action="includes/index.inc.php" method="post">


                <input type="text" name="Login" placeholder="Login / Email">
                <input type="password" name="password" placeholder="Hasło">
                <input type="submit" name="submit" value="Zaloguj">
                <input type="submit" name="signup" value="Zarejestuj się">

                <?php 
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyInput") {
                        echo "<p>Wypelnij wszystkie pola</p>";
                    } elseif ($_GET['error'] == "wrongLogin") {
                        echo "<p>Zły login bądź hasło</p>";
                    }
                }
                ?>
            </form>
        </div>
    </div>
    <div class="restContainer">
        <div class="logo"></div>
    </div>




    </body>

</html>