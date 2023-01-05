<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top shadow text-center">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?= base_url('assets/img/Karoseriambulan-logo-2.png') ?>" alt="karoseri ambulan">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>">Beranda</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('produk') ?>">Produk</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="<?= base_url('tentang-kami') ?>">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('kontak') ?>">Kontak</a> -->
          </li>
        </ul>
        <a href="<?= base_url('auth/login') ?>" class="btn nav-link" target="_blank">Login
        </a>
        <a href="https://web.whatsapp.com/send?phone=6285770080452&text=Saya ingin info harga dan spesifikasi terbaru tentang pembuatan Ambulance%0ahttps://karoseri-ambulan.id/" class="btn nav-link btn-primary text-white" target="_blank">Minta Penawaran
        </a>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->