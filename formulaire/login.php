<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Opentuto - Bootstrap 3</title>

    <link rel="stylesheet" href="assets/jquery-ui-custom/jquery.min.js" media="screen" title="no title" charset="utf-8">

    <link rel="stylesheet" href="assets/css/style.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" media="screen" title="no title" charset="utf-8">

  </head>

  <body>

    <div class="container"> <!--  Début de corps de la plage -->

      <h1>Bienvenue sur Julie's School</h1>

          <div class="row"> <!--   Chargement de la grille par le biais de la creation d'une ligne-->

                  <!--  Titre formulaire -->
                <div id="titrForm"class="col-md-4 col-md-offset-4">Formulaire d'inscription</div>
                  <!--  Champs formulaire -->
                <div id="InputForm"class="col-md-8 col-md-offset-2">
                  <form name="inscription" method="post" action="insertion_parent.php">
                    <label for="lastname">Entrez votre nom : </label>
                    <input type="text" name="lastname" id="lastname" /> <br/>

                    <label for="firstname">Entrez votre prénom : </label>
                    <input type="text" name="firstname" id="firstname" /><br/>

                    <label for="email">Entrez votre E mail : </label>
                    <input type="text" name="email" id="email" /><br/>


                    <input type="submit" name="valider" value="OK"/>
                  </form>
               </div>
             <!-- Fermeture de la ligne -->
             </div>
        <!--  Fin du corps de texte -->
        </div>
        
  </body>

</html>
