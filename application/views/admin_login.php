<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?=base_url('assets/css/astyle.css')?>">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<div class="card mt-5">
				<div class="card-body">
					<a href="<?=base_url('home')?>"><span class="small"><i class="fa-solid fa-circle-chevron-left"></i> Back to home</span><h5 class="text-center font-weight-normal text-muted"><u>News Portal</u></h5></a>
					<h4 class="text-primary text-center font-weight-normal">Sign in to your account</h4>
					<p class="text-danger text-center"><?php
						if(isset($lerror))
						{
							echo $lerror;
						}
					?></p>
					<form action="<?=base_url('admin/login_verify')?>" method="post" autocomplete="off">
					<div class="form-group">
						<label for="email">Email address:</label>
						<input type="email" class="form-control" placeholder="Enter email" name="email" id="email" required>
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" placeholder="Enter password" name="password" id="pwd" required>
					</div>
					<input type="checkbox" class="show_password"> Show password<br>
					<button type="submit" class="btn btn-primary px-3 mt-1">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$(".show_password").click(function(){
			if($(this).prop("checked"))
			{
				$("#pwd").attr("type","text");
			}
			else
			{
				$("#pwd").attr("type","password");
			}
		});
	});
</script>
</body>
</html>
