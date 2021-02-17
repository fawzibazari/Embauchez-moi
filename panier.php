<?php require 'header.php'; ?>



<?php 
if(isset($_GET['del'])){
    $panier->del($_GET['del']);
}
?>
<?php 

// var_dump($_SESSION);
 ?>
<!--  -->

        
<div class="row nomarge">  
        <?php 
       $ids = array_keys($_SESSION['panier']);
       if (empty($ids)){
           $products = array();
       }else{
      $products = $DB->query('SELECT * FROM user, class WHERE user.class_id_Class = class.id_Class AND id IN ('.implode(',',$ids).')');
       }
    //   var_dump($products);
    foreach($products as $product):
        ?>
             <div class="ta col" style="margin-top: 31px">
              <div class="zoom to card-container" style="margin-top: 11%">
  
           
              
                  <img class="round" src="Photo_neon/<?= $product->Image_Profile;?>"  alt="user" />
                  <h3 class="yo"><?= $product->Prenom; ?> </h3>
                  <h6 class="yi"><i class="fas fa-map-marker-alt"></i>  <?= $product->Address;?> </h6>
                  <p><?= $product->Prenom; ?>  </p>
                  <div class="buttons" style="padding-bottom:10% ;">
                  
                <style>
            .zoom:hover {
    transform: scale(1.1); 
}
                </style>
                      <!-- <button onclick="window.location.href='./rest.php?edit=<?= $product->id; ?>'"class="primary" >
                          EN SAVOIR PLUS
                      </button> -->
                      <!-- <button type="submit"  class=" bt_main btn btn-success"  >  </button> -->
                      <button type="button" class="primary"> <a style="color: white;" href="panier.php?del=<?= $product->id;?>"><i class="del"></i>Supprimer</a> </button>
  
                 </form>
                    
                 </div>
              
            
              </div>
          </div>
                 <?php endforeach; ?>
                 <button type="button" class="primary"> <a style="color: white;" href=""><i class="del"></i>Finaliser votre commande</a> </button>
           </div>

 
   
