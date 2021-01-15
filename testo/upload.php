<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    Select Image Files to Upload:
    <input type="file" name="files[]" multiple >
    <input type="submit" name="submit" value="UPLOAD">
</form>
</body>

<?php
// Include the database configuration file
include_once 'dbconfig.php';

// Get images from the database
$query = $db->query("SELECT * FROM User WHERE id = 2");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["image"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>Pas d'image trouver</p>
<?php } ?> 
</html>