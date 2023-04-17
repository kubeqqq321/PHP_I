<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Rejestracja</title>
</head>

<body>
    <div class="loginContainer">
        <div class="container">
            <label for="login">Rejestracja</label>
            <form action="includes/signup.inc.php" method="post">


                <input type="text" name="login" placeholder="Login">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="username" placeholder="Imie">
                <input type="text" name="usersurname" placeholder="Nazwisko">
                <input type="password" name="pwd" placeholder="Hasło">
                <input type="password" name="pwdrepeat" placeholder="Powtórz Hasło">

                <input type="submit" name="submit" value="Zarejestruj">
                <input type="submit" name="resign" value="Zrezygnuj">
                <?php

                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyInput") {
                        echo "<p>Wypelnij wszystkie pola</p>";
                    } elseif ($_GET['error'] == "invalidLogin") {
                        echo "<p>Wprwadz poprawny login</p>";
                    } elseif ($_GET['error'] == "invalidEmail") {
                        echo "<p>Wprwadz poprawny email</p>";
                    } elseif ($_GET['error'] == "passwordsDontMatch") {
                        echo "<p>Hasła są różne</p>";
                    } elseif ($_GET['error'] == "userExists") {
                        echo "<p>Taki uzytkwnik juz istnieje</p>";
                    } elseif ($_GET['error'] == "stmtfailed") {
                        echo "<p>Coś poszło nie tak, spróbuj ponownie</p>";
                    } elseif ($_GET['error'] == "none") {
                        echo "<p>Zarejestrowałeś/aś się </p>";
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