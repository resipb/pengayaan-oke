<?php
 require 'functions.php';
 $user = mysqli_fetch_assoc($result);
 $about = mysqli_fetch_assoc($hasil);
 
 $projects = data("SELECT * FROM project");
?>
<?php
 if(isset($_POST["submit"])){
   if (tambah($_POST) > 0){
     echo "
      <script>
      alert('data sudah terkirim')
      </script>
     ";
   }
   else{
     echo "gagal terkirim";
   }     
 }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PORTOFOLIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- CSS Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <!-- CSS AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-info">
      <div class="container">
        <a class="navbar-brand" href="#">Ressi Pbrynty</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./admin/index.php"><i class="bi bi-gear-fill"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- Jumbotron-->
    <div class="jumbotron text-center">
      <img src="<?=$user["foto"];?>" width="200" class="rounded-circle img-thumbnail" data-aos="zoom-in" data-aos-duration="1000"/>
      <h1 class="display-5" style="font-family: 'Courier New', Courier, monospace" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"><?= $user["nama"];?></h1>
      <p class="lead" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"><?= $user["jabatan"];?> | <?= $user["perusahaan"];?></p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,192L60,176C120,160,240,128,360,128C480,128,600,160,720,176C840,192,960,192,1080,170.7C1200,149,1320,107,1380,85.3L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </div>
    <!-- Akhir Jumbotron-->
    <!-- About -->
    <section id="about">
      <div class="row text-center" data-aos="fade-down"  data-aos-duration="2000">
        <h2 z>About</h2>
      </div>
      <div class="row justify-content-center fs-5">
        <div class="col-sm-4" data-aos="fade-down-right"  data-aos-duration="2500">
          <p><?= $about ["column1"];?></p>
        </div>
        <div class="col-sm-4" data-aos="fade-down-left"  data-aos-duration="2500">
          <p><?= $about ["column2"];?></p>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#a2d9ff"
          fill-opacity="1"
          d="M0,192L60,176C120,160,240,128,360,128C480,128,600,160,720,176C840,192,960,192,1080,170.7C1200,149,1320,107,1380,85.3L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About-->
    <!-- Project -->
    <section id="project">
      <div class="row text-center mb-3" data-aos="fade-down"  data-aos-duration="2000">
        <h2>Project Me</h2>
      </div>
      <div class="row justify-content-evenly" data-aos="zoom-out-up" data-aos-duration="2000">
      <?php foreach ($projects as $pro) : ?>
        <div class="col-sm-2 mb-2">
          <div class="card">
            <img src="foto/<?= $pro["foto"];?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h2 class="display-6 text-center"><?= $pro["nama_p"];?></h2>
              <p class="card-text text-center"><?= $pro["keterangan"];?></p>
            </div>
          </div>
        </div>
        <?php endforeach ?>
      </div>
    
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,192L60,176C120,160,240,128,360,128C480,128,600,160,720,176C840,192,960,192,1080,170.7C1200,149,1320,107,1380,85.3L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Project -->
    <!-- Contact -->
    <section id="contact">
      <div class="container pt-5">
        <div class="row text-center" data-aos="fade-down"  data-aos-duration="2000">
          <h2>Contact</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-5">
          <form action="" method="POST">
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" />
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama_k"id="nama" />
            </div>
            <div class="mb-3">
              <label for="pesan">Pesan</label>
              <textarea class="form-control" placeholder="Leave a comment here" name="pesan" id="floatingTextarea2" style="height: 100px"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary mt-4">Kirim</button>
          </form>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0dcaf0"
          fill-opacity="1"
          d="M0,192L60,176C120,160,240,128,360,128C480,128,600,160,720,176C840,192,960,192,1080,170.7C1200,149,1320,107,1380,85.3L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <footer class="text-center bg-info text-white pb-5" data-aos="fade-down" data-aos-duration="2000">
      <p>Created by <i class="bi bi-instagram"> </i><a href="https://instagram.com/ecii_____?utm_medium=copy_link">Resi Pbrynty</a></p>
      <p><i class="bi bi-facebook"></i> <i class="bi bi-whatsapp"></i> <i class="bi bi-instagram"></i> <i class="bi bi-messenger"></i> <i class="bi bi-telegram"></i></p>
    </footer>
    <!-- Akhir Contact-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init({once: true,});
      </script>
  </body>
</html>
