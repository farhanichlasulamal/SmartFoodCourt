<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartFoodCourt</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Team-Boxed.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/header.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/footer.css')?>">
</head>
<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="#">SmartFoodCourt</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo site_url('customer/makanan/menuAll/makanan');?>">Makanan</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo site_url('customer/makanan/menuAll/minuman');?>">Minuman</a></li>
                    </ul>
                    <span class="navbar-text actions"> <a class="btn btn-light action-button" role="button" href="<?php echo site_url('customer/makanan/cart/'.$this->session->userid);?>"><img src="<?php echo base_url('assets/img/cart.png')?>" style="max-height: 20px;"></a></span>
                    <span><a class="nav-link" style="color: inherit;" href="<?php echo site_url('login/logout');?>">Logout</a></span>
                </div>
            </div>
        </nav>
    </div>