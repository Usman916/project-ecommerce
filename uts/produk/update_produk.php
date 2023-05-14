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
          
          <form method="POST" action="proses_produk.php">
                                    <div class="form-group row">
                                        <label for="sku" class="col-4 col-form-label">SKU</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-anchor"></i>
                                            </div>
                                            </div> 
                                            <input id="sku" name="sku" type="text" class="form-control"
                                            value="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama Produk</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-adjust"></i>
                                            </div>
                                            </div> 
                                            <input id="name" name="name" type="text" class="form-control" 
                                            value="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga_beli" class="col-4 col-form-label">Purchase Price</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-arrow-circle-o-left"></i>
                                            </div>
                                            </div> 
                                            <input id="purchase_price" name="purchase_price" 
                                            value="" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga_beli" class="col-4 col-form-label">Sell Price </label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-arrow-circle-o-left"></i>
                                            </div>
                                            </div> 
                                            <input id="sell_price" name="sell_price" 
                                            value="" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="stok" class="col-4 col-form-label">Stock</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-arrow-circle-up"></i>
                                            </div>
                                            </div> 
                                            <input id="stock" name="stock" value=""
                                            type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="min_stok" class="col-4 col-form-label">Minimum Stok</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-arrow-circle-right"></i>
                                            </div>
                                            </div> 
                                            <input id="min_stock" name="min_stock" 
                                            value=""
                                            type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="product_type_id" class="col-4 col-form-label">Produk Type</label> 
                                        <div class="col-8">
                                            <?php 
                                                $sqlproduct_type_id = "SELECT * FROM product_type";
                                                $rsproduct_type_id = $dbh->query($sqlproduct_type_id);
                                            ?>
                                        <select id="product_type_id" name="product_type_id" class="custom-select">
                                            <?php 
                                                foreach($rsproduct_type_id as $rowproduct_type_id){
                                            ?>
                                                <option value="<?=$rowproduct_type_id['id']?>"><?=$rowproduct_type_id['name']?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label for="restock_id" class="col-4 col-form-label">Restock</label> 
                                        <div class="col-8">
                                            <?php 
                                                $sqlrestock_id = "SELECT * FROM restock";
                                                $rsrestock_id = $dbh->query($sqlrestock_id);
                                            ?>
                                        <select id="restock_id" name="restock_id" class="custom-select">
                                            <?php 
                                                foreach($rsrestock_id as $rowrestock_id){
                                            ?>
                                                <option value="<?=$rowrestock_id['id']?>"><?=$rowrestock_id['id']?></option>
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
