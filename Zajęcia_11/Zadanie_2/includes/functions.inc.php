<?php


// sign up ----------------------------------------------------------------------------
function emptyInputSignup($login, $email, $userName, $userSurname, $password, $repeatPassword)
{
    $result = false;
    if (
        empty($login) || empty($email) || empty($userName) ||
        empty($userSurname) || empty($password) || empty($repeatPassword)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}




function invalidLogin($login)
{
    $result = false;
    //sprawdzamy sobie poprawnosc loginu
    if (!preg_match("/^[a-zA-Z0-9]*$/", $login)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email)
{
    $result = false;
    //sprawdzamy email z funkcja filter_var ktora zwraca 
    //wartosc true kiedy jesst on poprawny
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function passwordCheck($password, $repeatPassword)
{
    $result = false;
    //sprawdzamy czy mamy takie same haasła
    if ($password !== $repeatPassword) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function UserExists($connect, $login, $email)
{
    $sql = "SELECT * FROM users WHERE usersLogin = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($connect);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $login, $email); //ss musi byc rowne ilosci parametrow
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row; //zwracamy dane jeżeli użytkownik istnieje
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}


function createUser($connect, $login, $email, $userName, $userSurname, $password)
{
    $sql = "INSERT INTO users (usersLogin, usersEmail, usersImie, usersNazwisko, usersHaslo) 
            VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($connect);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    //hasowanie hasla jeżeli nie chcemy można zakomentowac wtedy beda widoczne hasla
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $login, $email, $userName, $userSurname, /*$password*/ $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
}


//login ---------------------------------------------------------------------------------


function emptyInputLogin($login, $password)
{
    $result = false;
    if (empty($login) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function loginUser($connect, $login, $password){

   $userExists = UserExists($connect, $login, $login);

    if($userExists === false){
        header("location: ../index.php?error=wrongLogin");
        exit();
    }

    $hashedPassword = $userExists["usersHaslo"];
    $checkPassword = password_verify($password, $hashedPassword);

    if($checkPassword === false){
        header("location: ../index.php?error=wrongLogin");
        exit();
    }
    elseif($checkPassword === true){
        session_start();
        $_SESSION['userid'] = $userExists["usersId"];
        $_SESSION['userlogin'] = $userExists["usersLogin"];
        header("location: ../estates.php");
        exit();
    }


}


//---------------------------- notatki ------------------------

function createNote($title, $desc, $connect, $userId){
    $sql = "INSERT INTO notes (usersId, notesTytul, notesText) VALUES (?,?,?)";
    $stmt = mysqli_stmt_init($connect);


    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../addNote?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $userId, $title, $desc);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../notes.php?error=none");
}


function generateNotes($userId, $connect){
    $sql = "SELECT notesTytul, notesId FROM notes WHERE usersId=$userId";
    $stmt = mysqli_stmt_init($connect);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    //mysqli_stmt_bind_param($stmt, "s", $userId ); 
    //mysqli_stmt_execute($stmt);

    $resultData = mysqli_query($connect, $sql);
    //if ($row = mysqli_fetch_assoc($resultData)) {} 
    //else { $result = false; exit(); }

    $rows = mysqli_fetch_all($resultData, MYSQLI_ASSOC);
    foreach ($rows as $row)
    {
        //echo $row["notesTytul"];
        echo '<input type="submit" name="note" class="notesField" value="',$row['notesTytul'],'">';
        echo '<input type="hidden" class="emptyField" name="',$row['notesTytul'],'" value="',$row['notesId'],'"></div>';
    }
}

function generateNoteText($userId, $connect, $noteId){
    $sql = "SELECT notesText, notesTytul FROM notes WHERE usersId=$userId and notesId = $noteId";
    $stmt = mysqli_stmt_init($connect);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $resultData = mysqli_query($connect, $sql);
    $rows = mysqli_fetch_all($resultData, MYSQLI_ASSOC);
    

    foreach($rows as $row)
    {
    echo '
    <div class="notes">
    <form action="actionButtons/addNote.actionButtons.php" method="post">
    <input type="text" class="inputTitleField" name="title" placeholder="tytuł notatki" value="',$row['notesTytul'];
    echo'">
    <textarea class="inputTextField" name="desc"placeholder="treść notatki">',$row['notesText'],'</textarea>
        <input type="submit" name="reject" class="rejectButton" value="Zrezygnuj"></input>
        <input type="submit" name="delete" class="rejectButton" value="Usuń"></input>
        <input type="submit" name="modify" class="acceptButton" value="Akceptuj"></input>
    </form>
    </div>';
    }
}

function modifyNote($title, $desc, $connect, $noteId){
    $sql = "UPDATE notes SET notesTytul=?, notesText=? WHERE notesId = $noteId";
    $stmt = mysqli_stmt_init($connect);


    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../addNote?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $title, $desc);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../notes.php?error=none");
}


function deleteNote($noteId, $connect){
    $sql = "DELETE FROM notes WHERE notesId = $noteId";
    $stmt = mysqli_stmt_init($connect);


    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../addNote?error=stmtfailed");
        exit();
    }

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../notes.php?error=none");
}

// -------------- estates ----------------------------

function emptyInputEstate($title,$location,$price,$room,$surface,$desc ){
    $result = false;
    if (
        empty($title) || empty($location) || empty($price) ||
        empty($room) || empty($surface) || empty($desc)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function createEstate($price,$userId,$room,$surface,$location,$title,$desc,$connect){
    
    
    $sql = "INSERT INTO estates (estatesCena, usersId, estatesLiczbaPokoj, estatesWielkosc, estatesLokalizacja, estatesName, estatesOpis) 
    VALUES (?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($connect);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../addEstate.php?error=stmtfailed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "iiiisss", $price,$userId,$room,$surface,$location,$title,$desc);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../estates.php?error=none");
}

function generateEstates($userId, $connect){
    $sql = "SELECT estatesId, estatesName, estatesLiczbaPokoj, estatesWielkosc, estatesCena, estatesOpis, estatesLokalizacja FROM estates WHERE usersId=$userId";
    $stmt = mysqli_stmt_init($connect);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $resultData = mysqli_query($connect, $sql);
    $rows = mysqli_fetch_all($resultData, MYSQLI_ASSOC);
    

    foreach($rows as $row)
    {
    echo '
    <div class="container">
        <div class="image"><img src="img/dom2.jpg" class="img"></div>
        <div class="description">',$row['estatesName'],$row['estatesLiczbaPokoj'],$row['estatesWielkosc'],$row['estatesCena'],$row['estatesOpis'],$row['estatesLokalizacja'],'</div>
        <form action="actionButtons/estates.actionButtons.php" method="post">
            <input type="hidden" name="key" value="',$row['estatesId'],'"></input>
            <input type="submit" name="prevImage" class="button" value="Poprzednie zdjęcie"></input>
            <input type="submit" name="nextImage" class="button" value="Następne zdjęcie"></input>
            <input type="submit" name="modify" class="button" value="Modyfikuj"></input>
            <input type="submit" name="delete" class="button" value="Usuń"></input>
        </form>
    </div>';
    }
}


function updateEstate($price,$estateId,$room,$surface,$location,$title,$desc,$connect){
    
    
    $sql = "UPDATE estates SET estatesCena=?, estatesLiczbaPokoj=?, estatesWielkosc=?, estatesLokalizacja=?, estatesName=?, estatesOpis=? WHERE estatesId = $estateId";
    $stmt = mysqli_stmt_init($connect);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../addEstate.php?error=stmtfailed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "iiisss", $price,$room,$surface,$location,$title,$desc);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../estates.php?error=none");
}

function deleteEstate($estateId, $connect){
    $sql = "DELETE FROM estates WHERE estatesId = $estateId";
    $stmt = mysqli_stmt_init($connect);


    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../addEstate?error=stmtfailed");
        exit();
    }

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../estates.php?error=none");
}

// ----------- setttings ---------------


function generateData($userId, $connect)
{
    $sql = "SELECT * FROM users WHERE usersId=$userId";
    $stmt = mysqli_stmt_init($connect);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $resultData = mysqli_query($connect, $sql);
    $rows = mysqli_fetch_all($resultData, MYSQLI_ASSOC);
    

    foreach($rows as $row)
    {
        echo '
        <form action="actionButtons/settings.actionButtons.php" method="post">
            <input type="text" name="email" placeholder="Email" value="',$row['usersEmail'],'">
            <input type="text" name="username" placeholder="Imie" value="',$row['usersImie'],'">
            <input type="text" name="usersurname" placeholder="Nazwisko" value="',$row['usersNazwisko'],'">
            <input type="password" name="pwd" placeholder="Hasło" value="">
            <input type="password" name="pwdrepeat" placeholder="Powtórz Hasło">
            <input type="submit" name="submit" class="acceptButton" value="Zmień dane">
            <input type="submit" name="resign" class="rejectButton" value="Zrezygnuj">
        </form>
        ';  
    }
}
