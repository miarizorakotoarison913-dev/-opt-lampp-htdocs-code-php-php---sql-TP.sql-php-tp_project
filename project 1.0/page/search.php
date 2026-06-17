<?php
session_start();

if(!isset($_SESSION["search_emp"]) && !isset($_SESSION["search_dep"]) && !isset($_SESSION["search_age"]) && !isset($_SESSION["searched"])) {
    header("Location: ../index.php");
    exit();
}
$searched_emp     = $_SESSION["search_emp"] ?? [];
$searched_dep     = $_SESSION["search_dep"] ?? [];
$searched_min_max = $_SESSION["search_age"] ?? [];

//all
$searched = $_SESSION["searched"] ?? [];
unset($_SESSION["search_emp"]);
unset($_SESSION["search_dep"]);
unset($_SESSION["search_age"]);
unset($_SESSION["searched"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Résultats</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

</head>
<body>
    <div class="container mt-4">
        <a href="../index.php" class="btn btn-secondary mb-3">Retour</a>

        <?php if(!empty($searched_emp)){ ?>
        <h3>Employés (<?= count($searched_emp) ?>)</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Date naissance</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($searched_emp as $emp){ ?>
                <tr>
                    <td><?= $emp['emp_no'] ?></td>
                    <td><?= $emp['first_name'] ?></td>
                    <td><?= $emp['last_name'] ?></td>
                    <td><?= $emp['birth_date'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php } ?>

    
        <?php if(!empty($searched_dep)){ ?>
        <h3>Départements (<?= count($searched_dep) ?>)</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nom</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($searched_dep as $dep){ ?>
                <tr>
                    <td><?= $dep['dept_no'] ?></td>
                    <td><?= $dep['dept_name'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php } ?>

        <?php if(!empty($searched_min_max)){?>
        <h3>Employés par âge (<?= count($searched_min_max) ?>)</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Âge</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($searched_min_max as $age){ ?>
                <tr>
                    <td><?= $age['emp_no'] ?></td>
                    <td><?= $age['first_name'] ?></td>
                    <td><?= $age['last_name'] ?></td>
                    <td><?= date('Y') - date('Y', strtotime($age['birth_date'])) ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php }?>

        <?php if(!empty($searched)){?>
        <h3>Nombre de résultat(<?= count($searched) ?>)</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>N° Departements</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Date de naissance</th>
                    <th>Âge</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($searched as $s){ ?>
                <tr>
                    <td><?= $s['emp_no'] ?></td>
                    <td><?= $s['dept_no'] ?></td>
                    <td><?= $s['first_name'] ?></td>
                    <td><?= $s['last_name'] ?></td>
                    <td><?= $s['birth_date'] ?></td>
                    <td><?= date('Y') - date('Y', strtotime($s['birth_date'])) ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php }?>
    </div>
</body>
</html>