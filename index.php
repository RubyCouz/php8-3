<?php
setcookie('pseudo', $_POST['login'], time() + 365*24*3600, null, null, false, true); //écriture cookie pseudo
setcookie('password', $_POST['password'], time() + 365*24*3600, null, null, false, true); //écriture cookie mot de passe
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
    <form class="form" action="index.php" method="post">
      <input type="text" name="login" placeholder="Pseudo">
      <input type="text" name="password" placeholder="Mot de passe">
      <input type="submit" name="confirm" value="Valider">
    </form>
  </body>
</html>
