<?php

include('../function/connect.php');
include_once '../function/fonction.php';
dbconnect();




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <div class="section text-center bg-warning py-3 shadow-sm">

            <h1>Devenir - manager</h1>
        </div>

    </header>

    <main>
        <form action="manager.php" method="post">

            <p>taper emp_no<input type="number" name="emp_no"></p>
            <p>date de naissance <input type="date"  name="birth_date">
            <p>prenom<input type="text"  name="first_name"></p>
            <p>nom<input type="text"  name="last_name"></p>
            <p>genre<input type="text"  name="gender"></p>
            <input type="submit" value="Valider">
            
        </form>
    
    </main>


</body>

</html>