<?php
session_start();
include( '../function/connect.php');
include_once '../function/fonction.php';
//$id_dep_emp = $_GET["id_dep_emp"];
$_SESSION["limite"] = 20;
$offset = 0;
$_SESSION["result"] = get_dep_employees($_SESSION["id_emp"], $_SESSION["limite"], $offset);
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
    <a href="liste.php" class="btn btn-secondary mb-3">Retour</a>
    <h1>LISTE DES DEPARTEMENTS</h1>
    </div>
    </header>

    <main>
        <div class="container mt-4">       
            <table class="table table-bordered table-striped shadow-sm" width="1000">
                <tr>
                    <th>Numero Employees</th>
                    <th>Numero Departement</th>
                    <th>From date</th>
                    <th>To date</th>
                    <th>Age</th>

                </tr>
                
        <?php foreach($_SESSION["result"] as $employees) { ?>
            <tr>

                <td width="200"><a href="fiche_employees.php?id=<?= $employees["emp_no"] ?>"><?= $employees["emp_no"]?></a></td>
                <td width="200"><?= $employees["dept_no"]?></td>
                <td width="200"><?= $employees["from_date"]?></td>
                <td width="200"><?= $employees["to_date"]?></td>
                <td width="200"><?php
                echo Calculer_age($employees["birth_date"]);
                ?></td>
            </tr>
        <?php } ?>        
            </table>
        </div>
    </main>
    <footer>
      
    </footer>
    
</body>
</html>