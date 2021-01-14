<div class="margintop"></div>
<div class="mainbackground" style="padding: 10px 0px;">
  <div class="container">
    <div class="half">
      <div class="backButton">
        <a class="btn btn-primary" href="<?php echo site_url('admin/kasir');?>">Kembali</a>
      </div>
    </div>
    <div class="half">
      <div class='leftpanel'>
        <div class="cart">
          <h5>Detail Pesanan</h5>
          <div class="content">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover table-condensed center" id="countit">
                <thead>
                  <tr>
                    <th>Kode Pesanan</th>
                    <th>Nama Makanan</th>
                    <th>Tenant</th>
                    <th>Harga Satuan</th>
                    <th>Jumlah Pesanan</th>
                    <th>SubTotal</th>
                    <th>Hapus</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($order as $key): ?>
                  <tr>
                    <td><?php echo $key->id_pesanan ?></td>
                    <td><?php echo $key->nama_makanan ?></td>
                    <td><?php echo $key->nama_tenant ?></td>
                    <td><?php echo $key->harga_makanan ?></td>
                    <td><?php echo $key->jumlah ?></td>
                    <td id="count"><?php echo $key->harga_makanan*$key->jumlah ?></td>
                    <td><div class="centered">
                      <a href="<?php echo site_url('admin/kasir/deleteOrderById/'.$key->id_pesanan);?>" class="btn btn-danger">Hapus</a>
                    </div>
                    </td>
                  </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class='rightpanel'>
        <div class="cart">
          <h5>Tagihan</h5>
            <form action="<?php echo site_url('admin/kasir/bayar/'.$this->session->adminid.'/'.$userid)?>" method="post">
              <div class="form-group">
                <label for="total">Total:</label>
                <input type="text" name="Total" class="form-control" id="total" value="0" readonly
              </div>
              <div class="form-group">
                <label for="bayar">Bayar:</label>
                <input type="text" name="Bayar" class="form-control" id="bayar">
              </div>
                <button type="submit" class="btn btn-emas btn-width" id="bayarButton">Bayar</button>
              <div class="form-group">
                <label for="kembali">Kembali:</label>
                <input type="text" name="Kembali" class="form-control" id="kembali" value="<?php echo $kembalian;?>" readonly>
              </div>
            </form>
        </div>
      </div>  
    </div>
  </div>
</div>

<script>
  var tds = document.getElementById('countit').getElementsByTagName('td');
  var sum = 0;
  for(var i = 0; i < tds.length; i++) {
      if(tds[i].id == 'count') {
          sum += parseInt(tds[i].innerHTML);
      }
  }
  document.getElementById('total').value = sum;
</script>