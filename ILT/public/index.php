<?php
session_start();
include('../connection.php');


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
    <script src="../public/scripts/main.js"></script>
    <script src="https://kit.fontawesome.com/7cb0e7c261.js" crossorigin="anonymous"></script>

    <style>
        /* et le style ici */
        .cercle {
            height: 70px;
            width: 70px;
            background-color: white;
            border: 2px solid rgb(255, 145, 77);
            border-radius: 50%;

        }
    </style>
    <style>
        .traduction {
            background-color: lightgrey;
            border-style: solid;
            border-width: 5px;
            border-color: gray;
            text-align: center;
        }

        .form-group {
            margin-left: 30px;
        }

        .textarea {
            margin-left: 20px;
            resize: unset;
        }

        .tradwindow {
            margin-left: 600px;
            margin-bottom: 80px;
            background-color: white;
            border-style: solid;
            border-width: 2px;
            border-color: black;
            width: 400px;
            height: 100px;
        }
    </style>
</head>

<body>
    <!-- la banniere  -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <!-- logo -->
            <a class="navbar-brand" href="index.php"><img src="../public/assets/LogoIvoireLanguagesTranslatoweb.png" height="60px" width="60px"></a>
            <!-- text ivoire language translator-->
            <a class="nav-link itltext" href="index.php"><span style="color: rgb(12, 199, 12); font-size :1.5em;font-family:Verdana,sans-serif "><b>IVOIRE </b></span><span style="color: rgb(255, 145, 77); font-size :1.5em;font-family:Verdana,sans-serif"><b>LANGUAGE</b></span><span style="color: rgb(12, 199, 12); font-size :1.5em;font-family:Verdana,sans-serif"><b>TRANSLATOR </b></span>
                <!-- icone telecharger sur playstore  -->
                <a href="https://play.google.com/store"><img src="../public/assets/google-play.svg" height="25px" width="30px" style="margin-bottom:2px;"></a>
                <!-- icone telecharger sur app store -->
                <a href="https://www.apple.com/ios/app-store/"><img src="../public/assets/company.svg" height="29px" width="30px" style="margin-bottom:7px;" class="img-fluid"></a>
            </a>
            <!--liste menu banniere -->
            <div class="collapse navbar-collapse  p-0 d-flex justify-content-end " id="navbarsExample02">
                <ul class="navbar-nav ">
                    <li class="nav-item active " style="vertical-align:auto;"></li>
                    <li class="nav-item  "><a class="nav-link itltextE" href="#" style="color:black;font-family:Arial,sans-serif;"><b>DICTIONNAIRE</b><span class="sr-only">(current)</span></a></li>
                    <li class="nav-item ml-3"><a class="nav-link itltextE" href="#" style="color:black;font-family:Arial,sans-serif;"><b>PRONONCIATION</b></a></li>
                    <li class="nav-item ml-2"><a class="nav-link itltextE" href="# " style="color:black;font-family:Arial,sans-serif;"><b>COMMERCIAL</b></a></li>
                    <li class="nav-item ml-3"><a class="nav-link itltextE" href="#" style="color:black;font-family:Arial,sans-serif;"><b>BLOG</b></a></li>
                    <li class="nav-item ml-3 ">
                        <div class="orange"><a class="nav-link itltextE " href="#" style="color:black; height:50%;font-family:Arial,sans-serif;"><b>À PROPOS</b></a></div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!--texte 1er bloc -->
    <div class="marge">
        <div style="text-align:center">
            <h2 style="color: #6c6c6c; font-weight:bold;font-size:2.8em;" class="espace">TRADUISEZ VOS TEXTES DANS L'ÈTHINIES QUE VOUS</h2>
            <h2 style="color: #6c6c6c; font-weight:bold;font-size:2.8em;" class="espace">VOULEZ GRATUITEMENT</h2><br>
            <h2 style="color: #9da9b6;" class="espace1">Traduisez instantanément vos documents et livres preferées avec<span style="color: rgb(12, 199, 12);">Ivoire</span><br><span style="color: rgb(255, 145, 77);">Languages</span><span style="color:rgb(12, 199, 12);">Translator<span></h2><br><br>
            <h5 style="color: #909eac;">DÉFINISSEZ LE TEXTE ET CLIQUEZ SUR TRADUIRE. PREND EN CHARGE LES FICHIERS TEXTE BRUT,
                PDF ET EPUB (EBOOKS).</h5>
        </div>
    </div>


    <!-- boutton envoyer nous vos commentaires -->
    <div style="text-align:center"><a href="../public/commentaire.php"><button style="width: 97%;background-color:#1e8449;height:50px;border-radius:20px;color:white;font-weight:bold;font-size:27px;border:none;" class="m-4 boutton">ENVOYEZ NOUS VOS COMMENTAIRES </button></a></div>



    <!-- espace traduction test-->
    <div class="container traduction" style="margin-top: 100px;margin-bottom:100px;"> <br><br><br>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col col-sm-6 ">
                    <select class="form-control" name="langue_start" id="langue_start">
                        <option value="" class=""> Sélectionner la langue d'origine </option>
                        <?php
                        $sql = "SELECT * FROM langues";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<option>' . $row['langue'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="col col-sm-6">
                    <select class="form-control" name="langue_end" id="langue_end">
                        <option value="" class=""> Sélectionner la langue de traduction </option>
                        <?php
                        $sql = "SELECT * FROM langues";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<option>' . $row['langue'] . '</option>';
                        }
                        ?>
                    </select>
                    <br><br>
                </div>
            </div>
            <div class="row">
                <div class="col col-sm-6">
                    <textarea class="textarea" name="champ1" id="champ1" cols="50" rows="5" onkeyup="check();"></textarea>
                </div>
                <div class="col col-sm-6">

                </div>
            </div>
            <div class="row">
                <div class="col col-sm-6">
                    <input type="submit" value="Traduire" name="Traduire" class="btn btn-success">
                </div>
            </div>
        </form>

        <div class="tradwindow" id="champ1status">
            <?php

            if (isset($_POST['Traduire'])) {

                $search_text = $_POST['champ1'];
                $langue_start = $_POST['langue_start'];
                $langue_end = $_POST['langue_end'];
                $ip = $_SERVER['REMOTE_ADDR'];
                $date = date("Y-m-d h:i:s");
                $sql = "INSERT INTO recherches (search_text, langue_start, langue_end, ip, date) VALUES ('$search_text','$langue_start','$langue_end', '$ip', '$date')";

                if (mysqli_query($con, $sql)) {

                    $query = "SELECT * FROM data WHERE texte1 = '$search_text' AND langue_start = '$langue_start' AND langue_end = '$langue_end' ";
                    $result = mysqli_query($con, $query);

                    if ($row = mysqli_fetch_array($result)) { ?>
                        <div id="reponse">
                            <?php echo $row['texte2'] ?> <br>
                            <audio controls>
                                <source src="<?php echo $row['audio'] ?>" type="audio/mpeg">
                            </audio>
                        </div>
                    <?php } else { ?>
                        <div>
                            <p>
                                <font color='red'> Traduction non disponible <br> <a href="public/suggestion.php">Soumettre une proposition de traduction</a>
                            </p>
                        </div>
            <?php }
                }
            } ?>
        </div>
    </div>
    <!--  -->



    <!-- retrouver nous sur play store -->
    <div style="text-align:center">
        <h2 style="color: #828282;">Vous en voulez plus ? Découvrez notre <a href="#">application mobile (iOS et Android)</a><br><br>vous pourrez scanner un document a partitr de votre smartphone et bien plus encore</h2><br><br><a href="https://play.google.com/store"><img src="../public/assets/application-soluchrono-google-play-android - Copie.jpg" height="70px" width="215px"></a><a href="https://www.apple.com/ios/app-store/" style="margin-left: 20px;"><img src="../public/assets/image - Copie.png" height="75px" width="215px"></a>
    </div><br><br>




    <!-- BLOC CARACTERISTiQUES PRINCIPALES -->
    <div style="text-align:center;margin-bottom:20px;">
        <p>
            <h2 style="border-bottom: #6c6c6c; border-radius:10px;">CARACTÉRISTIQUES PRINCIPALES</h2>
            <center>
                <hr width="40%" color="#007bff">
            </center>
            <!-- ma partie commence ici -->
            <h2 style="margin-top:50px;margin-bottom:50px;color:#555555;letter-spacing: 3px;"><span style="color:rgb(12, 199, 12);">IVOIRE</span><span style="color:rgb(255, 145, 77);">LANGUAGE</span><span style="color:rgb(12, 199, 12);">TRANSLATOR </span>EST UN TRADUCTEUR DE TEXTE<br><br>GRATUIT QUI PREND EN CHARGE TOUT LES NAVIGATEURS<br>MODERNES,
                Y COMPRIS CHROME FIREFOX ET SAFARI</h2>
            <div class="row">
                <div class="col-sm-4">
                    <div class="">
                        <div class="card-body">
                            <center><img src="../public/assets/LogoIvoireLanguagesTranslatoweb.png" class="image-ronde" height="70px" width="70px"></center>
                            <h4 class="card-title" style="margin-top: 20px;">EN LIGNE,
                                GRATUIT.</h4>
                            <p class="card-text" style="margin-top:40px;color:#6b6b6b">Pas besoin de payer ou de creer de compte,
                                Insérer du texte facilement dans la zone de saisi et traduisez vos textes. Simplifier vous la vie avec Ivoire languages Translator.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <div class="card-body">
                            <center>
                                <div class="cercle"><img src="../public/assets/cahier.png" height="30px" width="30px" style="margin-top:20px;"></div>
                            </center>
                            <h4 class="card-title" style="margin-top: 24px;">LIRE DES FICHIERS PDF,
                                DES TEXTES</h4>
                            <p class="card-text" style="color:#6b6b6b">Traduisez facilement des fichiers de type texte,
                                pdf,
                                ebook avec Ivoire Languages Translator. il recherche les mots dans vos documents puis les traduits grace a un algorithime performant.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <div class="card-body">
                            <center>
                                <div class="cercle"><img src="../public/assets/img.png" class="image-ronde" height="30px" width="30px" style="margin-top:20px;"></div>
                            </center>
                            <h4 class="card-title" style="margin-top: 24px;">ACCESSIBLE PARTOUT DANS LE MONDE</h4>
                            <p class="card-text" style="color:#6b6b6b">Ivoire Languages Translator est accesibles ou que vous soyez. vous visitez la côte d'ivoire ? vous ne comprenez pas la langue locale ?alors ttraduisez avec Ivoire Languages Translator.</p>

                        </div>
                    </div>
                </div>
            </div>
        </p>
    </div>

    <!-- ligne pour delimiter juste un test-->
    <hr>

    <!-- bloc vert premier traducteur -->
    <div class="blocvert " style="text-align:center;"><span class="dot" style="color: white;" style="margin-bottom: 15px;"><i class=" fas fa-4x fa-star stars" aria-hidden="true"></i></span>
        <p class="textblocvert" style="margin-bottom: 35px;margin-top:30px">Premier traducteur de langues locales en côte d'ivoire <br> Construit pour vous facilter la vie .</p>
        <p class="textblocvert2" style="margin-bottom: 15px;">Vous trouvez qu'il ya un texte mal traduit ? Vous avez des idées pour nous aider à nous ameliorer ? Alors <br> n'hesitez pas envoyer nous un message nous vous répondrons dans les plus brefs délais</p><a href="commentaire.php"><button class="bouttonBlocVert">Envoyez un message </button></a>
    </div>



    <footer>
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12 segment-one md-mb-30 sm-mb-30">
					<h3>A propos de nous</h3>
					<p>Ivoire Languages Translator a été conçu pour faciliter vos discutions avec d'autres communauté.</p>
						<p>Voir notre page <a href="#">Conidentalité et condition du site</a></p>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
					<h3>Contact</h3>
					<ul>
						<li><a href="#" style="color: red">SIMPLON COTE D'IVOIRE</a></li>
						<li><a href="#">no_reply@simplonline.co</a></li>
						<li><a href="#">00-00-00-00</a></li>
						<li><a href="#">Blog</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 segment-three sm-mb-30">
					<h3>Suivez-nous</h3>
					<p>Réjoingnez nous sur google play & app storeger</p>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
				</div>
				 <div class="col-md-3 col-sm-6 col-xs-12 box segment-four sm-mb-30"> <!-
					<strong><h3>Commentaire</h3></strong> 
					<p>Donnez vos avis à propos du site</p>
			<!--	<form action="">- class="box" 
						<input type="email" name="">
						<input type="submit" value="subscribe">
					 </form> -->
					<form action="">
						<label for="mail">Email <span>*</span> </label>
						<input type="email" name="mail" id="mail" required>
						<label for="mmes">Message <span>*</span> </label>
						<textarea name="mess" id="mess" rows="3" required></textarea>
						<button type="submit">Send</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<p class="footer-bottom-text">copyright &copy; - 2020</p>
	
</footer>





    <!-- Visites: $ visites; -->
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