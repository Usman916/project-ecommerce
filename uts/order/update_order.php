<?php 
require_once '../db_koneksi.php';
?>

<?php   
    error_reporting(E_ALL);
    ini_set("display_errors", 0);

    $_id = $_GET['idedit'];

    $sql = "SELECT * FROM orders WHERE id = ?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();

    $simpan = $_GET['simpan'];

    if (isset($simpan)) 
    { 
      
      $_order_number = $_GET['order_number'];
      $_date = $_GET['date'];
      $_qty = $_GET['qty'];
      $_total_price = $_GET['total_price'];
      $_costumer_id = $_GET['costumer_id'];
      $_product_id = $_GET['product_id'];
      
   
      // array data
      $ar_data[]=$_order_number; // ? 1
      $ar_data[]=$_date; // ? 1
      $ar_data[]=$_qty; // ? 2
      $ar_data[]=$_total_price;// 3
      $ar_data[]=$_costumer_id;
      $ar_data[]=$_product_id;
      

      $ar_data[]=$_GET['idedit'];// ? 8
      $sql = "UPDATE orders SET 
              order_number = ?,
              date = ?,
              qty = ?,
              total_price = ?,
              costumer_id = ?,
              product_id = ? WHERE id = ?";
               
               
              

      if(isset($sql)){
          $st = $dbh->prepare($sql);
          $st->execute($ar_data);

          // echo 'Berhasil Update Data';
          header('location:list_orders.php');
        
      }
    }
?>
          
          <form method="POST" action="proses_order.php">
                                    <div class="form-group row">
                                        <label for="sku" class="col-4 col-form-label">Order</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-anchor"></i>
                                            </div>
                                            </div> 
                                            <input id="order_number" name="order_number" type="text" class="form-control"
                                            value="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Date</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-adjust"></i>
                                            </div>
                                            </div> 
                                            <input id="date" name="date" type="text" class="form-control" 
                                            value="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="qty" class="col-4 col-form-label">Qty</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-arrow-circle-o-left"></i>
                                            </div>
                                            </div> 
                                            <input id="qty" name="qty" 
                                            value="" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="total_price" class="col-4 col-form-label">Total Price</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-arrow-circle-o-left"></i>
                                            </div>
                                            </div> 
                                            <input id="total_price" name="total_price" 
                                            value="" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="costumer_id" class="col-4 col-form-label">Costumer</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-arrow-circle-up"></i>
                                            </div>
                                            </div> 
                                            <input id="costumer_id" name="costumer_id" value=""
                                            type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="product_id" class="col-4 col-form-label">Product</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-arrow-circle-right"></i>
                                            </div>
                                            </div> 
                                            <input id="product_id" name="product_id" 
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
