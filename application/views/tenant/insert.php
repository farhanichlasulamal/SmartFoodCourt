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
          <h3>Insert</h3><hr>
        </div>
      </div>
      <div class="content">
        <form action="<?php echo site_url('tenant/toko/doInsert')?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="namaMenu">Nama Menu:</label>
            <input type="text" name="NamaMenu" class="form-control">
          </div>
          <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="text" name="Harga" class="form-control">
          </div>
          <div class="form-group">
            <label for="jenis">Jenis Menu:</label><br>
            <input type="radio" name="JenisMenu" value="makanan" checked> Makanan<br>
            <input type="radio" name="JenisMenu" value="minuman"> Minuman<br>
          </div>
          <div class="form-group">
            <label for="gambar">Gambar:</label>
            <input type="file" name="Gambar" class="form-control">
          </div>
            <button type="submit" class="btn btn-emas btn-width" value="Insert">Insert</button>
        </form>
      </div>
    </div>
  </div>
</div>