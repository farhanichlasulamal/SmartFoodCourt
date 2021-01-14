<div class="margintop"></div>
<div class="mainbackground">
    <div class="container">
      <div class="cart">
        <div class="content">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-condensed center" id="countit">
              <thead>
                <tr>
                  <th>Kode Pesanan</th>
                  <th>Nomor Meja</th>
                  <th>Nama Makanan</th>
                  <th>Tenant</th>
                  <th>jumlah</th>
                  <th>Harga Satuan</th>
                  <th>SubTotal</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($list as $key): ?>
                <tr>
                  <td><?php echo $key->id_pesanan?></td>
                  <td><?php echo $key->id_customer?></td>
                  <td><?php echo $key->nama_makanan?></td>
                  <td><?php echo $key->nama_tenant?></td>
                  <td><?php echo $key->jumlah?></td>
                  <td><?php echo $key->harga_makanan?></td>
                  <td><?php echo $key->jumlah*$key->harga_makanan?></td>
                  <td>
                    <?php 
                      $status = $key->status_pemesanan;
                      if ($status == 1){
                        echo 'Dalam Cart';
                      } elseif ($status == 2){
                        echo 'Proses Pembayaran';
                      } else if ($status == 3){
                        echo 'Proses Penyajian';
                      } else {
                        echo 'Pesanan Selesai';
                      }
                    ?>
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