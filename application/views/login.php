<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartFoodCourt</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css')?>">
</head>
<body>
<div class="bg-img">
	<div class="container">
		<div class="title">SmartFoodCourt</div>
		<ul class="nav nav-tabs" role="tablist">
		  <li class="nav-item">
		    <a class="nav-link" href="#User" role="tab" data-toggle="tab">User</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#Admin" role="tab" data-toggle="tab">Admin</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#Tenant" role="tab" data-toggle="tab">Tenant</a>
		  </li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
		  <div role="tabpanel" class="tab-pane fade in" id="User">
		  	<form action="<?php echo site_url('login/checkUser')?>" method="post">
			    <div class="form-group">
				    <label for="email">User ID:</label>
				    <input type="text" name="UserId" placeholder="userid" class="form-control">
				</div>
				<div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" name="Password" placeholder="password" class="form-control">
				</div>
				  <button type="submit" class="btn btn-primary" value="Login">Masuk</button>
			</form>
		  </div>
		  <div role="tabpanel" class="tab-pane fade" id="Admin">
		  	<form action="<?php echo site_url('login/checkAdmin')?>" method="post">
				<div class="form-group">
				    <label for="email">Admin ID:</label>
				    <input type="text" name="AdminId" placeholder="adminid" class="form-control">
				</div>
				<div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" name="Password" placeholder="password" class="form-control">
				</div>
				  <button type="submit" class="btn btn-primary" value="Login">Masuk</button>
			</form>
		  </div>
		  <div role="tabpanel" class="tab-pane fade" id="Tenant">
		  	<form action="<?php echo site_url('login/checkTenant')?>" method="post">
				<div class="form-group">
				    <label for="email">Tenant ID:</label>
				    <input type="text" name="TenantId" placeholder="tenantid" class="form-control">
				</div>
				<div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" name="Password" placeholder="password" class="form-control">
				</div>
				  <button type="submit" class="btn btn-primary" value="Login">Masuk</button>
			</form>
		  </div>
		</div>
	</div>
</div>

    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
</body>

</html>