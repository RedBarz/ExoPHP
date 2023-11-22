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
                    <a href="./show_fr.php">Afficher</a>
                </li>
                <li>
                    <a href="./create_fr.php">Créer</a>
                </li>
                <li>
                    <a href="./edit_fr.php">Editer</a>
                </li>
                <li>
                    <a href="./delete_fr.php">Supprimer</a>
                </li>
            </ul>
        </nav>
    </header>
    <h1>Reservez une date</h1>
    <form action="/query_sql/assets/php/controllers/create_fiche.php" method="POST">
        <div>
            <label for="day">jour</label>
            <input type="text" id="day" name="day">
        </div>
        <div>
            <label for="hours">heure</label>
            <input type="test" id="hours" name="hours">
        </div>
        <div>
            <label for="date">date</label>
            <input type="date" id="date" name="date">
        </div>
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>