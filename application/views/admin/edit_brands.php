<div class="container">
  <h3><i class="fas fa-edit"></i>Edit Brands</h3>

  <?php foreach ($brands as $brand) : ?>
    <form action="<?= base_url() . 'admin/brands/update' ?>" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label>Nama</label>
        <input type="hidden" name="id" class="form-control" value="<?= $brand->id ?>">
        <input type="text" name="name" class="form-control" value="<?= $brand->name ?>">
      </div>
      <div class="form-group">
        <label for="stok">Gambar</label>
        <div class="col-sm-1">
          <img class="card-img-top" src="<?= base_url('assets/img/brands/') . $brand->img_brand ?>">
        </div>
        <div class=" modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>

    </form>
  <?php endforeach; ?>

</div>