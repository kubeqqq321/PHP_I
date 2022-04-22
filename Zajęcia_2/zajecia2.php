<!DOCTYPE html>
<html>
<head>
        <title>Pierwsza apka</title>

        <style>

        .input {
         background-color: white;
         color: black;
         border: 2px solid #4CAF50; /* Green */
         transition-duration: 0.4s;
        }
        .input:hover {
        background-color: #4CAF50; /* Green */
        color: white;
        }

        </style>
</head>

<body>

    <h1>Witaj w sklepie</h1>

    <form action="Przetworz.php" method="post">
        <table style="border : 0px;">
        <tr style="background-color: #cccccc">
            <td>Products</td>
            <td>ilosc</td>

        </tr>
        <tr>
            <td>Opony </td>
            <td><input type="number" maxlength="3" name="Opony"></td>

        </tr>
        <tr>
            <td>Swiece</td>
            <td><input type="number" maxlength="3" name="Swiece"></td>

        </tr>
        <tr>
            <td>Oleje</td>
            <td><input type="number" maxlength="3" name="Oleje"></td>

        </tr>
        </table>
        <input type="submit" value="Złóż zamówienie">  
        
        
        
    </form>
</body>
</html>
