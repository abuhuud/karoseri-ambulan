<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>karoseri-ambulan.id</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/css/all.css') ?>">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <!-- Own CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <!-- JS -->
  <script src="<?= base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top shadow">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?= base_url('assets/img/Karoseriambulan-logo-2.png') ?>" alt="karoseri ambulan">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kontak</a>
          </li>
        </ul>
        <a href="" class="nav-link">Login</a>
        <a href="" class="btn nav-link btn-primary text-white">Minta Penawaran</a>


      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Hero Section -->
  <div id="hero" class="container-fluid px-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <?php foreach ($slider as $key => $slide) : ?>
          <div class="carousel-item <?= $key == 0 ? 'active' : '' ?>">
            <img src="<?= base_url('uploads/slider/') . $slide['img_slide'] ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption mx-auto">
              <h1 class="text-warning"><?= $slide['label'] ?></h5>
                <p><?= $slide['description'] ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!-- End of Hero Section -->

  <!-- Brands -->
  <section class="brands shadow">
    <div class="container mb-3 pb-4 ">
      <h2 class="text-danger font-weight-bold">Brand Partners</h2>
      <section class="customer-logos slider mt-3">
        <?php foreach ($brands as $brand) : ?>
          <div class="slide"><img src="<?= $brand['img_brand'] ?>"></div>
        <?php endforeach; ?>
      </section>
    </div>
  </section>
  <!-- End of Brands -->
  <section class="products bg-light mt-3">
    <div class="container-fluid  mb-5 pb-5">
      <h2 class="text-danger font-weight-bold">Produk Ambulance</h2>
      <div class="row pt-4 justify-content-center mx-2">

        <?php foreach ($products as $product) : ?>
          <div class="col card-deck">
            <div class="card p-3 mb-4 shadow" style="width: 16rem;">
              <img src="<?= base_url('uploads/') . $product['image'] ?>" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title text-danger font-weight-bold"><?= $product['name']; ?></h5>
                <h6 class="card-text font-weight-bold">Rp. <?= number_format($product['price'], 0, "", "."); ?>,-</h6>
              </div>
              <a href="#" class="btn btn-primary">Detail Product</a>
            </div>
          </div>
        <?php endforeach; ?>


      </div>
    </div>
  </section>
  <!-- Products -->

  <!-- End of Products -->

  <!-- Footer -->
  <footer class="border-top p-5">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-1">
          <a href="<?= base_url() ?>">
            <img src="<?= base_url('assets/img/Karoseriambulan-logo-2.png') ?>">
          </a>
        </div>
      </div>
      <div class="row mt-3 justify-content-between">
        <div class="col-5">
          <p>All Rights Reserved by karoseri-ambulan.id Copyright 2022.</p>
        </div>
        <div class="col-6">
          <nav class="nav justify-content-end text-uppercase">
            <a class="nav-link active" href="#">Jobs</a>
            <a class="nav-link" href="#">Developer</a>
            <a class="nav-link" href="#">Terms</a>
            <a class="nav-link pr-0" href="#">Privacy Policy</a>
          </nav>
        </div>
      </div>
    </div>
  </footer>




  <!-- JQuery, Popper JS, Boostrap JS -->

  <script>
    $(document).ready(function() {
      $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 4
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 3
          }
        }]
      });
    });
  </script>



  <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>

  <script src="<?= base_url('assets/js/all.js') ?>"></script>

</body>

</html>