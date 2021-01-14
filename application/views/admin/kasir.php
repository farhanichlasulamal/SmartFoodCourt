<div class="margintop"></div>
<div class="jumbotron jumbotron-fluid bg-img-admin" style="color: #fff;">
  <div class="borderjumbotron" style="max-width: 600px; margin:auto; ">  
    <h1 class="text-center" style="font-weight: bold; font-size: 62px; color:#eeb549;">DAFTAR PESANAN</h1>
  </div>
</div>
<div class="mainbackground">
    <div class="container">
      <div class="cart">
        <div class="content">
          <table class="table table-striped table-bordered table-hover table-condensed center" id="countit">
            <thead>
              <tr>
                <th>No. Meja</th>
                <th>Bayar</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($list as $key): ?>
              <tr>
                <td><?php echo $key->id_customer?></td>
                <td>
                  <div class="centered">
                    <a href="<?php echo site_url('admin/kasir/paymentDetail/'.$this->session->adminid.'/'.$key->id_customer.'/0');?>" class="btn btn-emas btn-width">Bayar</a>
                  </div>
                </td>
                <td>
                  <div class="centered">
                    <a href="<?php echo site_url('admin/kasir/deleteOrder/'.$key->id_customer);?>" class="btn btn-danger btn-width">Hapus</a>
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