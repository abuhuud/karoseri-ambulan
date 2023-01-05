<!-- Brands -->
<section class="brands shadow">
  <div class="container mt-3 pb-4 ">
    <h2 class="text-danger font-weight-bold">Brand Partners</h2>
    <section class="customer-logos slider">
      <?php foreach ($brands as $brand) : ?>
        <div class="slide"><img src="<?= base_url('assets/img/brands/') . $brand['img_brand'] ?>"></div>
      <?php endforeach; ?>
    </section>
  </div>
</section>
<!-- End of Brands -->

<!-- Products -->
<section class="products bg-light mt-3">
  <div class="container-fluid  mb-5 pb-5">
    <h2 class="text-danger font-weight-bold">Produk Ambulance</h2>
    <div class="row pt-4 justify-content-center">

      <?php foreach ($products as $product) : ?>
        <div class="col-lg-4 col-md-6 col-sm-auto card-deck">
          <div class="card p-3 mb-4 shadow w-100">
            <img src="<?= base_url('uploads/') . $product['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title text-danger font-weight-bold"><?= $product['name']; ?></h5>
              <h6 class="card-text font-weight-bold">Rp. <?= number_format($product['price'], 0, "", "."); ?>,-</h6>
            </div>
            <a href="#" class="btn btn-primary">Detail Ambulance</a>
          </div>
        </div>
      <?php endforeach; ?>


    </div>
  </div>
</section>
<!-- End of Products -->