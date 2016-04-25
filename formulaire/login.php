<!-- <html>
<head>
<title>Bienvenue sur Julie's School</title>
</head>
<body>
<h1>Bienvenue sur Julie's School</h1>
<div class="container">
<div class="row" id="row.titrForm">
<div id="titrForm" class="col-xs-12 col-sm-9 col-md-9 col-lg-7 col-lg-offset-1">
<h2>veuillez vous inscrire :</h2>
</div>
</div>
</div>


<form name="inscription" method="post" action="insertion_parent.php">
Entrez votre nom : <input type="text" name="lastname"/> <br/>
Entrez votre prénom : <input type="text" name="firstname"/><br/>
Entrez votre E mail : <input type="text" name="email"/><br/>


<input type="submit" name="valider" value="OK"/>
<link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css" media="screen" title="no title" charset="utf-8">

<link rel="stylesheet" href="assets/jquery-ui-custom/jquery.min.js" media="screen" title="no title" charset="utf-8">

<link rel="stylesheet" href="assets/css/style.css" media="screen" title="no title" charset="utf-8">

</form>
</body>
</html> -->
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
                <label for="lastname">Entrez votre nom : </label>
              </div>
              <div id="inputDark" class="col-md-5">
                <input class="form-control input-xs" type="text" name="lastname" id="lastname" />
              </div>
              <div id="inputLight" class="col-md-5 col-md-offset-1" >
                <label for="firstname">Entrez votre prénom : </label>
              </div>
              <div id="inputLight" class="col-md-5">
                <input class="form-control input-xs" type="text" name="firstname" id="firstname" />
              </div>
              <div id="inputDark" class="col-md-5 col-md-offset-1">
                <label for="email">Entrez votre E mail : </label>
              </div>
              <div id="inputDark" class="col-md-5">
                <input class="form-control input-xs" type="text" name="email" id="email" />
              </div>
              <div class="col-md-6 col-md-offset-3">
                <button class="btn btn-defaut btn-sm btn-block" type="submit" name="valider">OK</button>
              </form>
            </div>


          </div>

        </div>










      </div>
      <!-- Fermeture de la ligne -->
    </div>
    <!--  Fin du corps de texte -->
  </div>

</body>

</html>
