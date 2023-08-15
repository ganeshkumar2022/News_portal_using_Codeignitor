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
	<h4>Dashboard</h4>
	<div class="row">
		<div class="col-md-3">
			<div class="card shadow-sm">
				<div class="card-body " style="background-color:white;">
			    <h4>6</h4>
			    <p>Total new posts</p>
        </div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card shadow-sm">
				<div class="card-body " style="background-color:white;">
			    <h4>3</h4>
			    <p>Total news category</p>
        </div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card shadow-sm">
				<div class="card-body " style="background-color:white;">
			    <h4>4</h4>
			    <p>Total news sub category</p>
        </div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card shadow-sm">
				<div class="card-body " style="background-color:white;">
			    <h4>6</h4>
			    <p>Total news comments</p>
        </div>
			</div>
		</div>

	</div>
</div>
</div>
</div>
</body>
</html>
