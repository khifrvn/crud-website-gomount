<?php 
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }

    $kategori = mysqli_query($conn, "SELECT * FROM tb_category WHERE category_id = '".$_GET['id']."'");
    if(mysqli_num_rows($kategori) == 0){
        echo '<script>window.location="data-kategori.php"</script>';
    }
    $k = mysqli_fetch_object($kategori);
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
    <title>Profile | gomount</title>
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
		          <a class="nav-link" aria-current="page" href="dashboard.php">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="profil.php">Profile</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="data-kategori.php">Category Data</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="data-produk.php">Product Data</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="keluar.php">Logout</a>
		        </li>

		      </ul>
		    </div>
		  </div>
		</nav>
  	<!-- End Navigasi Bar -->

  	
    <!-- Footer -->
    <div class="section" style="padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-12 mb-4 mt-5">
            <h4 class="heading">Edit Category</h4>
          </div>
            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label">Category Name</label>
                    <input type="text" name="nama" class="form-control" placeholder="Category Name" value="<?php echo $k->category_name?>">
                </div>
                <button type="submit" name="submit" value="ubah profil" class="btn btn-success">Submit</button>
            </form>
            <?php 
                if(isset($_POST['submit'])){
                    $nama = ucwords($_POST['nama']);
                    
                    $update = mysqli_query($conn, "UPDATE tb_category SET category_name = '".$nama."' WHERE category_id = '".$k->category_id."' ");
                    
                    if($update){
                        echo '<script>alert("Success edit data")</script>';
                        echo '<script>window.location="data-kategori.php"</script>';
                    }else{
                        echo '<script>alert("Data not added!")</script>';
                    }
                }
            ?>
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