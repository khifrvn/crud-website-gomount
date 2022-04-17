<?php 
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }

    $query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE admin_id = '".$_SESSION['id']."'");
    $d = mysqli_fetch_object($query);
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
            <h4 class="heading">Category Data</h4>
          </div>
            <p><a href="tambah-kategori.php">Add Category</a></p>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
                    while($row = mysqli_fetch_array($kategori)){
                ?>
                <tr>
                <th scope="row"><?php echo $no++ ?></th>
                <td><?php echo $row['category_name']?></td>
                <td><a href="edit-kategori.php?id=<?php echo $row['category_id']?>">Edit</a> || <a href="proses-hapus.php?idk=<?php echo $row['category_id'] ?>" 
                onclick="return confirm('Sure?')">Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
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