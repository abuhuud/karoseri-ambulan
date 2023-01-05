<div class="container">
  <h3><i class="fas fa-edit"></i>Edit Produk</h3>

  <?php foreach ($products as $product) : ?>
    <form action="<?= base_url() . 'admin/produk/update' ?>" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label>Produk</label>
        <input type="hidden" name="id" class="form-control" value="<?= $product->id ?>">
        <input type="text" name="name" class="form-control" value="<?= $product->name ?>">
      </div>
      <div class="form-group">
        <label for="kategori">Kategori</label>
        <input type="text" name="category" class="form-control" value="<?= $product->category ?>">
      </div>
      <div class="form-group">
        <label for="harga">Harga</label>
        <input type="number" name="price" class="form-control" value="<?= $product->price ?>">
      </div>
      <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control"><?= $product->description ?></textarea>
      </div>
      <div class="form-group">
        <label for="stok">Gambar</label>
        <div class="col-sm-1">
          <img class="card-img-top" src="<?= base_url() . 'uploads/' . $product->image ?>">
        </div>
        <div class=" modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>

    </form>
  <?php endforeach; ?>

</div>