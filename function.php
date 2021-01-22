<?php
//   $conn = mysqli_connect("localhost", "root", "", "Embauchez Moi");
//   $results = mysqli_query($conn, "SELECT * FROM User ");
//   $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
  // Informations d'identification
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', 'root');
  define('DB_NAME', 'Embauchez Moi');
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "Embauchez Moi";
  $datatable = "User"; // MySQL table name
//   $results_per_page = 20;
   
  // Connexion à la base de données MySQL 
  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
   
  // Vérifier la connexion
  if($conn === false){
      die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
  }
?>

<?php
function template_header2($title) {

echo <<<EOT
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
    <title>Track</title> 
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,200&display=swap");
        .nomarge{margin:0 !important}
        #logo{font-family:'Lobster', cursive;color:#C49953;font-size:25px;margin-top:7px}
        .btnicon{float:right;margin-top:12px}
        #ligne{border:solid 1px #dadada;margin-top:-20px}
        .btncat{font-family:'Montserrat', sans-serif;color:#535353};
        .centre {
            text-align: center;
        }
       .fa-user{
           color:#830000;
       }
    </style>
</head>
<script type="text/javascript">
   

   function Message2() {
       var msg="il vous faut vous connectez pour voir votre panier.";
       console.log(msg)
       alert(msg);
   }
</script>

<body style="background-color: #f8f9fa">
    <header>
        <div class="row nomarge" style="height: 50px;">
            <div class="col-md-2 col-sm-3">
            <a class="btn btn-light" href="../page_de_garde/pageGardens.php" role="button" id="logo">Track</a>
            </div>
           
            <div class="offset-md-8 col-md-2 offset-sm-6 col-sm-3">
            <a class="btnicon btn btn-light" href="../login.php" role="button"><i class="fas fa-user"></i></a>
          
            </div>
        </div>
        <div class="row nomarge">
            
             <div class="offset-md-2 col-md-2 col-sm-3" style="text-align: center;">
             <a class="btncat btn btn-light" href="../saxons/saxons.php" role="button">Saxophones</a>            
             </div>
             <div class="col-md-2 col-sm-3" style="text-align: center;">
             <a class="btncat btn btn-light" href="../tubasns/tubasns.php" role="button">Tubas</a>
             </div>
             <div class="col-md-2 col-sm-3" style="text-align: center;">
             <a class="btncat btn btn-light" href="../trompettesns/trompettesns.php" role="button">Trompettes</a>
             </div>
             <div class="col-md-2 col-sm-3" style="text-align: center;">
             <a class="btncat btn btn-light" href="../buglesns/buglesns.php" role="button">Bugles</a>
              </div>
        </div>
        <div class"row nomarge">
        <form action="" method="post" style="position: absolute; margin-left:80px">
            <input type="text" name="search" placeholder=" Rechercher" style="width: 200px; height: 35px;border: solid gray 1px; border-radius: 2px">
            <button type="submit" name="submit" style="width: 60px; height: 35px; margin-left: -5px; border: solid gray 1px; border-radius: 2px"><i class="fas fa-search" style="color: gray"></i></button>
        </form>
        </div>
        <hr id="ligne">
    </header>
EOT;
}





