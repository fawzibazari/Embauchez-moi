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
<link rel="stylesheet" href="test.css">
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


  $sql = "SELECT * FROM user, class WHERE user.class_id_Class = class.id_Class AND id ";
  $res=$conn->query($sql);
  $res -> fetch_all(MYSQLI_ASSOC);


 ?> <div class="row nomarge">
 <?php
foreach ($res as $rows):

?>


                      <div class="col" style="margin-top: 5%;" >
                <div class="card-container">
                    <span class="pro"><i style="font-size:30px" class="fa">&#xf07a;</i></span>
                
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

<html>

<style> 
/* @import url('https://fonts.googleapis.com/css?family=Montserrat');
                
                * {
                    box-sizing: border-box;
                }
                        img {
                max-width:100%;
                height:auto;
                }   
                        
                .container {
                    background-color: blue;
                    font-family: Montserrat, sans-serif;
                    
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-direction: column;
                
                    min-height: 100vh;
                    margin-left: 300px;
                }
                
                h3 {
                    margin: 10px 0;
                    color: black;
                }
                
                h6 {
                    margin: 5px 0;
                    text-transform: uppercase;
                    color: black;
                }
                
                p {
                    font-size: 14px;
                    line-height: 21px;
                    color: black;
                }
                
                .card-container {
                    background-color: white;
                    border-radius: 5px;
                    box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
                    color: #B3B8CD;
                    padding-top: 30px;
                    position: relative;
                    width: 350px;
                    max-width: 100%;
                    text-align: center;
                }

                .card-container .pro {
                    color: #231E39;
                    background-color: #009fe4;
                    border-radius: 3px;
                    font-size: 14px;
                    font-weight: bold;
                    padding: 3px 7px;
                    position: absolute;
                    top: 30px;
                    left: 30px;
                }
                
                
                
                .card-container .round {
                    border: 1px solid white;
                    border-radius: 50%;
                    padding: 7px;
                }
                
                button.primary {
                    background-color: #e02941;
                    border: 1px solid white;
                    border-radius: 3px;
                    color: #231E39;
                    font-family: Montserrat, sans-serif;
                    font-weight: 500;
                    padding: 10px 25px;
                }
                
                button.primary.ghost {
                    background-color: transparent;
                    color: #02899C;
                }
                
                .skills {
                    background-color: white;
                    text-align: left;
                    padding: 15px;
                    margin-top: 30px;
                    color: black;
                }
                
                .skills ul {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    color: black;
                }
                
                .skills ul li {
                    border: 1px solid #2D2747;
                    border-radius: 2px;
                    display: inline-block;
                    font-size: 12px;
                    margin: 0 7px 7px 0;
                    padding: 7px;
                    color: black;
                }
                
                footer {
                    background-color: white;
                    color: #fff;
                    font-size: 14px;
                    bottom: 0;
                    position: fixed;
                    left: 0;
                    right: 0;
                    text-align: center;
                    z-index: 999;
                }
                
                footer p {
                    margin: 10px 0;
                }
                
                footer i {
                    color: red;
                }
                
                footer a {
                    color: #3c97bf;
                    text-decoration: none;
                }
                .header {
                overflow: hidden;
                background-color:#E02941;
                padding: 20px 10px;
                }
                
                .header a {
                float: left;
                color: white;
                text-align: center;
                padding: 12px;
                text-decoration: none;
                font-size: 18px; 
                line-height: 25px;
                border-radius: 4px;
                }
                
                .header a.logo {
                font-size: 25px;
                font-weight: bold;
                }
                
                .header a:hover {
                background-color: dodgerblue;
                color: white;
                }
                
                .header a.active {
                background-color: dodgerblue;
                color: white;
                }
                
                .header-right {
                float: right;
                }
                @media screen and (max-width: 500px) {
                .header a {
                float: none;
                display: block;
                text-align: left;
                }
                
                .header-right {
                float: none;
                }
                
                } */
</style>




