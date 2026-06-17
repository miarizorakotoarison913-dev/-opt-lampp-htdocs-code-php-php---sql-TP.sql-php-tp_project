<?php

include('../function/connect.php');
include_once '../function/fonction.php';
dbconnect();
$id = $_GET["id"];
$employees = get_employees($id);



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

            <h1>FICHE DES EMPLOYEES</h1>
        </div>

    </header>

    <main>


        <div class="container mt-4">
            <table class="table table-bordered table-striped shadow-sm" width="1000">
                <tr>
                    <th>Numero Employees</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>hire_date</th>
                    <th>historique</th>
                    <th>Postuler</th>
                </tr>
                <?php foreach ($employees as $employee) { ?>
                    <tr>
                        <td width="200"><?= $employee["emp_no"] ?></td>
                        <td width="200"><?= $employee["first_name"] ?></td>
                        <td width="200"><?= $employee["last_name"] ?></td>
                        <td width="200"><?= $employee["gender"] ?></td>
                        <td width="200"><?= $employee["hire_date"] ?></td>
                        <td width="200"><a href="historique.php?id=<?= $employee["emp_no"] ?>">historique</a></td>
                        <td width="200"><a href="manager.php">devenir manager</a></td>
                       
                    </tr>
                <?php } ?>

            </table>
            <a href="employees.php">--Retour--</a>


        </div>
    </main>


</body>

</html>