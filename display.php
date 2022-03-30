<?php
    include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint_06</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #99aab5">
    <div class="container">
        <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Ajouter d'un article</a></button>

        <table class="table table-dark table-hover">
            <thead>
                <tr>
                <th scope="col">Identifiant</th>
                <th scope="col">Référence</th>
                <th scope="col">Nom de l'article</th>
                <th scope="col">Description</th>
                <th scope="col">Prix d'achat</th>
                <th scope="col">Prix de vente</th>
                <th scope="col">Quantité</th>
                <th scope="col">Article</th>
                <th scope="col">Modifier/Supprimer</th>
                </tr>
            </thead>
            <tbody>

                <?php

                    $sql="Select * from `stock` ORDER BY `stock`.`id` ASC";
                    $result=mysqli_query($con, $sql);

                    if($result){
                        //$row=mysqli_fetch_assoc($result);
                        //echo $row['prix_vente'];
                        while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $reference=$row['reference'];
                            $nom=$row['nom'];
                            $description=$row['description'];
                            $prixachat=$row['prix_achat'];
                            $prixvente=$row['prix_vente'];
                            $quantite=$row['quantite'];
                            $article=$row['article'];
                            echo '<tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$reference.'</td>
                            <td>'.$nom.'</td>
                            <td>'.$description.'</td>
                            <td>'.$prixachat.'</td>
                            <td>'.$prixvente.'</td>
                            <td>'.$quantite.'</td>
                            <td>'.$article.'</td>
                            <td>
                            <button class="btn btn-primary"><a class="text-light" href="update.php?updateid='.$id.'">Modifier</a></button>
                            <button class="btn btn-danger"><a class="text-light" href="delete.php?deleteid='.$id.'">Supprimer</a></button>
                            </td>
                            </tr>';
                       }
                    }


                ?>

                   

            </tbody>
        </table>
    </div>
</body>
</html>