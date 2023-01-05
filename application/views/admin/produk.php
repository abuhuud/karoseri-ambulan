<div class="container">
  <button class="btn btn-sm btn-success mb-3" data-toggle="modal" data-target="#tambahproduk"><i class="fas fa-plus fa-sm"></i> Tambah Produk</button>

  <table class="table table-sm table-hover table-striped table-responsive">
    <tr>
      <th>No.</th>
      <th>Produk</th>
      <th>Kategori</th>
      <th>Harga</th>
      <th>Deskripsi</th>
      <th>Gambar</th>
      <th colspan="3">Aksi</th>
    </tr>

    <?php
    $no = 1;
    foreach ($products as $product) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $product->name; ?></td>
        <td><?= $product->category; ?></td>
        <td><?= number_format($product->price, 0, "", "."); ?></td>
        <td class="text-truncate" style="width:20%;"> <?= $product->description; ?></td>
        <td><img src="<?= base_url('uploads/') . $product->image; ?>" style="width:100px"></td>
        <td>
          <div class="btn btn-warning btn-sm">
            <a href="<?= base_url('admin/produk/edit/') . $product->id ?>">
              <i class="fa fa-edit btn-warning"></i>
            </a>
          </div>
        </td>
        <td>
          <div class="btn btn-danger btn-sm">
            <a href="<?= base_url('admin/produk/hapus/') . $product->id ?>">
              <i class="fa fa-trash btn-danger"></i>
            </a>
          </div>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahproduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/produk/tambah_produk') ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="produk">Nama Ambulance</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="produk">Kategori</label>
            <input type="text" name="category" class="form-control">
          </div>
          <div class="form-group">
            <label for="produk">Price</label>
            <input type="number" name="price" class="form-control">
          </div>
          <div class="form-group">
            <label for="produk">Deskripsi</label>
            <textarea name="description" rows="5" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="produk">Gambar</label>
            <input type="file" name="image">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  // <![CDATA[
  $(function() {
    $(".text-truncate").each(function(i) {
      len = $(this).text().length;
      if (len > 50) {
        $(this).text($(this).text().substr(0, 40) + '...');
      }
    });
  });
  // ]]>
</script>