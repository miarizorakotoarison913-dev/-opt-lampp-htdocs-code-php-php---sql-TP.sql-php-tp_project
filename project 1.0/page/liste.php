<?php
include( '../function/connect.php');
include_once '../function/fonction.php';
dbconnect();
$sql= "select dept_no,dept_name from departments";
$sql_manager = "select mgr_no, mgr_name from managers"; 
$resultat = get_all_lines($sql);

$resultat = get_dep($sql);
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
<body>

    <header>
    <div class="section text-center bg-warning">
    <h1>LISTE DES DEPARTEMENTS</h1>
    </div>
    </header>

    <main>
        <div class="container">       
            <table border="1" width="500">
                <tr>
                    <th>Numero Departement</th>
                    <th>Nom Departement</th>
                </tr>
                
        <?php foreach($resultat as $resultat2) { ?>
            <tr>

                <td width="200"><?= $resultat2["dept_no"] ?></td>
                <td width="200"><a href="employees.php?id_dep_emp=<?= $resultat2["dept_no"]?>"><?= $resultat2["dept_name"]?></a></td>


            </tr>
        <?php } ?>        
            </table>
              <br>
            <br>
        <table border="2">
            <tr>
                <td>dep_no</td>
                <td>dep_name</td>
                <td>first_name</td>
  
            </tr>
        <?php foreach($resultat_manager as $resultat_manager2) { ?>
            <tr>

                <td width="200"><?= $resultat_manager2["dept_no"]?></td>
                <td width="200"><?= $resultat_manager2["dept_name"]?></td>
                <td width="200"><?= $resultat_manager2["first_name"]?></td>


            </tr>
        <?php } ?> 
        </tab>
        </div>
    </main>
 
    
</body>
</html>