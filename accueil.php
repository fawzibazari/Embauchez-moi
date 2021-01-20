<?php require ('function.php')  ?>


  <!DOCTYPE html>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="rest.css">
</head>
<div class="header">
    <a href="#default" class="logo">#Embauchez-Moi</a>
    <div class="header-right">
      <a class="active" href="#home">Acceuil</a>
      <a  href="#">Nos étudiants</a>
      <a href="#">Contact</a>
    </div>
  </div>
<body style="background-color: #f8f9fa;">
<section style="margin-left: 60px; margin-right: 60px;">


    
        <?php
$conn=new mysqli($servername,$username,$password,$dbname);

;
 ?>
<?php
//nnnnnnnn

  $sql = "SELECT * FROM user, class WHERE user.class_id_Class = class.id_Class AND id ";
  $res=$conn->query($sql);
  $res -> fetch_all(MYSQLI_ASSOC);


 ?> <div class="row nomarge">
 <?php
foreach ($res as $rows):

?>


                      <div class="col" style="margin-top: 5%;" >
                <div class="card-container">
                    <span class="pro">DISPO</span>
                
                    <img class="round" src="<?php echo 'Photo-neon/' . $rows['Image_Profile']?>"  alt="user" />
                    <h3><?php echo $rows['Prenom'] ?> </h3>
                    <h6><?php echo $rows['Address']?> </h6>
                    <p><?php echo $rows['nom'] ?>  <br/> front-end developer</p>
                    <div class="buttons" style="padding-bottom:10% ;">
                    
                  
                        <button onclick="window.location.href='./rest.php?edit=<?php echo $rows['id']?>'"class="primary" >
                            EN SAVOIR PLUS
                        </button>
                      
                    </div>
                
              
                </div>
            </div>

      
<?php
endforeach;
?>  
</div>
<?php


?>

</section>
</body>




