<?php
// router
$page = $_POST['page'] ?? '404';
if ($page === 'public') {
    require 'public/index.php';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IVOIRE LANGUAGE TRANSLATOR</title>
    <!-- favicon(icone) du site-->
    <link rel="icon" type="image/png" href="../public/assets/LogoIvoireLanguagesTranslatoweb.png" />
    <link rel="stylesheet" type="text/css" href="../public/style/acceuil.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/7cb0e7c261.js" crossorigin="anonymous"></script>



</head>

<body>
    <!-- la banniere -->
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark ">

            <!-- logo  -->
            <a class="navbar-brand" href="index.php"><img src="../public/assets/LogoIvoireLanguagesTranslatoweb.png" height="60px" width="60px"></a>

            <!-- text ivoire language translator -->
            <a class="nav-link itltext" href="index.php"><span style="color: rgb(12, 199, 12); font-size :1.5em;font-family:Verdana,sans-serif "><b>IVOIRE </b></span> <span style="color: rgb(255, 145, 77); font-size :1.5em;font-family:Verdana,sans-serif"><b> LANGUAGE</b> </span> <span style="color: rgb(12, 199, 12); font-size :1.5em;font-family:Verdana,sans-serif"><b> TRANSLATOR </b></span>

                <!-- icone telecharger sur playstore -->
                <a href="https://play.google.com/store">
                    <img src="../public/assets/google-play.svg" height="25px" width="30px" style="margin-bottom:2px;">
                </a>

                <!-- icone telecharger sur app store -->
                <a href="https://www.apple.com/ios/app-store/">
                    <img src="../public/assets/company.svg" height="29px" width="30px" style="margin-bottom:7px;" class="img-fluid">
                </a>
            </a>


            <!-- liste menu banniere -->
            <div class="collapse navbar-collapse  p-0 d-flex justify-content-end " id="navbarsExample02">
                <ul class="navbar-nav ">
                    <li class="nav-item active " style="vertical-align:auto;">
                    </li>


                    <li class="nav-item  ">
                        <a class="nav-link itltextE" href="#" style="color:black;font-family:Arial,sans-serif;"><b>DICTIONNAIRE</b><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link itltextE" href="#" style="color:black;font-family:Arial,sans-serif;"><b>PRONONCIATION</b></a>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="nav-link itltextE" href="# " style="color:black;font-family:Arial,sans-serif;"><b>COMMERCIAL</b></a>
                    </li>

                    <li class="nav-item ml-3">
                        <a class="nav-link itltextE" href="#" style="color:black;font-family:Arial,sans-serif;"><b>BLOG</b></a>
                    </li>
                    <li class="nav-item ml-3 ">
                        <div class="orange">
                            <a class="nav-link itltextE " href="#" style="color:black; height:50%;font-family:Arial,sans-serif;"><b>À PROPOS</b></a>
                        </div>
                    </li>

                </ul>

            </div>
        </nav>
    </header>

    <!-- texte 1er bloc -->
    <div class="marge">
        <div style="text-align:center">
            <h2 style="color: #6c6c6c; font-weight:bold;font-size:2.8em;" class="espace">TRADUISEZ VOS TEXTES DANS L'ÈTHINIES QUE VOUS</h2>
            <h2 style="color: #6c6c6c; font-weight:bold;font-size:2.8em;" class="espace">VOULEZ GRATUITEMENT</h2>
            <br>
            <h2 style="color: #9da9b6;" class="espace1"> Traduisez instantanément vos documents et livres preferées avec<span style="color: rgb(12, 199, 12);"> Ivoire</span><br><span style="color: rgb(255, 145, 77);">Languages</span><span style="color:rgb(12, 199, 12);"> Translator<span></h2>
            <br>
            <br>
            <h5 style="color: #909eac;">DÉFINISSEZ LE TEXTE ET CLIQUEZ SUR TRADUIRE. PREND EN CHARGE LES FICHIERS TEXTE BRUT, PDF ET EPUB (EBOOKS).</h5>
        </div>
    </div>

    <!-- boutton envoyer nous vos commentaires -->
    <div style="text-align:center">
        <a href="../public/commentaire.php">
            <button style="width: 97%;background-color:#1e8449;height:50px;border-radius:20px;color:white;font-weight:bold;font-size:27px;border:none;" class="m-4 boutton">ENVOYEZ NOUS VOS COMMENTAIRES </button>
        </a>
    </div>


    <!-- espace traduction  test-->
    <div class="traduction">

    </div>

    <!-- retrouver nous sur  play store -->
    <div style="text-align:center">
        <h2 style="color: #828282;">Vous en voulez plus ? Découvrez notre <a href="#"> application mobile (iOS et Android)</a><br><br>vous pourrez  scanner un document a  partitr de votre smartphone et bien plus encore</h2>
        <br>
        <br>
        <a href="https://play.google.com/store">
            <img src="../public/assets/application-soluchrono-google-play-android - Copie.jpg" height="70px" width="215px">
        </a>
        <a href="https://www.apple.com/ios/app-store/" style="margin-left: 20px;">
            <img src="../public/assets/image - Copie.png" height="75px" width="215px">
        </a>

    </div>
    <br>
    <br>
    <div style="text-align:center;margin-bottom:20px;">
        <p>
            <h2 style="border-bottom: #6c6c6c; border-radius:10px;"> CARACTÉRISTIQUES PRINCIPALES</h2>

        </p>
    </div>
    <!-- ligne pour delimiter  juste un test-->
    <hr>

    <!-- bloc vert premier traducteur -->
    <div class="blocvert " style="text-align:center;">
        <span class="dot" style="color: white;" style="margin-bottom: 15px;"><i class=" fas fa-4x fa-star stars" aria-hidden="true"></i></span>
        <p class="textblocvert" style="margin-bottom: 35px;margin-top:30px">Premier traducteur de langues locales en côte d'ivoire <br> Construit pour vous facilter la vie .</p>
        <p class="textblocvert2" style="margin-bottom: 15px;">Vous trouvez qu'il ya un texte mal traduit ? Vous avez des idées pour nous aider à nous ameliorer ? Alors <br> n'hesitez pas envoyer nous un message nous vous répondrons dans les plus brefs délais</p>
        <a href="commentaire.php"><button class="bouttonBlocVert"> Envoyez un message </button></a>
    </div>
    <!-- Visites: $ visites ; -->



    <table class="table table-dark">
        <thead>
            <tr>

                <th>NOMBRE DE VISITEUR :</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?php include('../compteurvisite.php'); ?></th>


            </tr>
        </tbody>
    </table>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>