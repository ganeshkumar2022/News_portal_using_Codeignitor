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
<div class="col-md-9 bg-light">
<?php
if(isset($a))
{
	echo $a;
}
?>
	<h4>User profile update</h4>
	<div class="row">
		<div class="col-md-6">
			
			    <form action="" method="post" autocomplete="off">
  <div class="form-group">
    <label for="pwd">Name:</label>
    <input type="text" class="form-control" value="<?=$admin_info->name?>" placeholder="Enter name" name="name" id="opwd" required>
</div>
</div>
<div class="col-md-6">
  <div class="form-group">
    <label for="pwd">Email Id:</label>
    <input type="email" class="form-control" value="<?=$admin_info->email?>" placeholder="Enter email" id="pwd" name="email" required>
  </div>
</div>
<div class="col-md-6">
<input type="submit" class="btn btn-primary" name="update_profile" value="update">
</div>
</form>
	</div>
</div>
</div>
<p><?=@$suc?></p>
<p><?=@$error?></p>
</body>
</html>
