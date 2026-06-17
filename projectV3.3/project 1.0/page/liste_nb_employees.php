<?php
include( '../function/connect.php');
include_once '../function/fonction.php';
dbconnect();
$result_genre = get_men_women();
$result_salare = emploi_moyenne();
 

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
    <h1 class="fw-bold text-dark mb-0"> homme - femme - moyenne</h1>
    </div>
    </header>

    <main>

        <div class="container mt-4">       
            <table class="table table-bordered table-striped shadow-sm" width="1000">
                <thead class="table-warning">
                <tr>
                    
                    <th>Nombre homme femme</th>
                    <th>Genre</th>
                    
                    
                </tr>
                </thead>
                <tbody>
        <?php foreach($result_genre as $result_genre2) { ?>
            <tr>
                                               
                <td width="200"><?= $result_genre2["nb_homme_femme"]?></a></td>
                <td width="200"><?= $result_genre2["gender"]?></td>
            
                
                
            </tr>
        <?php } ?>
            <table class="table table-bordered table-striped shadow-sm" width="1000">
                <thead class="table-warning">
                <tr>
                    <th>Employe</th>
                    <th>Moyenne salaire</th>
                    
                    
                    
                </tr>
                </thead>
                <tbody>
        <?php foreach($result_salare as $result_salare2) { ?>
            <tr>
                <td width="200"><?= $result_salare2["title"]?></td>                                
                <td width="200"><?= $result_salare2["moyenne_salaire"]?></a></td>
                
            
                
                
            </tr>
        <?php } ?>








        </tbody>
        </table>




    </main>
 
    
</body>
</html>