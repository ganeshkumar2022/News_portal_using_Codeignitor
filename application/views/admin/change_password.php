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
	<h4>Update password</h4>
	<div class="row">
		<div class="col-md-6">
			<div class="card shadow-sm">
				<div class="card-body " style="background-color:white;">
			    <form action="" method="post" autocomplete="off">
  <div class="form-group">
    <label for="pwd">Old Password:</label>
    <input type="password" class="form-control" placeholder="Enter old password" name="old_password" id="opwd" required>
  </div>
  <div class="form-group">
    <label for="pwd">New Password:</label>
    <input type="password" class="form-control" placeholder="Enter new password" id="pwd" name="password" required>
  </div>
  <div class="form-group">
    <label for="pwd">Confirm Password:</label>
    <input type="password" class="form-control" placeholder="Enter confirm password" id="cpwd" name="confirm_password" required>
  </div>
  <input type="submit" class="btn btn-primary" name="change_password" value="Change">
</form>
<p><?=$suc?></p>
<p><?=$error?></p>
<p class="text-danger" id="err"></p>
                </div>
			</div>
		</div>

	</div>
</div>
</div>
</div>
</body>
</html>
