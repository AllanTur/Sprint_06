<?php
    include 'connect.php';
    $id=$_GET['updateid'];
    $sql="select * from `stock` where id=$id";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_assoc($result);
    $reference=$row['reference'];
    $name=$row['nom'];
    $description=$row['description'];
    $prixachat=$row['prix_achat'];
    $prixvente=$row['prix_vente'];
    $quantite=$row['quantite'];
    

    if(isset($_POST['submit'])){
        $reference=$_POST['reference'];
        $name=$_POST['nom'];
        $description=$_POST['description'];
        $prixachat=$_POST['prixachat'];
        $prixvente=$_POST['prixvente'];
        $quantite=$_POST['quantite'];
        $article=$_POST['article'];

        $sql="update `stock` set id=$id,reference='$reference',nom='$name',description='$description',prix_achat='$prixachat',prix_vente='$prixvente',quantite='$quantite',article='$article' where id=$id";

        $result=mysqli_query($con,$sql);

        if($result){
            //echo "Updated Successfully";
            header('location:display.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Sprint_06</title>
  </head>
  <body style="background-color: #99aab5">
    <div class="container my-5">
    <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Ajouter d'un article</a></button>
    <button class="btn btn-primary my-5"><a href="display.php" class="text-light">Tableau</a></button>

        <form method="post">

            <div class="mb-3">
                <label class="form-label">Référence</label>
                <input type="number" class="form-control" placeholder="Entrer la réference de l'article" name="reference" autocomplete="off" required value="<?php echo $reference; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Nom de l'article</label>
                <input type="text" class="form-control" placeholder="Entrer le nom de l'article" name="nom" autocomplete="off" required value="<?php echo $name; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" placeholder="Entrer la description de l'article" name="description" autocomplete="off" required value="<?php echo $description; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Prix d'achat unitaire</label>
                <input type="float" class="form-control" placeholder="Entrer le prix d'achat de l'article" name="prixachat" autocomplete="off" required value="<?php echo $prixachat; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Prix de vente unitaire</label>
                <input type="float" class="form-control" placeholder="Entrer le prix de vente de l'article" name="prixvente" autocomplete="off" required value="<?php echo $prixvente; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Quantité</label>
                <input type="number" class="form-control" placeholder="Entrer la quantité" name="quantite" autocomplete="off" required value="<?php echo $quantite; ?>">
            </div>

            <div class="mb-3">
                <input type="radio" id="contactChoice2" name="article" value="Vapoteur"  required>
                <label for="contactChoice2">Vapoteur</label>

                <input type="radio" id="contactChoice3" name="article" value="E-liquide" required>
                <label for="contactChoice3">E-liquide</label>
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Modifier</button>

        </form>

    </div>
   
  </body>
</html>

