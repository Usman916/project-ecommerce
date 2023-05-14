<?php 
require_once '../db_koneksi.php';
?>

<?php 

   $ar_data[] = $_GET['id'];
   try 
   {
      $sql = "DELETE FROM product_type WHERE id = ?";
      $st = $dbh->prepare($sql);
      $st->execute($ar_data);

   } 
   catch(PDOException $e) 
   {  
      echo $e->getMessage();
   }

   header('location:list_type.php');
   ?>
   
