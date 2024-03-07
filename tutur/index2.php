<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    

</html>
<body>
    <h1>Formulaire</h1>
    <form action="traitement.php" method="post">
        <label for="marqe">Marque :</label>
        <input type="text" id="marque" name="marque" required><br><br>
        
        <label for="modele">Modele :</label>
        <input type="modele" id="modele" name="modele" required><br><br>
        
        <label for="plaque">Plaque :</label>
        <textarea id="plaque" name="plaque" required></textarea><br><br>
        
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>