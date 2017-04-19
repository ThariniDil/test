<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	</style>
</head>
<body>

<div id="container" class="container">

<div class="row">
 <div class="col-md-8 col-md-offset-2">
		<h2 class="text-center">Edit data in Customer Contacts </h2>
		<br><br>
	<?php
      if(isset($view_data) && is_array($view_data) && count($view_data)): $i=1;
      foreach ($edit_data as $key => $data) { 
    ?>
	<form method="post" action="<?php echo site_url('Welcome/update_data/'.$data['id'].''); ?>" name="data_register">
		<label for="ID">Enter Company ID</label>
		<input type="text" class="form-control" name="cid" value="<?php echo $data['cid']; ?>" required >
		<br>
		<label for="Title">Enter Title</label>
		<input type="text" class="form-control" name="title" value="<?php echo $data['title']; ?>" required>
		<br>
		<label for="Contact person">Enter Contact person</label>
		<input type="text" class="form-control" name="cperson" value="<?php echo $data['cperson']; ?>" required>
		<br>
		<label for="Designation">Enter Designation</label>
		<input type="text" class="form-control" name="des" value="<?php echo $data['des']; ?>" required>
		<br>
		<label for="Tel">Enter Tel</label>
		<input type="text" class="form-control" name="tel" value="<?php echo $data['tel']; ?>" required>
		<br>
		<label for="Mobile">Enter Mobile</label>
		<input type="text" class="form-control" name="mobile" value="<?php echo $data['mobile']; ?>" required>
		<br>
		<label for="Fax">Enter Fax</label>
		<input type="text" class="form-control" name="fax" value="<?php echo $data['fax']; ?>" required>
		<br>
		<label for="Email">Enter Email</label>
		<input type="text" class="form-control" name="email" value="<?php echo $data['email']; ?>" required>
		<br>
		
		
		<button type="submit" class="btn btn-primary pull-right">Submit</button>
		<br><br>
	</form>
	 <?php
        }endif;
     ?>
	<br><br>
 </div>
</div>
  
</div>

</body>
</html>