  <div class="margintop"></div>
  <div class="jumbotron jumbotron-fluid bg-img-cart" style="color: #fff;">
    <h1 class="text-center" style="font-weight: bold; font-size: 62px; color:#eeb549;">MEJA <?php echo $this->session->userid ?></h1>
    <p class="text-center">Daftar Pesanan</p>
  </div>
  <div class="mainbackground">
    <div class="container">
      <div class="cart">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover table-condensed" id="countit">
          <thead>
            <tr>
              <th>No.</th>
              <th>Makanan</th>
              <th>Tenant</th>
              <th>Jumlah</th>
              <th>Harga</th>
              <th>Hapus</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $no = 1;
            foreach ($order as $key): ?>
            <tr>
              <td><?php echo $no.'.'?></td>
              <td><?php echo $key->nama_makanan?></td>
              <td><?php echo $key->nama_tenant?></td>
              <td><?php echo $key->jumlah?></td>
              <td id="count"><?php echo $key->harga_makanan*$key->jumlah?></td>
              <td><a href="<?php echo site_url('customer/makanan/deleteOrder/'.$key->id_pesanan);?>" class="btn btn-danger">Hapus</a></td>
            </tr>
            <?php
            $no++; 
            endforeach ?>
            <tr>
              <th colspan="4">Subtotal</th>
              <th id="total">Rp</th>
              <th></th>
            </tr>
          </tbody>
        </table>
        </div>
      <div class="centered">
        <a href="<?php echo site_url('customer/makanan/confirmOrder/'.$this->session->userid);?>" class="btn btn-pesan">Pesan</a>
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
    document.getElementById('total').innerHTML += sum;
</script>