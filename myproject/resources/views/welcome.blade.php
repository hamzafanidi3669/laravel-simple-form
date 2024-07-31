<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="container" action="traitementform" method="post">
    @csrf <!--   drori galk bash imshi ldik lpage 3la 9bl lblan dyal sécurité wsf -->
        <input type="text" class="form-control" placeholder="Entrez Votre Nom" name="nom"> <br> <br>
        <input type="text" class="form-control" placeholder="Entrez Votre Prenom" name="prenom"> <br> <br>
        <input type="number" class="form-control" placeholder="Entrez Votre Age" name="age"> <br> <br>
        <input type="checkbox" class="form-control" placeholder="Entrez Votre Age" name="sport">SPORT <br> <br>
        <button name="submit">Valider</button>
        <button name="reset">Reset</button>
        </form>
</body>
</html>