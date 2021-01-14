<div class="margintop"></div>
<div class="jumbotron jumbotron-fluid bg-img-tenant" style="color: #fff;">
  <h1 class="text-center" style="font-weight: bold; font-size: 62px;">DAFTAR PESANAN</h1>
</div>
<div class="mainbackground">
    <div class="container">
      <div class="cart">
        <div class="content">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-condensed center" id="countit">
              <thead>
                <tr>
                  <th>No. Meja</th>
                  <th>Pesanan</th>
                  <th>Jumlah</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($list as $key): ?>
                <tr>
                  <td><?php echo $key->id_customer?></td>
                  <td><?php echo $key->nama_makanan?></td>
                  <td><?php echo $key->jumlah?></td>
                  <td>
                    <a href="<?php echo site_url('tenant/toko/selesai/'.$key->id_pesanan);?>" class="btn btn-success">Selesai</a>
                  </td>
                </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>