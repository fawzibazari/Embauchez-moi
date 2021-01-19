<?php  include('function.php'); ?>



<?php 


	if (isset($_GET['edit'] )) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM User WHERE id=$id");

		if (count([$record]) !=0 ) {
			$o = mysqli_fetch_array($record);
			$Prenom = $o['Prenom'];
            $Text = $o['Text'];
			$Video = $o['Video'];
			$Address = $o['Address'];
            $CV = $o['CV'];
            $Image_Profile = $o['Image_Profile'];
            $image = $o['image'];
            			
?>



<!DOCTYPE html>
<html lang="en">
<?php 

include 'connection.php';
?>

 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">

<!-- <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&display=swap" rel="stylesheet"> -->

</head>
<body>
    <div class="fawzi">
        <div class="header">
            <a href="#default" class="logo">#Embaucher-Moi</a>
            <div class="header-right">
              <a class="active" href="#home">Acceuil</a>
              <a  href="#">Nos étudiants</a>
              <a href="#">Contact</a>
            </div>
          </div>
    <div class="container" style="height: 100%;">
        <div class="row">
            <div class="col-sm" >
                
            
                <!-- <img src="image/Zeyd.png" alt=""> -->
                
            
                 <img src="<?php echo 'image/' . $image ?>">
              
            
            </div>
            <div class="ici col-sm" >
                <h1>Salut,  </h1>
                    <p class="laba"> Je suis <?php echo $Prenom ?> </p>
                    <h2 id="hier"><?php echo $Text ?></h2>
                    
                     <!-- <p type="button" >    
                        <a type="button" class="btn btn-primary" href="./CV_wordpress_CDA/Microsoft Word - Template CV Zeyd.pdf" class="button" >
                           
                            Télecharger mon CV
                        </a>
                    </p> -->
                    <form method="get" action="<?php echo 'CV_wordpress_CDA/' . $CV ?>">
                    <button type="submit" class="btn btn-primary" >Télecharger mon CV</button>
                    </form>
                    <br>
                    <br>
                     <!-- <button type="button" class="btn btn-danger"><a href="./CV_wordpress_CDA/Microsoft Word - Template CV Zeyd.pdf"></a> Télecharger mon CV</button> -->
                    <iframe  class= "testa" width="560" height="315" src="<?php echo $Video; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>
    </div>   
    
</div>
<div class="testo">
<p>testetstegdjjgjg</p>

    
</div>
</body>
</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;1,700;1,900&display=swap');
.testo {
    background-color: white;
}
.fawzi {
    background-image: linear-gradient(to right top, #e02941, #db243c, #d72037, #d21b32, #cd152d);
    color: #fff;
    box-shadow: 3px 3px rgb(2, 2, 2), -1em 0 .4em rgb(17, 17, 14);
}

.col-sm,h1 {
    margin-top: 200px;
    color: white;
}

.navbar-light .navbar-brand {
    color: white;
}
.navbar-light .navbar-nav .nav-link {
    color: white;
}
.navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
    color: white;
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
    color: white;
}
.ici {
font-family: 'Poppins', sans-serif;
 margin-top: 100px;
}
.laba{
    font-weight: bold;
    font-size: 2rem;
    font-family: 'Poppins', sans-serif;
    
    
}
/* CSS additionnelle */


.btn {
   -webkit-transition: 0.5s ease;
   -moz-transition: 0.5s;
   -ms-transition: 0.5s;
   -o-transition: 0.5s;
   transition: 0.5s;
}

.btn.btn-primary {
	font-size: 16px; 
	border: 2px solid white; 
    background:white;
	padding:15px 40px; 
	text-transform:uppercase;
    border-radius:30px;
    color:black;
}

.btn.btn-primary:hover {
    background:transparent;
    border-radius:0;
    border: 2px solid transparent;
    color:white;
}
html {
    background-color: white;
}
 
</style>







<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>

	</div>
<?php endif ?>

</body>
</html>







<?php
}
?>
<?php
	}
?>




