<?php
    include 'db.php';
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
		          <a class="nav-link" href="produk.php">Product</a>
                </li>   
		        <li class="nav-item">
		          <a class="nav-link" href="#about">About</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#contact">Contact</a>
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
            <a class="btn btn-outline-light btn-xl" href="#about">Find More</a>
  		</div>
  	</section>
  	<!-- End Home -->

  	<!-- About Section -->
  	<section id="about">
  	  <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="mt-0">We've got what you need!</h2>
            <hr class="divider dark my-4">
            <p class="mb-4"> Since 2021, we have been your local outdoor co-op, working to help you experience the transformational power of nature. We bring you top-quality gear and apparel, expert advice, rental equipment, inspiring stories of life outside and outdoor experiences to enjoy alone or share with your friends and family. </p>
            <a id="btnabout" class="btn btn-xl js-scrolltrigger" href="produk.php">Shop Now!</a>
          </div>
        </div>
      </div>
  	</section>
  	<!-- End About -->

    <!-- Camping Section -->
    <section id="camping"> 
      <div class="container">
        <div class="row">
            <h3 class="text-center" style="padding-bottom: 3rem;">Camping Equipment</h3>
            <!-- Item -->
            <div class="col-md-3 mb-3">
                <div class="card">
                  <img class="card-img-top" src="img/camping1.webp" alt="camping 1">
                  <div class="card-body">
                    <h4 class="card-title text-center" style="font-family:'Sans-serif';">Jacket</h4>
                    <p class="text-center">Keeping you warm, dry, cool & protected.</p>
                    <a id="btnabt" onclick="showAlert()" class="btn btn-sm js-scrolltrigger mx-auto d-block" href="produk.php"><span>See More!</span></a>
                  </div>
                </div>
            </div>

            <div class="col-md-3 mb-3 ">
              <div class="card">
                <img class="card-img-top" src="img/camping2.webp" alt="camping 2">
                <div class="card-body">
                  <h4 class="card-title text-center" style="font-family:'Sans-serif';">Pants</h4>
                  <p class="text-center">Versatile, durable and all-day comfortable.</p>
                  <a id="btnabt" onclick="showAlert()" class="btn btn-sm js-scrolltrigger mx-auto d-block" href="produk.php"><span>See More!</span></a>
                </div>
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="card-img-top" src="img/camping3.webp" alt="camping 3">
                <div class="card-body">
                  <h4 class="card-title text-center" style="font-family:'Sans-serif';">Carrier</h4>
                  <p class="text-center">Roomy enough for a weekend and comfortable enough for long hikes</p>
                  <a id="btnabt" onclick="showAlert()" class="btn btn-sm js-scrolltrigger mx-auto d-block" href="produk.php"><span>See More!</span></a>
                </div>
              </div>
            </div>

            <div class="col-md-3 mb-3 ">
              <div class="card">
                <img class="card-img-top" src="img/camping4.webp" alt="camping 4">
                <div class="card-body">
                  <h4 class="card-title text-center" style="font-family:'Sans-serif';">Tent</h4>
                  <p class="text-center">Offering quick and outstanding weather protection</p>
                  <a id="btnabt" onclick="showAlert()" class="btn btn-sm js-scrolltrigger mx-auto d-block" href="produk.php"><span>See More!</span></a>
                </div>
              </div>
            </div>
            <!-- end Item -->    
            <br>
            <br>
            <!-- Category -->
            <div class="container mt-1">
                <div class="row">
                    <h4 class="text-left mt-3 mb-5">Category</h4>
                    <?php 
                        $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
                        if(mysqli_num_rows($kategori) > 0){
                            while($k = mysqli_fetch_array($kategori)){
                    ?>
                        
                        <div class="col-1">
                            <a href="produk.php?kat=<?php echo $k['category_id']?>">
                            <img src="img/folder-solid.svg" width="50px">
                            </a>
                            <p><?php echo $k['category_name']?></p>
                        </div>
                    <?php }}else{ ?>
                        <p>Category not found!</p>
                    <?php } ?>   
                </div>
            </div>
        <!-- End Category --> 
        </div>
      </div>
      

    </section>
    <!-- End Camping -->

    <!-- Hiking -->
    <section id="hiking">
      <div class="jumbotron" style="background-image: url('img/hiking1.jpg'); background-size: cover; width: 100%; height: 300px;">
        <div class="container">
          <div class="textJmb">
            <h2>Discount for all Items!</h2>
            <p>Buy 1 get 1 on May 2022, get it NOW!</p><br>
            <a class="btn btn-outline-light btn-xl" href="produk.php">Find More</a>
          </div>
        </div>
      </div>
      
      <div class="titleHike">
        <h3 class="text-center">Hiking Top Brand's</h3>
      </div>
      <div class="container-xl" id="hike">
        <div class="row">

          <div class="col-lg-4 mb-3 text-center">
            <img class="hikeImg" src="img/hike1.jpg" alt="hike1">
            <h4 style="padding-top: 1rem;">The North Face</h4>
            <p>For more than 50 years, The North Face has made activewear and outdoor sports gear that exceeds your expectations.</p>
          </div>

          <div class="col-lg-4 mb-3 text-center">
            <img class="hikeImg" src="img/hike2.jpg" alt="hike2">
            <h4 style="padding-top: 1rem;">Osprey</h4>
            <p>Osprey was founded in 1974, every single product design has passed through the hands of owner and founder Mike Pfotenhauer.</p>
          </div>

          <div class="col-lg-4 mb-3 text-center">
            <img class="hikeImg" src="img/hike3.jpg" alt="hike3">
            <h4 style="padding-top: 1rem;">Eiger</h4>
            <p>EIGER was first launched in 1989 as a product to meet the various needs of equipment and tools for the lifestyle of outdoor activists.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hiking -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center">Contact Us</h2>
        <p class="text-center">We'd love to Help!</p><br><br>
        <div class="row">
          <div class="col-md-6">
            <form action="">
              <h6>Name*</h6>
              <input type="text" name="text" required="" placeholder="John Doe" class="form-control"><br>
              <h6>Email*</h6>
              <input type="email" name="email" required="" placeholder="johndoe@gmail.com" class="form-control"><br>
              <h6>Message*</h6>
              <textarea class="form-control" rows="3" placeholder="Hey, i need your help.."></textarea><br>
              <center>
                <a id="btnabt" onclick="alert('Data has been sent')" class="btn btn-sm js-scrolltrigger mx-auto d-block" href="#"><span>Submit</span></a>
              </center>
            </form>
          </div>
          <div class="col-md-1"></div>
            <div class="col-md-5">
              <br><br><br>
              <p><i class="fas fa-map-marker"></i> &nbsp;&nbsp;114 Cihanjuang, Cimahi, West Java, Indonesia</p>
              <p><i class="fas fa-phone"></i> &nbsp;&nbsp;+62 22 300 400 500</p>
              <p><i class="fas fa-envelope"></i> &nbsp;&nbsp;admin@gomount.com</p>
              <hr>

              <div class="media">
                <h6 class="text-center mb-3">Our Social Media</h5>
                <ul class="list-unstyled text-center">
                  <li><a href="#"></a><i class="fab fa-facebook-f"></i></li> 
                  <li><a href="#"></a><i class="fab fa-instagram"></i></li>
                  <li><a href="#"></a><i class="fab fa-youtube"></i></li>
                  <li><a href="#"></a><i class="fab fa-twitter"></i></li>
                </ul>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- End Contact -->

    <!-- Footer -->
    <div class="section" style="padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-12 mb-4 mt-4">
            <h4 class="heading">Get news &amp; updates</h4>
          </div>

          <div class="col-md-12">
            <form action="" method="POST">
              <div class="row">
                <div class="col-md-4 mb-4">
                  <input type="text" class="form-control" placeholder="Your name here">
                </div>

                <div class="col-md-4 mb-4">
                  <input type="email" class="form-control" placeholder="Your email here">
                </div>

                <div class="col-md-4 mb-4">
                  <a id="btnabt" onclick="alert('U has been subscribed')" class="btn btn-sm js-scrolltrigger mx-auto d-block w-100" href="#"><span>Subscribe</span></a>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer" id="footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3 mb-5">
            <h4>About us</h4>
            <p>Since 2021, we have been your local outdoor co-op, working to help you experience the transformational power of nature.</p>
            <p><a href="#about">Click here for learn more</a></p>
          </div>

          <div class="col-md-3 mb-5">
            <h4>Contact &amp; Address</h4>
            <ul class="list-unstyled footer-link">
              <li class="d-flex">
                <p><span class="me-3">Address:</span><span>114 Cihanjuang, Cimahi, West Java, Indonesia</span></p>
              </li>
              <li class="d-flex">
                <p><span class="me-3">Telephone:</span><span>+62 22 300 400 500</span></p>
              </li>
              <li class="d-flex">
                <p><span class="me-3">Email:</span><span>admin@gomount.com</span></p>
              </li>
            </ul>
          </div>

          <div class="col-md-3 mb-5" id="siteFooter">
            <h4>Quick links</h4>
            <ul class="list-unstyled footer-link">
              <li><a href="#">Home</a></li>
              <li><a href="produk.php">Product</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-md-3" id="socmedFooter">
            <h4>Our Social Media</h4>
            <ul class="list-unstyled footer-link d-flex">
              <p>@gomount</p>
            </ul>
          </div>
        </div>

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