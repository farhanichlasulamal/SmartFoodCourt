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
    <style type="text/css">
    	.navigation-clean-button {
    		background:#333;
  			color:#fff;
    	}
    	.navigation-clean-button .navbar-brand {
		  color:#eeb549;
		}
        .navigation-clean-button .navbar-toggler {
          border-color:#fff;
        }
        .navigation-clean-button.navbar-light .navbar-nav a.active, .navigation-clean-button.navbar-light .navbar-nav a.active:focus, .navigation-clean-button.navbar-light .navbar-nav a.active:hover {
          color:#fff;
        }
        .navigation-clean-button.navbar-light .navbar-nav .nav-link {
          color:#fff;
        }

        .navigation-clean-button.navbar-light .navbar-nav .nav-link:focus, .navigation-clean-button.navbar-light .navbar-nav .nav-link:hover {
          color:#fff !important;
        }
    </style>
</head>
<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="#">SmartFoodCourt (Admin)</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link"><?php echo $this->session->name ?> (Admin)</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="<?php echo site_url('admin/kasir/pesanan');?>">Pesanan</a>
                        </li>
                        <li>
                            <a class="nav-link" href="<?php echo site_url('admin/kasir/log');?>">Log</a>
                        </li>
                    </ul>
                    <span><a class="nav-link" style="color: inherit;" href="<?php echo site_url('login/logout');?>">Logout</a></span>
                </div>
            </div>
        </nav>
    </div>