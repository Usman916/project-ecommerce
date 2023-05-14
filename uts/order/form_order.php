<?php 
require_once '../db_koneksi.php';
?>

<?php 
    // cek apakah terdapat parameter id pada URL, jika ada maka dilakukan edit data
    $_id = isset($_GET['id']) ? $_GET['id'] : null;
    if(!empty($_id)){
        // ambil data kartu berdasarkan id
        $sql = "SELECT * FROM orders WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_id]);
        $row = $st->fetch();
    }else{
        // jika tidak ada parameter id pada URL, maka dianggap input data baru
        // inisialisasi variabel $row sebagai array kosong
        $row = [];
    }
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Card Form LUGX PetShope</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Card LUGX PetShope</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables Card
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Card LUGX PetShope
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Order</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Order</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                Ini adalah data tabel card yang di perolel dari data bash petsuplies tabel card
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>   
                                DataTable Example
                            </div>
                            <div class="card-body">
                            <a class="btn btn-success" href="form_order.php" role="button">Create Order</a>

                            <?php 
                                    require_once '../db_koneksi.php';
                                ?>
                                                
                                <form method="POST" action="proses_order.php">
                                    <div class="form-group row">
                                        <label for="order_number" class="col-4 col-form-label">Order Number</label> 
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
                                        <label for="date" class="col-4 col-form-label">Date</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-adjust"></i>
                                            </div>
                                            </div> 
                                            <input id="date" name="date" type="date" class="form-control" 
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
                                        <label for="total_price" class="col-4 col-form-label">Total Price </label> 
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
                                        <label for="customer_id" class="col-4 col-form-label">Customer</label> 
                                        <div class="col-8">
                                            <?php 
                                                $sqlcustomer_id = "SELECT * FROM orders";
                                                $rscustomer_id = $dbh->query($sqlcustomer_id);
                                            ?>
                                        <select id="customer_id" name="customer_id" class="custom-select">
                                            <?php 
                                                foreach($rscustomer_id as $rowcustomer_id){
                                            ?>
                                                <option value="<?=$rowcustomer_id['id']?>"><?=$rowcustomer_id['id']?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label for="product_id" class="col-4 col-form-label">Product</label> 
                                        <div class="col-8">
                                            <?php 
                                                $sqlproduct_id = "SELECT * FROM orders";
                                                $rsproduct_id = $dbh->query($sqlproduct_id);
                                            ?>
                                        <select id="product_id" name="product_id" class="custom-select">
                                            <?php 
                                                foreach($rsproduct_id as $rowproduct_id){
                                            ?>
                                                <option value="<?=$rowproduct_id['id']?>"><?=$rowproduct_id['id']?></option>
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
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Usman 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
