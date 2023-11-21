<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation date</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="../assets/js/main.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="../index.php">Accueil</a>
                </li>
                <li>
                    <a href="./show.php">Afficher</a>
                </li>
                <li>
                    <a href="./create.php">Créer</a>
                </li>
                <li>
                    <a href="./edit.php">Editer</a>
                </li>
                <li>
                    <a href="./delete.php">Supprimer</a>
                </li>
            </ul>
        </nav>
    </header>
    <form action="../assets/php/controllers/create_fiche.php" method="POST">
        <div>
            <label for="day">jour</label>
            <input type="text" id="day" name="day">
        </div>
        <div>
            <label for="hours">heure</label>
            <input type="text" id="hours" name="hours">
        </div>
        <div>
            <label for="date">date</label>
            <input type="text" id="date" name="date">
        </div>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>