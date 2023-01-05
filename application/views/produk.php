<div class="container-fluid">
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