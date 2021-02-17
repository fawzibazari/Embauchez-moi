<body style="font-size:40px;

@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap');
font-family: 'Raleway', sans-serif;">

<?php
require '_header.php';
if(isset($_GET['id'])){
  $product = $DB->query('SELECT id FROM user WHERE id=:id', array('id' => $_GET['id']));
  if(empty($product)){
      die("Ce produit n'existe pas");
  }
  
  $panier->add($product[0]->id);
  die ('Un étudiant a bien été ajouté a votre panier 
<button class="primary"><a href="index.php">retourner sur le catalogue</a></button>
');
}else{
    die("Vous n'avez pas sélectionné de produit à ajouter au panier");
}
?>
<style>
  a{
    color: white;
  }
</style>

</body>
</html>