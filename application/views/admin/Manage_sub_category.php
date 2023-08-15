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
	<h4>Manage Sub Category</h4>
<div class="row">
<div class="col-md-12">
	<table class="table table-striped table-bordered">
		<tr class="bg-primary text-white">
			<td>S.No</td>
			<td>Category name</td>
			<td>Sub Category name</td>
			<td>Manage</td>
		</tr>
		<?php
		$i=1;
		foreach($category as $category)
		{
		?>
		<tr>
			<td><?=$i?></td>
			<td><?=$category->category_name?></td>
			<td><?=$category->sub_category_name?></td>
			<td><a href="<?=base_url('admin/delete_sub_category?id='.$category->id)?>">Delete</a></td>
		</tr>
		<?php
		$i++;
		}
		?>
	</table>
</div>
</div>
<p><?=@$suc?></p>
<p><?=@$error?></p>
</body>
</html>
