<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<style>
	body
	{
		height:100vh;
		overflow-y:hidden;
	}
	input[type=text]:focus
	{
		background-color:khaki;
	}
</style>
</head>
<body>
	<?php
include('aheader.php');
	?>
<!-- left bar start -->
<?php
include('leftbar.php');
?>
<!-- left bar end -->
<div class="col-md-9 mt-3 bg-light">
<?php
if(isset($a))
{
	echo $a;
}
?>
	<h4>Add Sub Category</h4>
	<div class="row">
		<div class="col-md-6">
			
<form action="<?=base_url('admin/add_sub')?>" method="post" autocomplete="off">
<div class="form-group">
  <label for="sel1">Category name:</label>
  <select class="form-control" id="sel1" name="category_id" required>
	<option value="">---Choose category---</option>
<?php
foreach($category as $row)
{
?>
    <option value="<?=$row->cid?>"><?=$row->category_name?></option>
<?php
}
?>
  </select>
</div>
<div class="form-group">
    <label for="pwd">Sub Category name:</label>
    <input type="text" class="form-control" placeholder="Enter sub category name" name="sub_category_name" id="opwd" required>
</div>
</div>
<div class="col-md-6"></div>
<div class="col-md-6">
<input type="submit" class="btn btn-primary" name="add_sub_category" value="Add">
</div>
<div class="col-md-6"></div>
<p class="text-success font-weight-bold mt-2"><?=$this->session->flashdata('success')?></p>
<p class="text-error font-weight-bold mt-2"><?=$this->session->flashdata('error')?></p>
</form>
	</div>
</div>
</div>
</body>
</html>
