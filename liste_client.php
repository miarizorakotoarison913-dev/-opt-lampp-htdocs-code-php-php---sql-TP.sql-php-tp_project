<?php
$bdd = mysqli_connect('localhost', 'root', '', 'tp_php');
$resultat = mysqli_query($bdd, 'SELECT CODE_CLIENT,SOCIETE,ADRESSE,VILLE,PAYS FROM  CLIENTS');
$resultat1 = mysqli_query($bdd, 'SELECT CODE_CLIENT,SOCIETE,ADRESSE,VILLE,PAYS FROM CLIENTS LIMIT 30');
$resultat2 = mysqli_query($bdd, 'SELECT CODE_CLIENT,SOCIETE,ADRESSE,VILLE,PAYS FROM CLIENTS ORDER BY PAYS');
$resultat3 = mysqli_query($bdd, 'SELECT CODE_CLIENT,SOCIETE,ADRESSE,VILLE,PAYS FROM CLIENTS ORDER BY VILLE')

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>CLIENT</title>
</head>

<body>
    <div class="menu-fixe"><link rel="stylesheet" href="bootstrap/bootstrap/font/bootstrap-icons.css">
            <table border="2">
                <tr>
                    <th width="200">Code client </th>
                    <th width="200">Societe</th>
                    <th width="200">Adresse</th>
                    <th width="200">Ville</th>
                    <th width="200">PAys</th>
                </tr>
                <?php while ($donnees = mysqli_fetch_assoc($resultat)) { ?>
                    <tr>
                        <td><?php echo $donnees["CODE_CLIENT"] ?></td>
                        <td><?php echo $donnees["SOCIETE"] ?></td>
                        <td><?php echo $donnees["ADERSSE"] ?></td>
                        <td><?php echo $donnees["VILLE"] ?></td>
                        <td><?php echo $donnees["PAYS"] ?></td>
                    </tr>
                <?php } ?>
            </table>
    </main>
    </div>

    <div id="ordre" class="section pair text-center">
        <h1>Ordre </h1>
        <div>
            <h2>ORDRE PAR PAYS </h2>
            <table border="2">
                <tr>
                    <th width="200">Code client </th>
                    <th width="200">Societe</th>
                    <th width="200">Adresse</th>
                    <th width="200">Ville</th>
                    <th width="200">PAys</th>
                </tr>
                <?php while ($donnees1 = mysqli_fetch_assoc($resultat2)) { ?>
                    <tr>
                        <td><?php echo $donnees1["CODE_CLIENT"] ?></td>
                        <td><?php echo $donnees1["SOCIETE"] ?></td>
                        <td><?php echo $donnees1["ADERSSE"] ?></td>
                        <td><?php echo $donnees1["VILLE"] ?></td>
                        <td><?php echo $donnees1["PAYS"] ?></td>
                    </tr>
                <?php } ?>
            </table>
            <br>
            <h2>ORDRE PAR VILLE</h2>
            <table border="2">
                <tr>
                    <th width="200">Code client </th>
                    <th width="200">Societe</th>
                    <th width="200">Adresse</th>
                    <th width="200">Ville</th>
                    <th width="200">PAys</th>
                </tr>
                <?php while ($donnees11 = mysqli_fetch_assoc($resultat3)) { ?>
                    <tr>
                        <td><?php echo $donnees11["CODE_CLIENT"] ?></td>
                        <td><?php echo $donnees11["SOCIETE"] ?></td>
                        <td><?php echo $donnees11["ADERSSE"] ?></td>
                        <td><?php echo $donnees11["VILLE"] ?></td>
                        <td><?php echo $donnees11["PAYS"] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>








    </div>
    <div id="30_client" class="section text-center">
        <h1> NOMBRE 30 </h1>
        <div>
            <table border="2">
                <tr>
                    <th width="200">Code client </th>
                    <th width="200">Societe</th>
                    <th width="200">Adresse</th>
                    <th width="200">Ville</th>
                    <th width="200">PAys</th>
                </tr>
                <?php while ($donnees2 = mysqli_fetch_assoc($resultat1)) { ?>
                    <tr>
                        <td><?php echo $donnees2["CODE_CLIENT"] ?></td>
                        <td><?php echo $donnees2["SOCIETE"] ?></td>
                        <td><?php echo $donnees2["ADRESSE"] ?></td>
                        <td><?php echo $donnees2["VILLE"] ?></td>
                        <td><?php echo $donnees2["PAYS"] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    </main>

</body>

</html>
<?php mysqli_free_result($resultat) ?>