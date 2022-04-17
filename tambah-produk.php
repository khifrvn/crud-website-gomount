<?php 
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
            <h4 class="heading">Add Product</h4>
          </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Select Category</label>
                    <select name="kategori" class="form-select" required>
                        <option value="">Category Name</option>
                        <?php 
                            $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
                            while($r = mysqli_fetch_array($kategori)){
                        ?>
                        <option value="<?php echo $r['category_id'] ?>"><?php echo $r['category_name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="nama" class="form-control" placeholder="Product Name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Price</label>
                    <input type="text" name="harga" class="form-control" placeholder="Product Price" required>
                </div>
                <div class="mb-3">
                    <input type="file" name="gambar" class="form-control-file" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" name="deskripsi" placeholder="Description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <select name="status" class="form-select" required>
                        <option value="">Choose Status</option>
                        <option value="1">Ready</option>
                        <option value="0">Empty</option>
                    </select>
                </div>
                <button type="submit" name="submit" value="ubah profil" class="btn btn-success">Submit</button>
            </form>
            <?php 
                if(isset($_POST['submit'])){
                    // print_r($_FILES['gambar']);
                    // Menampung inputan dari form
                    $kategori   = $_POST['kategori'];
                    $nama       = $_POST['nama'];
                    $harga      = $_POST['harga'];
                    $deskripsi  = $_POST['deskripsi'];
                    $status     = $_POST['status'];
                    
                    // menampung data file yang diupload
                    $filename = $_FILES['gambar']['name'];
                    $tmp_name = $_FILES['gambar']['tmp_name'];

                    $type1 = explode('.', $filename);
                    $type2 = $type1[1];

                    $newname = 'produk'.time().'.'.$type2;

                    // menampung data format file yang diizinkan 
                    $tipe_diizinkan = array('jpg', 'png', 'webp', 'gif', 'jpeg');

                    // validasi format file
                    if(!in_array($type2, $tipe_diizinkan)){
                        echo '<script>alert("This format not allowed")</script>';
                    }else{
                        // proses upload file sekaligus insert ke database
                        move_uploaded_file($tmp_name, './produk/'.$newname);
                        
                        $insert = mysqli_query($conn, "INSERT INTO tb_product VALUES (
                                      null,
                                      '".$kategori."',
                                      '".$nama."',
                                      '".$harga."',
                                      '".$deskripsi."',
                                      '".$newname."',
                                      '".$status."',
                                      null
                                      )");
                          if($insert){
                            echo 'Success Save Data';
                            echo '<script>window.location="data-produk.php"</script>';
                          }else{
                            echo 'gagal'.mysqli_error($conn);
                          }
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