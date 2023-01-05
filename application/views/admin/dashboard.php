<div class="container-fluid">
  <table class="table table-sm table-hover table-striped">
    <tr>
      <th>No.</th>
      <th>Produk</th>
      <th>Kategori</th>
      <th>Harga</th>
      <th>Gambar</th>
    </tr>

    <?php
    $no = 1;
    foreach ($products as $product) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $product->name; ?></td>
        <td><?= $product->category; ?></td>
        <td><?= number_format($product->price, 0, "", "."); ?></td>
        <td><img src="<?= base_url('uploads/') . $product->image; ?>" style="width:100px"></td>
      </tr>
    <?php endforeach; ?>
  </table>
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