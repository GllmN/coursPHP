<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Base de données</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
        }
        td,th {
            border:1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
<?php
    if(isset($_POST['nom'])&& !empty ($_POST['nom'])) {
        //$nom = $_POST['nom'];
        $nom = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
        //echo "$nom";
    }
    if(isset($_POST['prenom'])&& !empty ($_POST['prenom'])) {
        //$prenom = $_POST['prenom'];
        $prenom = filter_var($_POST['prenom'], FILTER_SANITIZE_STRING);
        //echo "$prenom";
    }
    if(isset($_POST['adresse'])&& !empty ($_POST['adresse'])) {
        //$adresse = $_POST['adresse'];
        $adresse = filter_var($_POST['adresse'], FILTER_SANITIZE_STRING);
        //echo"$adresse";
    }
    if(isset($_POST['cp'])&& !empty ($_POST['cp'])) {
        //$cp = $_POST['cp'];
        $cp = filter_var($_POST['cp'], FILTER_SANITIZE_STRING);
        //echo"$cp";
    }
    if(isset($_POST['ville'])&& !empty ($_POST['ville'])) {
        //$ville = $_POST['ville'];
        $ville = filter_var($_POST['ville'], FILTER_SANITIZE_STRING);
        //echo"$ville";
    }
?>
    <table>
        <tr>
            <th>Noms</th>
            <th>Prénoms</th>
            <th>Adresses</th>
            <th>Code postaux</th>
            <th>Villes</th>
        </tr>
        <tr>
            <td><?php echo"$nom";?></td>
            <td><?php echo"$prenom";?></td>
            <td><?php echo"$adresse";?></td>
            <td><?php echo"$cp";?></td>
            <td><?php echo"$ville";?></td>
        </tr>
    </table>
</body>
</html>

