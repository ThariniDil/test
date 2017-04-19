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

<div id="container" class="container" >

<!--******************** START SESSION SETFLASH MESSAGES *****************************-->
	   <?php if($this->session->flashdata('message')){?>
		  <div class="alert alert-success">      
		    <?php echo $this->session->flashdata('message')?>
		  </div>
		<?php } ?>
<!--************************* END SESSION SETFLASH MESSAGES   ************************-->


		<br>

		<div align="center"> 
			<a href="<?php echo site_url('Welcome/add_data'); ?>">Click to add new Record</a>
		</div>
		<br>


<!--*************************  START  DISPLAY ALL THE RECODEDS *************************-->
        <table class="table table-bordered table-hover table-striped" style="overflow-x:scroll;" >
            <thead>
            <tr>
                <th>Company ID</th>
                <th>Title</th>
           		<th>Contact Person</th>
                <th>Designation</th>
                <th>Tel</th>
                <th>Mobile</th>
                <th>Fax</th>
				<th>Email</th>
            </tr>
            </thead>

	        <tbody>
	          <?php
                if(isset($view_data) && is_array($view_data) && count($view_data)): $i=1;
                foreach ($view_data as $key => $data) { 
	            ?>
	            <tr <?php if($i%2==0){echo 'class="even"';}else{echo'class="odd"';}?>>
	                <td><?php echo $i; ?></td>
	                <td><?php echo $data['cid']; ?></td>            
	                <td><?php echo $data['title']; ?></td>
	                <td><?php echo $data['cperson']; ?></td>
	                <td><?php echo $data['des']; ?></td>
					<td><?php echo $data['tel']; ?></td>
					<td><?php echo $data['mobile']; ?></td>
					<td><?php echo $data['fax']; ?></td>
					<td><?php echo $data['email']; ?></td>
	                <td><a href="<?php echo site_url('Welcome/edit_data/'. $data['id'].''); ?>">Edit</a></td>            
	                <td><a href="<?php echo site_url('Welcome/delete_data/'. $data['id'].''); ?>">Delete</a></td>
	            </tr>
                <?php
                    $i++;
                      }
                	else:
                ?>
            	<tr>
                    <td colspan="7" align="center" >No Records Found..</td>
                </tr>
                <?php
	            	endif;
	            ?>

	        </tbody>                                
        </table>
<!--*********************  END  DISPLAY ALL THE RECODEDS ******************************-->
</div>

</body>
</html>