<?php
include( '../inc/connect.php');
include_once '../inc/fonction.php';
dbconnect();

 
$resultat = get_dep($sql);
$resultat_manager = get_manager($sql);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <header><h1><strong>Test</strong></h1></header>

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
        </tab

        
       
    </main>




</body>
</html>