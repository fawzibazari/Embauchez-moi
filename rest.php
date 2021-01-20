<?php  include('function.php'); ?>



<?php 


	if (isset($_GET['edit'] )) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM user, class WHERE user.class_id_Class = class.id_Class AND id = $id");

		if (count([$record]) !=0 ) {
			$o = mysqli_fetch_array($record);
			$Prenom = $o['Prenom'];
            $Text = $o['Text'];
			$Video = $o['Video'];
			$Address = $o['Address'];
            $CV = $o['CV'];
            $Image_Profile = $o['Image_Profile'];
            $image = $o['image'];
            $class = $o['nom'];
            			
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
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Coda+Caption:wght@800&display=swap" rel="stylesheet">

<!-- <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&display=swap" rel="stylesheet"> -->

</head>
<body>
    <div class="fawzi">
        <div class="header">
            <a href="#default" class="logo">#Embauchez-Moi</a>
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
                
            
                 <img src="<?php echo 'image/' . $image ?>" class="img-fluid">
              
            
            </div>
            <div class="ici col" >
            <h1 class="text-white">Bonjour,<br></h1>
                        <span class="abc">Je suis <?php echo $Prenom ?></span>
                        <h2><?php echo $class ?></h2>
                        
                
                    
                     
                    <br>
                    <form method="get" action="<?php echo 'CV_wordpress_CDA/' . $CV ?>">
                    <button type="submit" class="btn btn-primary" >Télecharger mon CV</button>
                    </form>
                    <br>
                     <!-- <button type="button" class="btn btn-danger"><a href="./CV_wordpress_CDA/Microsoft Word - Template CV Zeyd.pdf"></a> Télecharger mon CV</button> -->
                        
                     <div class="tatacontainer"> 
                            <iframe class="responsive-iframe" width="560" height="315" src=<?php echo $Video; ?> frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
            </div>

        </div>
    </div>   
    
</div>
<div class="testo">
<!-- <p>testetstegdjjgjg</p>
<p>testetstegdjjgjg</p>
<p>testetstegdjjgjg</p>
<p>testetstegdjjgjg</p>
<p>testetstegdjjgjg</p>
<p>testetstegdjjgjg</p>
<p>testetstegdjjgjg</p> -->

    
</div>
</body>
</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;1,700;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Exo:ital,wght@1,900&family=Teko:wght@600&display=swap');
    .tatacontainer {
  position: relative;
  overflow: hidden;
  width: 100%;
  padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
}

/* Then style the iframe to fit in the container div with full height and width */
.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
}
    
    h2{
        margin-top: 10px
    }
    
    .abc{
        font-family: 'Exo', sans-serif;
font-family: 'Teko', sans-serif;

        font-size: 45px;
        font-weight: bold;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-top: 0px;
        
    }
.banner-left h1 span {
    text-transform: uppercase;
    font-weight: 700;
    font-size: 20px;
    font-weight: 30px;
    
    
}
.testo {
    background-color: white;
}
.fawzi {
    background: rgb(224,41,65);
background: linear-gradient(0deg, rgba(224,41,65,1) 41%, rgba(0,0,0,0.7805497198879552) 100%);
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
 margin-top: 80px;
}
.laba{
    text-transform: uppercase;
    font-weight: 700;
    
    
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

.text-white{
    margin-bottom: 10px;
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




