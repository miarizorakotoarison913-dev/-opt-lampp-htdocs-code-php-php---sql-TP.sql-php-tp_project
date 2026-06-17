<?php
include( '../function/connect.php');
include_once '../function/fonction.php';
    $info = $_GET["info"];
    $emp_info = get_info_employees($info);

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
<body class="bg-light">

    <header>
        
    <div class="section  bg-warning py-3 shadow-sm">
    <a href="liste.php">Retour à la liste</a>
    <a href="employees.php">Retour à la liste employees</a>
    <h1 class="fw-bold text-center text-dark mb-0">INFO EMPLOYEE</h1>
    </div>
    </header>

    <main>
        <div class="container mt-4">    
            <?php
                foreach($emp_info as $info_emp) {
            ?>
            <h3>Numero Employee : <?= $info_emp["emp_no"] ?></h3>
            <h3>Nom : <?= $info_emp["last_name"] ?></h3>
            <h3>Prénom : <?= $info_emp["first_name"] ?></h3>
            <h3>Sexe : <?= $info_emp["gender"] ?></h3>
            <h3>Date de naissance : <?= $info_emp["birth_date"] ?></h3>
            <h3>Date d'embauche : <?= $info_emp["hire_date"] ?></h3>
            <?php } ?>
        </div>
    </main>
 
    
</body>
</html>