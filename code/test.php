<?php
include( 'inc/connect.php');
include_once 'inc/fonction.php';
dbconnect();
$sql= "select (dept_no,dept_name) from departments"; 
$resultat = get_all_lines($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <main>
        <table border="2">
            <tr>
                <td>dep_no</td>
                <td>dep_name</td>
  
            </tr>
        <?php foreach($resultat as $resultat2) { ?>
            <tr>

                <td width="200"><?= $resultat2["dept_no"]?></td>
                <td width="200"><?= $resultat2["dept_name"]?></td>


            </tr>
        <?php } ?>    
    </main>


</body>
</html>