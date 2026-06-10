<?php
include( '../function/connect.php');
include_once '../function/fonction.php';
dbconnect();
$id_dep_emp = $_GET["id_dep_emp"];
$emp_dept = get_dep_employees($id_dep_emp);

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
                    <th>Numero Employees</th>
                    <th>Numero Departement</th>
                    <th>From date</th>
                    <th>To date</th>
                </tr>
                
        <?php foreach($emp_dept as $employees) { ?>
            <tr>

                <td width="200"><?= $employees["emp_no"]?></td>
                <td width="200"><?= $employees["dept_no"]?></td>
                <td width="200"><?= $employees["from_date"]?></td>
                <td width="200"><?= $employees["to_date"]?></td>
            </tr>
        <?php } ?>        
            </table>
        </div>
    </main>
 
    
</body>
</html>