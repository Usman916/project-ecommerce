<?php 
require_once '../db_koneksi.php';
?>
<?php 
   $_sku = $_POST['sku'];
   $_name = $_POST['name'];
   $_purchase_price = $_POST['purchase_price'];
   $_sell_price = $_POST['sell_price'];
   $_stock = $_POST['stock'];
   $_min_stock = $_POST['min_stock'];
   $_product_type_id = $_POST['product_type_id'];
   $_restock = $_POST['restock_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_sku; // ? 1
   $ar_data[]=$_name; // ? 2
   $ar_data[]=$_purchase_price;// 3
   $ar_data[]=$_sell_price;
   $ar_data[]=$_stock;
   $ar_data[]=$_min_stock;
   $ar_data[]=$_product_type_id; // ? 7
   $ar_data[]=$_restock; // ? 7

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO product (sku,name,purchase_price,sell_price,stock,
    min_stock,product_type_id,restock_id) VALUES (?,?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE product SET sku=?,name=?,purchase_price=?,sell_price=?,
    stock=?,min_stock=?,product_type_id=?,restock_id WHERE id=?";
   // echo 'masuk sini';
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_produk.php');

   /* 
      PHP 
      create 
      read 
      update 
      delete

      CRUD 
   */
?>