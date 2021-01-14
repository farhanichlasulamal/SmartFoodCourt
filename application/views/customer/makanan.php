<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
    <div class="margintop"></div>
    <div class="jumbotron jumbotron-fluid bg-img-user" style="color: #fff;">
        <h1 class="text-center" style="font-weight: bold; font-size: 62px;">MEJA <?php echo $this->session->userid ?></h1>
        <p class="text-center">Silakan memilih menu yang tersedia</p>
    </div>
    <div class="team-boxed">
        <div class="container">
            <div class="row food">
                <div class="leftcolumn">
                    <div class="col item">
                        <div class="box">
                            <hr>
                            <a class="" href="<?php echo site_url('customer/makanan/menuAll/'.$jenis);?>">All</a>
                            <hr>
                            <?php foreach ($tenant as $toko): ?>
                            <a class="" href="<?php echo site_url('customer/makanan/menuByTenant/'.$jenis.'/'.$toko->id_tenant);?>"><?php echo $toko->nama_tenant ?></a>
                            <hr>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
                <div class="rightcolumn">
                    <?php foreach ($menu as $key): ?>
                    <div class="col-sm-6 col-md-6 col-lg-4 item">
                        <div class="box"><img class="rounded-circle" src="<?php echo base_url('assets/img/'.$key->gambar_makanan)?>">
                            <h5 class="name"><?php echo $key->nama_makanan ?></h5>
                            <p class="title"><?php echo $key->nama_tenant ?></p>
                            <p class="description"><?php echo "Rp".$key->harga_makanan ?></p>
                            <form class='quantityForm' id='form<?php echo $key->id_menu ?>' method='POST' action='<?php echo site_url('customer/makanan/addToCart');?>'>
                                <input type='image' src='<?php echo base_url('assets/img/minus.svg')?>' value='-' class='qtyminus' field='qty<?php echo $key->id_menu ?>' />
                                <input type='text' name='qty<?php echo $key->id_menu ?>' value='0' class='form-control qtyarea' />
                                <input type='image' src='<?php echo base_url('assets/img/plus.svg')?>' value='+' class='qtyplus' field='qty<?php echo $key->id_menu ?>' />
                                <input type="text" style="display: none" name="FoodId" value="<?php echo $key->id_menu ?>">
                                <input type="text" style="display: none" name="UserId" value="<?php echo $this->session->userid ?>">
                            </form>
                            <button type="submit" class="btn btn-primary btn-block" form="form<?php echo $key->id_menu ?>" value="Submit">Add</button>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>