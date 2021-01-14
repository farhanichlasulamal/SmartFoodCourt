<div class="margintop"></div>
<div class="jumbotron jumbotron-fluid bg-img-tenant" style="color: #fff;">
  <h1 class="text-center" style="font-weight: bold; font-size: 62px;">MENU</h1>
</div>
<div class="mainbackground">
    <div class="container">
      <div class="centered gap">
        <a class="btn btn-primary btn-superwidth" href="<?php echo site_url('tenant/toko/halamanInsert');?>">Insert</a>
      </div>
      <div class="cart gap">
        <div class="titlePanel">
          <h3>Makanan</h3><hr>
        </div>
        <div class="content">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-condensed center" id="countit">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Makanan</th>
                  <th>Harga</th>
                  <th>Gambar</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $num = 1;
                foreach ($makanan as $key): ?>
                  <tr>
                    <td><?php echo $num;?></td>
                    <td><?php echo $key->nama_makanan?></td>
                    <td><?php echo $key->harga_makanan?></td>
                    <td><img src="<?php echo site_url('assets/img/'.$key->gambar_makanan)?>" style="width:50px; height:50px;"></td>
                    <td>
                      <a href="<?php echo site_url('tenant/toko/halamanUpdate/'.$this->session->tenantid.'/'.$key->id_menu)?>" class="btn btn-success btn-double">Update</a>
                      <a href="<?php echo site_url('tenant/toko/hapusMenu/'.$key->id_menu)?>" class="btn btn-danger btn-double">Delete</a>
                    </td>
                  </tr>
                <?php 
                $num++;
                endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="cart gap">
        <div class="titlePanel">
          <h3>Minuman</h3><hr>
        </div>
        <div class="content">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-condensed center" id="countit">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Minuman</th>
                  <th>Harga</th>
                  <th>Gambar</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $num = 1;
                foreach ($minuman as $key): ?>
                  <tr>
                    <td><?php echo $num;?></td>
                    <td><?php echo $key->nama_makanan?></td>
                    <td><?php echo $key->harga_makanan?></td>
                    <td><img src="<?php echo site_url('assets/img/'.$key->gambar_makanan)?>" style="width:50px; height:50px;"></td>
                    <td>
                      <a href="<?php echo site_url('tenant/toko/halamanUpdate/'.$this->session->tenantid.'/'.$key->id_menu)?>" class="btn btn-success btn-double">Update</a>
                      <a href="<?php echo site_url('tenant/toko/hapusMenu/'.$key->id_menu)?>" class="btn btn-danger btn-double">Delete</a>
                    </td>
                  </tr>
                <?php 
                $num++;
                endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>