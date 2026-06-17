<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
       <div class="section text-center bg-warning py-3 shadow-sm">
        <h1>--BIENVENUE--</h1>
    <h1><a href="page/liste.php"></a></h1>
    </div>
    </header>
    <main>
        <div class="barre mt-4">
            <form action="traitement/trait_search.php" method="get">
                <input type="text" name="emp" placeholder="Rechercher un employee" value="Lortz">
                <input type="text" name="dep" placeholder="Departement" value="d009">
                <input type="number" name="min" placeholder="age minimal" value="60">
                <input type="number" name="max" placeholder="age maximal" value="80">

                <br>
                <?php
                if(isset($_SESSION["search_none"])){
                    echo $_SESSION['search_none'];
                    unset($_SESSION["search_none"]);
                }
                ?>
                <br>
                <input type="submit" value="Rechercher">

            </form>
        </div>
        <br><br><br><br><br>
        <p class="text-center">Voir<a href="page/liste.php" class="text-decoration-none text-info fw-semibold">LISTE DES DEPARTEMENTS</a></p>
        <p class="text-center">Voir<a href="page/liste_nb_employees.php" class="text-decoration-none text-info fw-semibold">NOMBRES EMPLOYEES HOMME et FEMME</a></p>
            

    </main>
 
    
</body>
</html>