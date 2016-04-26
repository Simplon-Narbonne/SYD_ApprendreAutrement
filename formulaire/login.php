<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Julie's School - Formulaire d'inscription</title>

  <link rel="stylesheet" href="assets/jquery-ui-custom/jquery.min.js" media="screen" title="no title" charset="utf-8">

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">

</head>

<body>
  <h1>Bienvenue sur Julie's School</h1>


  <div class="container"> <!--  Début de corps de la plage -->

    <div class="row"> <!-- Div "ROW1" principale-->

      <!--  Div Titre formulaire -->
      <div id="titrForm"class="col-md-4 col-md-offset-4">Formulaire d'inscription</div>
      <!--  Titre formulaire -->
      <div id="InputForm"class="col-md-8 col-md-offset-2">
        <form name="inscription" method="post" action="insertion_parent.php">
          <!-- Div contenant deuxième "ROW2" -->
          <div class="col-md-10 col-md-offset-1">
            <!-- Deuxième "ROW2" Grilles imbriquées -->
            <div class="row">
              <div id="inputDark" class="col-md-5 col-md-offset-1" >
                <label for="civilite">Civilité : </label>
              </div>
              <div id="inputDark"class="col-md-5">
                <select class="form-control inpunt-xs" name="civilite" id="civilite">
                  <option>Madame</option>
                  <option>Monsieur</option>
                </select>
              </div>
              <div id="inputLight" class="col-md-5 col-md-offset-1" >
                <label for="lastname">Entrez votre nom : </label>
              </div>
              <div id="inputLight" class="col-md-5">
                <input class="form-control input-xs" type="text" name="lastname" id="lastname" />
              </div>
              <div id="inputDark" class="col-md-5 col-md-offset-1" >
                <label for="firstname">Entrez votre prénom : </label>
              </div>
              <div id="inputDark" class="col-md-5">
                <input class="form-control input-xs" type="text" name="firstname" id="firstname" />
              </div>
              <div id="inputLight" class="col-md-5 col-md-offset-1">
                <label for="email">Entrez votre E mail : </label>
              </div>
              <div id="inputLight" class="col-md-5">
                <input class="form-control input-xs" type="text" name="email" id="email" />
              </div>
              <div id="inputDark" class="col-md-5 col-md-offset-1" >
                <label for="password">Entrez votre mot de passe : </label>
              </div>
              <div id="inputDark" class="col-md-5">
                <input class="form-control input-xs" type="password" name="password" id="password" />
              </div>
              <div id="inputDark" class="col-md-5 col-md-offset-1" >
                <label for="passwordConfirm">Confirmez votre mot de passe : </label>
              </div>
              <div id="inputDark" class="col-md-5">
                <input class="form-control input-xs" type="password" name="passwordConfirm" id="passwordConfirm" />
              </div>
              <div id="inputLight" class="col-md-5 col-md-offset-1">
                <label for="codepostal">code postal :</label>
              </div>
              <div id="inputLight" class="col-md-5">
                <input class="form-control input-xs" type="text" name="codepostal" id="codepostal" />
              </div>
              <div id="inputDark" class="col-md-5 col-md-offset-1" >
                <label for="kidsNb">Nombre d'enfant(s) à charge : </label>
              </div>
              <div id="inputDark"class="col-md-5">
                <select class="form-control inpunt-xs" name="kidsNb" id="kidsNb">
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
                </select>
              </div>
              <div class="col-md-6 col-md-offset-3">
                <button id="bouton"class="btn btn-defaut btn-sm btn-block" type="submit" name="valider">S'inscrire</button>
              </form>
            </div>

          </div>
        </div>
      </div>
      <!-- Fin du "ROW2 -->
    </div>
    <!--  Fin du "ROW" principal -->
  </div>

  <br><br><br>

</body>

</html>
