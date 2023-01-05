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
          <div class="carousel-caption">
            <h1 class="text-warning"><?= $slide['label'] ?></h1>
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