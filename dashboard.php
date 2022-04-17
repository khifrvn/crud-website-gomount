<?php 
    session_start();
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
    <title>Home | gomount</title>
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
		          <a class="nav-link" aria-current="page" href="">Home</a>
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

  	<!-- Home Section -->
  	<section id="home">
  		<div class="video-background">
  			<div class="video-wrap">
  				<div class="video">
  					<video id="bgvid" autoplay loop muted playsinline>
  					<source src="img/forest2.mp4" type="video/mp4">
  					</video>
  				</div>
  			</div>
  		</div>
  		<div class="caption text-center">
  			<h1 style="font-weight:bold">Home of Traveller</h1>
  			<p class="text-white-75 font-weight-light mb-5">Outdoor equity, climate action, places we love.</p>
  			<a>Welcome Admin  <?php echo $_SESSION['a_global']->admin_name ?> </a>  
  		</div>
  	</section>
  	<!-- End Home -->

</body>
</html>