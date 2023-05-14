<?php 
require_once '../db_koneksi.php';
?>

<?php   
    error_reporting(E_ALL);
    ini_set("display_errors", 0);

    $_id = $_GET['idedit'];

    $sql = "SELECT * FROM product WHERE id = ?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();

    $simpan = $_GET['simpan'];

    if (isset($simpan)) 
    { 
      $_kode = $_GET['id'];
      $_sku = $_GET['sku'];
      $_nama = $_GET['name'];
      $_harga = $_GET['purchase_price'];
      $_sell = $_GET['sell_price'];
      $_stok = $_GET['stock'];
      $_minstok = $_GET['min_stock'];
      $_produk = $_GET['product_type_id'];
      $_restok = $_GET['restock_id'];
   
      // array data
      $ar_data[]=$_kode; // ? 1
      $ar_data[]=$_sku; // ? 1
      $ar_data[]=$_nama; // ? 2
      $ar_data[]=$_harga;// 3
      $ar_data[]=$_sell;
      $ar_data[]=$_stok;
      $ar_data[]=$_minstok;
      $ar_data[]=$_minprod; // ? 7
      $ar_data[]=$_restok; // ? 7

      $ar_data[]=$_GET['idedit'];// ? 8
      $sql = "UPDATE product SET 
              kode = ?,
              sku = ?,
              name = ?,
              purchase_price = ?,
              sell_price = ?,
              stock = ?,
              min_stock = ?,
              product_type_id = ?,
              restock_id = ? WHERE id = ?";
               
              

      if(isset($sql)){
          $st = $dbh->prepare($sql);
          $st->execute($ar_data);

          // echo 'Berhasil Update Data';
          header('location:list_produk.php');
        
      }
    }
?>
          
          <form method="POST" action="proses_customer.php">
                                    <div class="form-group row">
                                        <label for="name" class="col-4 col-form-label">Name</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-anchor"></i>
                                            </div>
                                            </div> 
                                            <input id="name" name="name" type="text" class="form-control"
                                            value="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gender" class="col-4 col-form-label">Gender</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-adjust"></i>
                                            </div>
                                            </div> 
                                            <input id="gender" name="gender" type="text" class="form-control" 
                                            value="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-4 col-form-label">NO tlp</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-arrow-circle-o-left"></i>
                                            </div>
                                            </div> 
                                            <input id="phone" name="phone" 
                                            value="" type="number" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-4 col-form-label">Email</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-arrow-circle-o-left"></i>
                                            </div>
                                            </div> 
                                            <input id="email" name="email" 
                                            value="" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address" class="col-4 col-form-label">address</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-arrow-circle-up"></i>
                                            </div>
                                            </div> 
                                            <input id="address" name="address" value=""
                                            type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="card_id" class="col-4 col-form-label">card</label> 
                                        <div class="col-8">
                                            <?php 
                                                $sqlcard_id = "SELECT * FROM cards";
                                                $rscard_id = $dbh->query($sqlcard_id);
                                            ?>
                                        <select id="card_id" name="card_id" class="custom-select">
                                            <?php 
                                                foreach($rscard_id as $rowcard_id){
                                            ?>
                                                <option value="<?=$rowcard_id['id']?>"><?=$rowcard_id['id']?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                        </div>
                                    </div>
                                     
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                        <input type="submit" name="proses" type="submit" 
                                        class="btn btn-primary" value="Simpan"/>
                                        </div>
                                    </div>
                                </form>
