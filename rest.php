<!DOCTYPE html>
<html lang="en">
<head> 
<?php include 'connection2.php'; ?>

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
                    <?php foreach ($users as $user): ?>
                    <img class="round" src="https://www.imie-paris.fr/wp-content/uploads/2019/08/Mohamed-fond-noir.png" alt="user" />
                    <h3><?php echo $user['Prenom']; ?> </h3>
                    <h6><?php echo $user['Address']; ?> </h6>
                    <p><?php echo $user['Text']; ?>  <br/> front-end developer</p>
                    <div class="buttons">
                    
                  
                        <button onclick="window.location.href='./index.php?id=2'"class="primary">
                            EN SAVOIR PLUS
                        </button>
                      
                    </div>
                    <?php endforeach; ?>
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
</body>
</html>