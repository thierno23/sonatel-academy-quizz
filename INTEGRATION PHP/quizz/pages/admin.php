
<?php
is_connect();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz</title>
</head>

<body>
<div  style="height:100%; ">

    <div class="conteneur" style="padding: .3rem 1.5em ; width:95% ">
    <div style="width:99.3%; padding:0 1rem; background-color:deepskyblue; color:white; display:flex; text-align:center">
        <div style="width: 18%;">
        </div>
        <div style="width: 70%; text-transform: uppercase;  display:flex; align-items:center; justify-content:center;  font-family:arial;">
        <h2>Créer et paramétrer vos quizz</h2>
        </div>
        <div style="width: 15%">
            <form  id="deconnection" method="post"  style="padding:1.5rem; "><button name="deconnection" ><a href="index.php?statut=logout"  style="text-decoration:none;color:red;">Se Déconnecter</a></button></form>
        </div>
    </div>
</html>