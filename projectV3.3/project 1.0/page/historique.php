
<?php
session_start();
include( '../function/connect.php');
include_once '../function/fonction.php';
dbconnect();
$id= $_GET["id"];
$_SESSION["id"] = get_salaries($id);


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
    <a href="employees.php" class="btn btn-secondary mb-3">Retour</a>

    <h1>-HISTORIQUES-</h1>
    </div>
    </header>

    <main>
        <div class="container mt-4">       
            <table class="table table-bordered table-striped shadow-sm" width="1000">
                <tr>
                    <th>emp_no</th>
                    <th>salary</th>
                    <th>from_date</th>
                    <th>to_date</th>
                </tr>
        <?php foreach($_SESSION["id"]  as $hist2) { ?>
            <tr>
                <td width = "200" ><?= $hist2["emp_no"]?></td>
                <td width = "200" ><?= $hist2["salary"]?></td>
                <td width = "200" ><?= $hist2["from_date"]?></td>
                <td width = "200" ><?= $hist2["to_date"]?></td>
            </tr>
        <?php } ?>
     
            </table>
        </div>
    </main>
 
    
</body>
</html>