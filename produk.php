<?php 
    error_reporting(0);
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Category Data | gomount</title>
</head>
<body>
    <!-- Navigasi Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm" style="background-color:#162717" id="main-nav">
		  <div class="container">
		    <a class="navbar-brand" href="#" style="font-weight:bold ">
        <img src="img/sun.png" alt="icon" id="icon" class="d-inline-block align-top">
        gomount
        </a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNav">
		      <ul class="navbar-nav ms-auto">
		        <li class="nav-item">
		          <a class="nav-link" aria-current="page" href="index.php">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="produk.php">Product</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
  	<!-- End Navigasi Bar -->

  	
    <!-- Footer -->
    <div class="section" style="padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4 mt-5">
                <h4 class="heading">Search Product</h4>
                <div class="search">
                   <form action="produk.php">
                        <div class="input-group rounded">
                            <input type="text" name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                            <input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
                            <input type="submit" name="cari" class="btn btn-success" name="cari" value="Search"></input>
                        </div>
                   </form>
                </div>
            </div>
            <h4 class="heading mb-5 mt-5">Product</h4>
            <?php
                if($_GET['search'] != '' || $_GET['kat'] != ''){
                    $where = "AND product_name LIKE '%".$_GET['search']."%' AND category_id LIKE '%".$_GET['kat']."%' ";
                }
                $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 $where ORDER BY product_id DESC");
                if(mysqli_num_rows($produk) > 0){
                    while($p = mysqli_fetch_array($produk)){
            ?>
            <div class="col-md-3 mb-3">
                <div class="card">
                  <img class="card-img-top" src="produk/<?php echo $p['product_image']?>" alt="camping 1">
                  <div class="card-body">
                    <h4 class="card-title text-center" style="font-family:'Sans-serif';"><?php echo $p['product_name']?></h4>
                    <p class="text-center">$<?php echo $p['product_price']?></p>
                    <p class="text-center"><?php echo $p['product_description']?></p>
                    <a id="btnabt" onclick="showAlert()" class="btn btn-sm js-scrolltrigger mx-auto d-block" href="https://wa.me/message/SJC2LCBZ7XFXL1"><span>Order Now!</span></a>
                  </div>
                </div>
            </div>
            <?php }}else{ ?>
                <p>Product not found</p>
            <?php } ?>
        </div>
      </div>
    </div>

    <footer class="site-footer" id="footer">
      <div class="container">
        <div class="row">
          <div class="col-12 text md center text-center">
            <p>Copyrighted By Mochammad Fakhrizal J, Muhammad Khifransyah Ayyubi M & Salman Affandi Yusuf</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
</body>
</html>