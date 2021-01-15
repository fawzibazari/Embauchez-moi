<!DOCTYPE html>
<html lang="en">
<head> 
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
    <a href="#default" class="logo">#Embaucher-Moi</a>
    <div class="header-right">
      <a class="active" href="#home">Acceuil</a>
      <a  href="#">Nos étudiants</a>
      <a href="#">Contact</a>
    </div>
  </div>
<body>

    <div class="container" style="height: 100%;">
        <div class="row">
            <div class="col" >
                <div class="card-container">
                    <span class="pro">DISPO</span>
                    <img class="round" src="https://www.imie-paris.fr/wp-content/uploads/2019/08/Mohamed-fond-noir.png" alt="user" />
                    <h3>Ricky Park</h3>
                    <h6>Asnieres</h6>
                    <p>User interface designer and <br/> front-end developer</p>
                    <div class="buttons">
                        <button onclick="window.location.href='./index.php?id=1'"class="primary">
                            EN SAVOIR PLUS
                        </button>
                        
                    </div>
                    <div class="skills">
                        <h6>Compétence</h6>
                        <ul>
                            <li>UI / UX</li>
                            <li>Front End Development</li>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JavaScript</li>
                            <li>React</li>
                            <li>Node</li>
                        </ul>
                    </div>
                </div>
                </div>
                <div class="col" >
                
                    <div class="card-container">
                        <span class="pro">DISPO</span>
                        <img class="round" src="https://www.imie-paris.fr/wp-content/uploads/2019/08/Mohamed-fond-noir.png" alt="user" />
                        <h3>Ricky Park</h3>
                        <h6>New York</h6>
                        <p>User interface designer and <br/> front-end developer</p>
                        <div class="buttons">
                            <button class="primary">
                                Message
                            </button>
                            <button class="primary ghost">
                                Following
                            </button>
                        </div>
                        <div class="skills">
                            <h6>Skills</h6>
                            <ul>
                                <li>UI / UX</li>
                                <li>Front End Development</li>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>JavaScript</li>
                                <li>React</li>
                                <li>Node</li>
                            </ul>
                        </div>
                    </div>
                   
                        </div>
                        <div class="col" >
                
                            <div class="card-container">
                                <span class="pro">DISPO</span>
                                <img class="round" src="https://www.imie-paris.fr/wp-content/uploads/2019/08/Mohamed-fond-noir.png" alt="user" />
                                <h3>Ricky Park</h3>
                                <h6>New York</h6>
                                <p>User interface designer and <br/> front-end developer</p>
                                <div class="buttons">
                                    <button class="primary">
                                        Message
                                    </button>
                                    <button class="primary ghost">
                                        Following
                                    </button>
                                </div>
                                <div class="skills">
                                    <h6>Skills</h6>
                                    <ul>
                                        <li>UI / UX</li>
                                        <li>Front End Development</li>
                                        <li>HTML</li>
                                        <li>CSS</li>
                                        <li>JavaScript</li>
                                        <li>React</li>
                                        <li>Node</li>
                                    </ul>
                                </div>
                            </div>
                           
                                </div>
                                
        </div>
        <?php
include "connection.php";


	/*--- we created a variables to display the error message on design page ------*/
	$error = "";

	if (isset($_POST["btn_upload"]) == "Upload")
	{
		$file_tmp = $_FILES["fileImg"]["tmp_name"];
		$file_name = $_FILES["fileImg"]["name"];

		/*image name variable that you will insert in database ---*/
		$image_name = $_POST["img-name"];

		//image directory where actual image will be store
		$file_path = "images/".$file_name;	

	/*---------------- php textbox validation checking ------------------*/
	if($image_name == "")
	{
		$error = "Please enter Image name.";
	}

	/*-------- now insertion of image section has start -------------*/
	else
	{
		if(file_exists($file_path))
		{
			$error = "Sorry,The <b>".$file_name."</b> image already exist.";
		}
			else
			{
				$result = mysqli_connect($host, $uname, $pwd) or die("Connection error: ". mysqli_error());
				mysqli_select_db($result, $db_name) or die("Could not Connect to Database: ". mysqli_error());
				mysqli_query($result,"INSERT INTO User(image)
				VALUES('$image_name')") or die ("image not inserted". mysqli_error());
				move_uploaded_file($file_tmp,$file_path);
				$error = "<p align=center>File ".$_FILES["fileImg"]["name"].""."<br />Image saved into Table.";
			}
		}
	}
?>
</body>
</html>