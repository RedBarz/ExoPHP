<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Exo SQL</title>
  <link rel="stylesheet" href="./assets/css/styles.css" />
  <script defer src="./assets/js/main.js"></script>
</head>

<body>
  <?php


  require_once('./assets/php/middleware/connect.php');


  $query_user = $db_connect->query('SELECT * FROM user');
  foreach ($query_user as $user) {
    echo $user['email'];
  }
  ?>

  <form action="./assets/php/controllers/create_users.php" method="POST">
    <div>
      <label for="email">Email</label>
      <input type="text" id="email" name="email">
    </div>
    <div>
      <label for="pseudo">Pseudonyme</label>
      <input type="text" id="pseudo" name="pseudo">
    </div>
    <div>
      <label for="password">Mot de passe</label>
      <input type="password" id="password" name="password">
    </div>
    <button type="submit">Envoyer</button>
  </form>




  <!-- <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>pseudo</th>
        <th>Email</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($result as $row) { ?>
        <tr>
          <td><?= $row["id"] ?></td>
          <td><?= $row["pseudo"] ?></td>
          <td><?= $row["email"] ?></td>
          <td><?= $row["password"] ?></td>
          <td><a href="details.php?id=<?= $row['id'] ?>">Voir</a> <a href="edit.php?id=<?= $row['id'] ?>">Modifier</a> <a href="delete.php?id=<?= $row['id'] ?>">Supprimer</a></td>
        </tr>

      <?php
      }
      ?>
    </tbody>
  </table>
  </thead>
  </table> -->

</body>

</html>