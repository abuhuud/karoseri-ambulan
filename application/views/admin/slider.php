<div class="container">
  <button class="btn btn-sm btn-success mb-3" data-toggle="modal" data-target="#tambahslide"><i class="fas fa-plus fa-sm"></i> Tambah Slide</button>

  <table class="table table-sm table-hover table-striped">
    <tr>
      <th>No.</th>
      <th>Label</th>
      <th>Deskripsi</th>
      <th>Gambar</th>
      <th colspan="3">Aksi</th>
    </tr>

    <?php
    $no = 1;
    foreach ($slider as $slide) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td class="w-30"><?= $slide->label; ?></td>
        <td class="w-45"><?= $slide->description; ?></td>
        <td><img src="<?= base_url('uploads/slider/') . $slide->img_slide; ?>" style="width:80px"></td>
        <td>
          <div class="btn btn-warning btn-sm">
            <a href="<?= base_url('admin/slider/edit/') . $slide->id ?>">
              <i class="fa fa-edit btn-warning"></i>
            </a>
          </div>
        </td>
        <td>
          <div class="btn btn-danger btn-sm">
            <a href="<?= base_url('admin/slider/hapus/') . $slide->id ?>">
              <i class="fa fa-trash btn-danger"></i>
            </a>
          </div>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahslide" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Slide</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/slider/tambah_slider') ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="produk">Label</label>
            <input type="text" name="label" class="form-control">
          </div>
          <div class="form-group">
            <label for="produk">Deskripsi</label>
            <textarea name="description" class="form-control" rows="5"></textarea>
          </div>
          <div class="form-group">
            <label for="produk">Gambar</label>
            <input type="file" name="img_slide">
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