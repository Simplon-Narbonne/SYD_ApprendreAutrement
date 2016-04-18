<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/inscription.css" media="screen" title="no title" charset="utf-8">
    <title>Inscription</title>
  </head>
  <body>
    <form action="index.php" method="post">
      <table>
        <tr>
          <td><label for="login"><strong>Civilité :</strong></label></td>
          <td><select id="selecteur" class="civilité" name="civilité">
                <option>Monsieur</option>
                <option>Madame</option>
              </select></td>
        </tr>
        <tr>
          <td><label for="lastname"><strong>Nom :</strong></label></td>
          <td><input id="champs" type="text" name="lastname" id="lastname"/></td>
        </tr>
        <tr>
          <td><label for="firstname"><strong>Prénom :</strong></label></td>
          <td><input id="champs" type="text" name="firstname" id="firstname"/></td>
        </tr>
        <tr>
          <td><label for="mail"><strong>Adresse email :</strong></label></td>
          <td><input id="champs" type="email" name="mail" id="mail"/></td>
        </tr>
        <tr>
          <td><label for="pass"><strong>Mot de passe :</strong></label></td>
          <td><input id="champs" type="password" name="pass" id="pass"/></td>
        </tr>
        <tr>
          <td><label for="pass2"><strong>Confirmez le mot de passe :</strong></label></td>
          <td><input id="champs" type="password" name="pass2" id="pass2"/></td>
        </tr>
        <tr>
          <td><label for="adress_code"><strong>Code postal :</strong></label></td>
          <td><input id="champs" type="text" name="adress_code" id="adress_code"/></td>
        </tr>
        <tr>
          <td><label for="kids"><strong>Nombre d'enfant a charge :</strong></label></td>
          <td><select id="selecteur" class="kids" name="kids">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              </select></td>
        </tr>
      </table>
        <input type="submit" name="register" value="S'inscrire"/>
      </form>

  </body>
</html>
