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
	textarea
	{
		resize:none;
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
	<h4>Add News</h4>
	<div class="row">			
<div class="col-md-6">
	<form action="<?=base_url('admin/add_n')?>" method="post" autocomplete="off" enctype="multipart/form-data">
<div class="form-group">
    <label for="email">News title:</label>
    <input type="text" class="form-control" placeholder="Enter news title" name="title" id="email" required>
  </div>
</div>
<div class="col-md-6">
<div class="form-group">
  <label for="sel1">Category name:</label>
  <select class="form-control" id="cat_id" name="category_id" onchange="myfun(this.value)" required>
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
</div>
<div class="col-md-6">
<div class="form-group">
    <label for="pwd">Sub Category name:</label>
	<select id="su_id" name="sub_category_id" class="form-control" required>
</select>
    
</div>
</div>
<div class="col-md-6">
	<label>Choose image</label><br>
	<div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile" name="myimage" required>
    <label class="custom-file-label" for="customFile">Choose file</label>
  </div>
  <script>
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
</div>
<div class="col-md-12">
<div class="form-group">
  <label for="comment">Description:</label>
  <textarea class="form-control" rows="5" id="comment" name="description" required></textarea>
</div>
</div>
<div class="col-md-6">
<input type="submit" class="btn btn-primary" name="add_news" value="Add">
</div>
<div class="col-md-6"></div>
<p class="text-success font-weight-bold mt-2"><?=$this->session->flashdata('success')?></p>
<p class="text-error font-weight-bold mt-2"><?=$this->session->flashdata('error')?></p>
</form>
	</div>
</div>
</div>
<script type="text/javascript">
$("#cat_id").change(function(){
var a=$(this).val();
if(a.length!=0)
{
$.ajax(
{
type:"get",
url:"<?=base_url('admin/get_select?id=')?>",
data:{id:a},
success:function(res){
$("#su_id").html(res);
}
});
}
});
/*function myfun(id)
{
	var xhttp=new XMLHttpRequest();
	xhttp.onload=function(){
		document.getElementById("su_id").innerHTML=this.responseText;
	}
	xhttp.open("GET","<?=base_url('admin/get_select?id=')?>"+id);
	xhttp.send();
}*/
</script>
</body>
</html>
