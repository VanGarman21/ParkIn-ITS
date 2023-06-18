<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>ParkIn| Home Page</title>
        
        <link rel="apple-touch-icon" href="https://i.imgur.com/O92SgX5.png">
    <link rel="shortcut icon" href="https://i.imgur.com/O92SgX5.png">

        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg" style="background-color: #f0f2f5; color: #fff; text-transform: uppercase; position: fixed; top: 0; left: 0; right: 0; z-index: 9999;" id="mainNav">
            <div class="container">
                <!-- <a class="navbar-brand" href="index.php">ParkIn ITS</a> -->
                <!-- Image dengan href ke index.php -->
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/ParkIn.png" alt="" width="236" height="39" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="admin/index.php" style="color: #000;">Admin</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="users/login.php" style="color: #000;">Users</a></li>
                    <style>
                    .nav-item a:hover {
                        color: #013880;
                    }
                    </style>

                       
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead text-left" style="background-color: #f0f2f5; color: #fff;">
  <div class='me-5 ms-5 p-4 bg-white '>
    <div class='my-6 mx-5'>
    <h6 class='text-left text-muted'>Yok Kenalan Lebih Lanjut dengan</h6>
      <h4 class='text-left text-black'>Park.In ITS</h4>
    </div>
  </div>
</section>


<div class='p-4 bg-white me-5 ms-5 mt-5 flex flex-row'>
    
<div class="container">
  <div class="text">
      <h4 class='text-black'>
        Tentang Park.In
      </h4>
      <p class='text-muted '>
                Website Parkir.in adalah sebuah sistem yang dirancang untuk
                membantu mengatur dan mengelola parkiran. Tujuan utama dari
                sistem ini adalah untuk memastikan bahwa pengunjung serta
                petugas dapat dengan mudah mengelola jumlah kendaraan yang masuk
                dan keluar dari area parkir. 
                </br>
                </br>
                Pada Parkir.in, pengguna dapat
                dengan mudah keluar dari area parkir menggunakan teknologi
                pengenalan plat nomor atau tiket parkir. Data dari sistem
                manajemen parkir juga dapat dianalisis untuk membantu
                mengoptimalkan penggunaan area parkir dan mengidentifikasi
                masalah parkir yang mungkin terjadi.
        </p>
    </div>
    <div class="image">
        <img src='assets/img/About ParkIn.png' alt='logo' width='600' height='340' class='mx-3' />
        </div>
  </div>
<style>
  .container {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: start;
  }
  
  .text {
    flex: 1;
    text-align: left;
  }
  
  .image {
    flex: 1;
  }
  .items-end {
  width: 30px;
  height: 30px;
}

</style>
</div>

<div class='p-4 bg-white me-5 ms-5 mt-5 flex flex-row'>
  <div class='relative flex flex-col w-1/2 my-10 mx-5'>
    <h4 class='text-left text-black'>
      Tim Kami
    </h4>
  </div>
  <div class='container'>
        <button >    
        <a href='https://www.linkedin.com/in/christian-kevin-emor-9a2614217/'><img src='https://cdn-icons-png.flaticon.com/512/174/174857.png' alt='LinkedIn' class='items-end'></a>
      </button>
      <div class='my-2'>
        <img src='assets/img/kevin-e.png' alt='Anggota Tim 3' width='300' height='195'>
        <h4 class='text-black'>Christian Kevin Emor</h4>
        <p class='text-black'>5025211153</p>
      
    </div>
    
      <button>
        <a href='https://www.linkedin.com/in/van-garman/'><img src='https://cdn-icons-png.flaticon.com/512/174/174857.png' alt='LinkedIn' class='items-end'></a>
      </button>
      <div class='my-2'>
        <img src='assets/img/armand.png' alt='Anggota Tim 1' width='300' height='195'>
        <h4 class='text-black'>M. Armand Giovani</h4>
        <p class='text-black'>5025211054</p>
      
    </div>
   
      <button>
        <a href='https://www.linkedin.com/in/afsulthon/'><img src='https://cdn-icons-png.flaticon.com/512/174/174857.png' alt='LinkedIn' class='items-end'></a>
      </button>
      <div class='my-2'>
        <img src='assets/img/akmal.png' alt='Anggota Tim 2' width='300' height='195'>
        <h4 class='text-black'>Akmal Sulthon Fathulloh</h4>
        <p class='text-black'>5025211047</p>
      </div>
  
  </div>
</div>




        </header>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
