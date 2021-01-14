<div class="margintop"></div>
<div class="mainbackground">
  <div class="container">
    <div class="half forEditForm" style="margin-bottom:20px;">
      <div class="backButton">
        <a class="btn btn-primary" href="<?php echo site_url('tenant/toko/daftarMenu/'.$this->session->tenantid);?>">Kembali</a>
      </div>
    </div>
    <div class="cart forEditForm">
      <div class="content">
        <div class="titlePanel">
          <h3>Update</h3><hr>
        </div>
      </div>
      <div class="content">
        <?php foreach ($item as $key): ?>
        <form action="<?php echo site_url('tenant/toko/doUpdate')?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="namaMenu">Nama Menu:</label>
            <input type="text" name="NamaMenu" class="form-control" value="<?php echo $key->nama_makanan?>">
          </div>
          <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="text" name="Harga" class="form-control" value="<?php echo $key->harga_makanan?>">
          </div>
          <div class="form-group">
            <label for="jenis">Jenis Menu:</label><br>
            <input type="radio" name="JenisMenu" value="makanan" <?php if($key->jenis_makanan == 'makanan'){echo 'checked';}?>> Makanan<br>
            <input type="radio" name="JenisMenu" value="minuman" <?php if($key->jenis_makanan == 'minuman'){echo 'checked';}?>> Minuman<br>
          </div>
          <div class="form-group">
            <label for="gambar">Gambar:</label>
            <input type="file" name="Gambar" class="form-control">
          </div>
            <button type="submit" class="btn btn-emas btn-width" value="Update">Update</button>
        </form>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</div>