<div class="container">
  <button class="btn btn-sm btn-success mb-3" data-toggle="modal" data-target="#tambahbrand"><i class="fas fa-plus fa-sm"></i> Tambah Brand</button>

  <table class="table table-sm table-hover table-striped text-center">
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>Gambar</th>
      <th colspan="3">Aksi</th>
    </tr>

    <?php
    $no = 1;
    foreach ($brands as $brand) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td class="w-50"><?= $brand->name; ?></td>
        <td class="w-100"><img src="<?= base_url('assets/img/brands/') . $brand->img_brand; ?>" style="width:80px"></td>
        <td>
          <div class="btn btn-warning btn-sm">
            <a href="<?= base_url('admin/brands/edit/') . $brand->id ?>">
              <i class="fa fa-edit btn-warning"></i>
            </a>
          </div>
        </td>
        <td>
          <div class="btn btn-danger btn-sm">
            <a href="<?= base_url('admin/brands/hapus/') . $brand->id ?>">
              <i class="fa fa-trash btn-danger"></i>
            </a>
          </div>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahbrand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Brands</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/brands/tambah_brand') ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="produk">Nama Brand</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="produk">Gambar</label>
            <input type="file" name="img_brand">
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