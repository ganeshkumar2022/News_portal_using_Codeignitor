<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home page</title>
	<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav class="navbar navbar-expand-md bg-primary navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">News Portal</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" href="<?=base_url('home')?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="<?=base_url('admin')?>">Admin Login</a>
      </li>
    </ul>
  </div>
</nav>
<!-- news datas start -->
<div class="container">
<div class="row my-5">
<div class="col-md-8" id="search_news">
<?php
$i=1;
$news=array_reverse($news);
foreach($news as $news)
{
	if($i==4)
	{
		break;
	}
	?>
	<img src="<?=base_url('uploads/'.$news->myimage)?>" class="img-fluid" style="width:100%;height:400px;">
	<p class="small"><?=$news->nreading_time?></p>
	<h3><?=$news->title?></h3>
	<p><?php echo substr($news->description,0,300)."..."; ?><br>
	<a href="<?=base_url('home/select_news/'.$news->nid)?>"><u>Read more</u></a></p>
	
	<?php
	$i++;
}
?>
<!-- news datas end -->

</div>

<div class="col-md-4">
<form method="post" action="<?=base_url('home/search/')?>">
<div class="card">
	<div class="card-header">Search</div>
	<div class="card-body">

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search" name="search">
  <div class="input-group-append">
    <button class="btn btn-success" name="new" type="submit">Go</button>
  </div>
</div>
</div>
</div>
</form>


<div class="card my-4">
	<div class="card-header">Categories</div>
	<div class="card-body">
<?php
foreach($category as $c)
{
	?>
	<a href="<?=base_url('home/select_cat?cid='.$c->cid)?>"><u><?=$c->category_name?></u></a><br>
	<?php
}
?>
</div>
</div>


<div class="card">
<div class="card-header">Recent news</div>
<div class="card-body">
<ol>

<?php
$i=1;
foreach($get_three as $three)
{
	if($i==5)
	{
		break;
	}
	?>
	<li class="my-2"><a href="<?=base_url('home/select_news/'.$three->nid)?>"><u><?=$three->title?></u></a></li>
	<?php
	$i++;
}
?>
</ol>
</div>
</div>

</div>
</div>
</div>


<script src="<?=base_url('assets/js/1.js')?>"></script>
</body>
</html>
