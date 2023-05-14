<?php 
require_once '../db_koneksi.php';
?>

<?php   
    error_reporting(E_ALL);
    ini_set("display_errors", 0);

    $_id = $_GET['idedit'];

    $sql = "SELECT * FROM product_type WHERE id = ?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();

    $simpan = $_GET['simpan'];

    if (isset($simpan)) 
    { 
      
      $_name = $_GET['name'];
      
   
      // array data
      
      $ar_data[]=$_name; // ? 1
      

      $ar_data[]=$_GET['idedit'];// ? 8
      $sql = "UPDATE product_type SET 
            name = ? WHERE id = ?";
            
            
               
              

      if(isset($sql)){
          $st = $dbh->prepare($sql);
          $st->execute($ar_data);

          // echo 'Berhasil Update Data';
          header('location:list_type.php');
        
      }
    }
?>
          
<form method="GET" action="">
  <input type="hidden" name="idedit" value='<?= $row['id'] ?>'>
  <input type="hidden" name="simpan" value='simpan'>
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Name</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="name" name="name" type="text" class="form-control"
        value="<?= $row['name'] ?>">
      </div>
    </div>
  </div>
  
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Simpan"/>
    </div>
  </div>
</form>
