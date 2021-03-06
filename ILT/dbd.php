<?php session_start();

include_once('connection.php');

if (isset($_SESSION['nometprenoms'])) {
  $nometprenoms = $_SESSION['nometprenoms'];
  $role = $_SESSION['role'];
} else {
  echo '<script language="Javascript">';
  echo 'document.location.replace("./logout.php")';
  echo ' </script>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon(icone) du site-->
  <link rel="icon" type="image/png" href="../public/assets/LogoIvoireLanguagesTranslatoweb.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/7cb0e7c261.js" crossorigin="anonymous"></script>

  <style>
    body {
      font-family: "Lato", sans-serif;
    }

    .sidebar {
      height: 100%;
      width: 180px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #3E844A;
      overflow-x: hidden;
      padding-top: 16px;
    }

    .sidebar a {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 15px;
      color: #FFFFFF;
      display: block;
    }

    .sidebar a:hover {
      color: #183B14;
    }

    .main {
      margin-left: 180px;
      padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
      .sidebar {
        padding-top: 15px;
      }

      .sidebar a {
        font-size: 18px;
      }
    }


    .chip {
      display: inline-block;
      padding: 0 80px;
      height: 50px;
      font-size: 16px;
      line-height: 50px;
      border-radius: 25px;
      background-color: #000000;
    }

    .chip img {
      float: left;
      margin: 0 10px 0 -80px;
      height: 50px;
      width: 50px;
      border-radius: 50%;
    }

    table {
      font-size: 13px;
    }

    thead {
      font-weight: bold;
    }
  </style>
</head>

<body>

  <?php include('connection.php');
  if ($role != 'Administrateur' && $role != 'Superviseur') {
  ?>




    <div class="sidebar ">
      <br><br><a href="#dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a><br><br><br><br>
      <a href="editpwd.php"><i class="fa fa-key" aria-hidden="true"></i> Modifier mon mot de passe</a><br>
      <a href="addtext.php"><i class="fa fa-pencil" aria-hidden="true"></i> Ajouter un mot</a><br>
      <a href="addtext.php"><i class="fa fa-pencil" aria-hidden="true"></i> Ajouter une phrase</a><br>
      <a href="addlang.php"><i class="fa fa-bullhorn" aria-hidden="true"></i> Ajouter une langue</a><br>
      <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Déconnexion</a><br>
    </div>

    <div class="main">
      <p>


        <div class="chip heading text-center text-uppercase text-white mb-3">
          <img src="logo.PNG" alt="logo" width="96" height="96">
          Bienvenue : <?php echo $role; ?> <?php echo $nometprenoms; ?> <br></br>
        </div>

        <center>
          <h2>Table des traductions</h2>

        </center>
        <div class="row">
          <div class="col-md-12 offset-md-2">
            <table class="table table-responsive table-bordered table-hovered">
              <thead>
                <tr>
                  <td>Id</td>
                  <td>texte</td>
                  <td>langue d'origine</td>
                  <td>traduction</td>
                  <td>langue de traduction</td>
                  <td>Fichier audio</td>
                  <td>Date</td>
                  <td>Option</td>
                </tr>
              </thead>
              <tbody>
                <?php
                include_once('connection.php');
                $sql = "SELECT id, texte1, langue_start, texte2, langue_end, audio, datec FROM data";
                $result_text = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result_text)) { ?>
                  <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['texte1'] ?></td>
                    <td><?php echo $row['langue_start'] ?></td>
                    <td><?php echo $row['texte2'] ?></td>
                    <td><?php echo $row['langue_end'] ?></td>
                    <td>
                      <audio controls>
                        <source src="<?php echo $row['audio'] ?>" type="audio/mpeg">
                      </audio>
                    </td>
                    <td><?php echo $row['datec'] ?></td>
                    <td>
                      <a href="edittext.php?id=<?php echo $row['id'] ?>" class="btn btn-success"> <i class="fas fa-edit"></i></a>
                      <a href="deltext.php?id=<?php echo $row['id'] ?>" class="btn btn-primary"> <i class="far fa-trash-alt"></i></a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div><br><br><br><br>

        <center>
          <h2>Table des langues</h2>
        </center>
        <div class="container">
          <div class="row">
            <div class="w-50 mx-auto">
              <table class="table table-responsive table-bordered table-hovered">
                <thead>
                  <tr>
                    <td>Id</td>
                    <td>Langue</td>
                    <td>Date</td>
                    <td>Option</td>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include_once('connection.php');
                  $sql = "SELECT id, langue, datec FROM langues";
                  $result_langue = mysqli_query($con, $sql);
                  while ($row = mysqli_fetch_array($result_langue)) { ?>
                    <tr>
                      <td><?php echo $row['id'] ?></td>
                      <td><?php echo $row['langue'] ?></td>
                      <td><?php echo $row['datec'] ?></td>
                      <td>
                        <a href="editlang.php?id=<?php echo $row['id'] ?>" class="btn btn-success"> <i class="fas fa-edit"></i></a>
                        <a href="dellang.php?id=<?php echo $row['id'] ?>" class="btn btn-primary"> <i class="far fa-trash-alt"></i></a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </p>
    </div>

  <?php
  } elseif ($role != 'Superviseur' && $role != 'Opérateur de saisie') {
  ?>

    <div class="sidebar ">
      <br><br><a href="#Dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a><br><br><br><br>
      <a href="addOS.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Ajouter un Opérateur de saisie</a><br>
      <a href="logout.php"><i class="fa fa-sign-out"></i> Déconnexion</a><br>
    </div>

    <div class="main">
      <p>

        <div class="chip heading text-center text-uppercase text-white mb-3">
          <img src="logo.PNG" alt="logo" width="96" height="96">
          Bienvenue : <?php echo $role; ?> <?php echo $nometprenoms; ?> <br></br>
        </div>


        <center>
          <h2>Table des utilisateurs</h2>
        </center>
        <div class="container">
          <div class="row">
            <div class="col-md-12 offset-md-2">
              <table class="table table-responsive table-bordered table-hovered">
                <thead>
                  <tr>
                    <td>Id</td>
                    <td>Nom et prénom(s)</td>
                    <td>Email</td>
                    <td>Role</td>
                    <td>Date</td>
                    <td>Option</td>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include_once('connection.php');
                  $sql = "SELECT id, nometprenoms, email, role, date FROM users";
                  $result_utilisateur = mysqli_query($con, $sql);
                  while ($row = mysqli_fetch_array($result_utilisateur)) { ?>
                    <tr>
                      <td><?php echo $row['id'] ?></td>
                      <td><?php echo $row['nometprenoms'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td><?php echo $row['role'] ?></td>
                      <td><?php echo $row['date'] ?></td>
                      <td>
                        <a href="edituser.php?id=<?php echo $row['id'] ?>" class="btn btn-success"> <i class="fas fa-edit"></i></a>
                        <a href="deluser.php?id=<?php echo $row['id'] ?>" class="btn btn-primary"> <i class="far fa-trash-alt"></i></a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

    </div>
    <br><br><br>



    <center>
      <h2>Table des traductions</h2>
    </center>
    <div class="row">
      <div class="col-md-12 offset-md-2">
        <table class="table table-responsive table-bordered table-hovered">
          <thead>
            <tr>
              <td>Id</td>
              <td>texte</td>
              <td>langue d'origine</td>
              <td>traduction</td>
              <td>langue de traduction</td>
              <td>Fichier audio</td>
              <td>Date</td>
              <td>Option</td>
            </tr>
          </thead>
          <tbody>
            <?php
            include_once('connection.php');
            $sql = "SELECT id, texte1, langue_start, texte2, langue_end, audio, datec FROM data";
            $result_text = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result_text)) { ?>
              <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['texte1'] ?></td>
                <td><?php echo $row['langue_start'] ?></td>
                <td><?php echo $row['texte2'] ?></td>
                <td><?php echo $row['langue_end'] ?></td>
                <td>
                  <audio controls>
                    <source src="<?php echo $row['audio'] ?>" type="audio/mpeg">
                  </audio>
                </td>
                <td><?php echo $row['datec'] ?></td>
                <td>
                  <a href="edittext.php?id=<?php echo $row['id'] ?>" class="btn btn-success"> <i class="fas fa-edit"></i></a>
                  <a href="deltext.php?id=<?php echo $row['id'] ?>" class="btn btn-primary"> <i class="far fa-trash-alt"></i></a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div><br><br><br><br>

    <center>
      <h2>Table des langues</h2>
    </center>
    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-2">
          <table class="table table-responsive table-bordered table-hovered">
            <thead>
              <tr>
                <td>Id</td>
                <td>Langue</td>
                <td>Date</td>
                <td>Option</td>
              </tr>
            </thead>
            <tbody>
              <?php
              include_once('connection.php');
              $sql = "SELECT id, langue, datec FROM langues";
              $result_langue = mysqli_query($con, $sql);
              while ($row = mysqli_fetch_array($result_langue)) { ?>
                <tr>
                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['langue'] ?></td>
                  <td><?php echo $row['datec'] ?></td>
                  <td>
                    <a href="editlang.php?id=<?php echo $row['id'] ?>" class="btn btn-success"> <i class="fas fa-edit"></i></a>
                    <a href="dellang.php?id=<?php echo $row['id'] ?>" class="btn btn-primary"> <i class="far fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>


    </p>
    </div>


  <?php
  } else {
  ?>

    <div class="sidebar ">
      <br><br><a href="#dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a><br><br><br><br>
      <a href="stat.php"><i class="fa fa-table" aria-hidden="true"></i> Statistiques<br></a><br>
      <a href="logout.php"><i class="fa fa-sign-out"></i> Déconnexion</a><br>
    </div>

    <div class="main">
      <p>

        <div class="chip heading text-center text-uppercase text-white mb-3">
          <img src="logo.PNG" alt="logo" width="96" height="96">
          Bienvenue : <?php echo $role; ?> <?php echo $nometprenoms; ?> <br></br>
        </div>

        <center>
          <h2>Table des utilisateurs</h2>
        </center>
        <div class="container">
          <div class="row">
            <div class="col-md-12 offset-md-2">
              <table class="table table-responsive table-bordered table-hovered">
                <thead>
                  <tr>
                    <td>Id</td>
                    <td>Nom et prénom(s)</td>
                    <td>Email</td>
                    <td>Role</td>
                    <td>Date</td>
                    <td>Option</td>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include_once('connection.php');
                  $sql = "SELECT id, nometprenoms, email, role, date FROM users";
                  $result_utilisateur = mysqli_query($con, $sql);
                  while ($row = mysqli_fetch_array($result_utilisateur)) { ?>
                    <tr>
                      <td><?php echo $row['id'] ?></td>
                      <td><?php echo $row['nometprenoms'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td><?php echo $row['role'] ?></td>
                      <td><?php echo $row['date'] ?></td>
                      <td>
                        <a href="edituser.php?id=<?php echo $row['id'] ?>" class="btn btn-success"> <i class="fas fa-edit"></i></a>
                        <a href="deluser.php?id=<?php echo $row['id'] ?>" class="btn btn-primary"> <i class="far fa-trash-alt"></i></a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

    </div>
    <br><br><br>

    <center>
      <h2>Table des recherches</h2>
    </center>
    <div class="container">
      <div class="row">
        <div class="col-md-12 offset-md-2">
          <table class="table table-responsive table-bordered table-hovered">
            <thead>
              <tr>
                <td>Id</td>
                <td>Texte à traduire</td>
                <td>Langue d'origine</td>
                <td>Langue de traduction</td>
                <td>Ip utilisateur</td>
                <td>Date</td>
                <td>Option</td>
              </tr>
            </thead>
            <tbody>
              <?php
              include_once('connection.php');
              $sql = "SELECT id, search_text, langue_start, langue_end, ip, date FROM recherches";
              $result_utilisateur = mysqli_query($con, $sql);
              while ($row = mysqli_fetch_array($result_utilisateur)) { ?>
                <tr>
                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['search_text'] ?></td>
                  <td><?php echo $row['langue_start'] ?></td>
                  <td><?php echo $row['langue_end'] ?></td>
                  <td><?php echo $row['ip'] ?></td>
                  <td><?php echo $row['date'] ?></td>
                  <td>
                    <a href="edituser.php?id=<?php echo $row['id'] ?>" class="btn btn-success"> <i class="fas fa-edit"></i></a>
                    <a href="deluser.php?id=<?php echo $row['id'] ?>" class="btn btn-primary"> <i class="far fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    </div>
    <br><br><br>


    </p>
    </div>

  <?php
  }
  ?>

  <!-- affichage des propositions et critiques des utilisiateurs -->
  <center>
    <h2 style="padding: 10px;">Table des propositions et critiques des utilisateurs</h2>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-12 offset-md-2">
          <?php

          $result = mysqli_query($con, "SELECT * FROM propositions");

          echo "
    <table class=\"table table-responsive table-bordered table-hovered\"  >
<tr>
<th>email</th>
<th>propositions</th>
<th>critiques<th>
<th>dates d'envoie<th>

 </tr>";

          while ($row = mysqli_fetch_array($result)) {
            // echo "<tr >";
            echo "<td style=\"padding: 10px;\">" . $row['email'] . "</td>";
            echo "<td style=\"padding: 10px;\">" . $row['propositions'] . "</td>";
            echo "<td style=\"padding: 10px;\">" . $row['critiques'] . "</td>";
            echo "<td style=\"padding: 10px;\">" . $row['date_enrg'] . "</td>";
            echo "</tr>";
          }
          echo "</table>";
          ?>
        </div>
      </div>
    </div>

  </center>


  <!-- <center>

    <p>

      <?php
      // $fp = fopen("../counter.txt", "r+");
      // $nb_visites = fgets($fp);
      // fseek($nb_visites, 3);
      // fclose($fp);
      // echo 'la page d\'acceuil a été visité  ' . $nb_visites . ' fois';
      ?>
    </p>

  </center> -->

</body>

</html>