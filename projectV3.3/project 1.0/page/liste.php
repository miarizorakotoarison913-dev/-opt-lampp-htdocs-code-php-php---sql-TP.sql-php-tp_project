<?php
include( '../function/connect.php');
include_once '../function/fonction.php';
dbconnect();
$sql= "select dept_no,dept_name from departments";
$sql_manager = "select mgr_no, mgr_name from managers"; 
$resultat = get_all_lines($sql);
$resultat_manager = get_manager($sql);
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
    <div class="section text-center bg-warning py-3 shadow-sm">
    <h1 class="fw-bold text-dark mb-0">LISTE DES DEPARTEMENTS</h1>
    </div>
    </header>

    <main>
        <div class="container mt-4">       
            <table class="table table-bordered table-striped shadow-sm" width="1000">
                <thead class="table-warning">
                <tr>
                    <th>Numero Departement</th>
                    <th>Nom Departement</th>
                    <th>Nom Manager</th>
                </tr>
                </thead>
                <tbody>
        <?php foreach($resultat_manager as $resultat_manager2) { ?>
            <tr>
                <td width="200"><?= $resultat_manager2["dept_no"]?></td>
                <td width="200"><a href="../traitement/traitement.php?id_dep_emp=<?= $resultat_manager2["dept_no"]?>" class="text-decoration-none text-info fw-semibold"><?= $resultat_manager2["dept_name"]?></a></td>
                <td width="200"><?= $resultat_manager2["first_name"]?></td>
            </tr>
        <?php } ?>
        </tbody>
        </table>
        </div>
    </main>
 
    
</body>
</html>