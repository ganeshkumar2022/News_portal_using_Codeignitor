<div class="container-fluid">
	<div class="row">
	<div class="col-md-3">
	<ul class="nav flex-column ml-n3 bg-white" style="height:90vh;box-shadow:0px 5px 8px 5px #888888;">
	<li class="nav-item">
    <a class="nav-link disabled text-primary small" href="#"><span class="blockquote-footer" style="display:inline;" class="text-primary"></span>Menus</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="dashboard"><i class="fa-solid fa-gauge"></i> Dashboard</a>
  </li>
  <li class="nav-item category">
    <a class="nav-link text-dark" href="#"><i class="fa-solid fa-suitcase"></i> Add category <i class="fa-solid mmmm fa-chevron-down float-right mt-2"></i></a>
  </li>
	<div style="display:none;" class="cat">
	<li class="nav-item">
    <a class="nav-link text-dark" href="<?=base_url('admin/category_add')?>"><i class="fa-solid fa-calendar-plus"></i> Add</a>
  </li>
	<li class="nav-item">
    <a class="nav-link text-dark" href="<?=base_url('admin/manage_category')?>"><i class="fa-solid fa-puzzle-piece"></i> Manage category</a>
  </li>
   </div>
  <li class="nav-item subcategory">
    <a class="nav-link text-dark" href="#"><i class="fa-solid fa-book-open"></i> Sub category <i class="fa-solid fa-chevron-down float-right mt-2"></i></a>
  </li>
	<div style="display:none;" class="scat">
	<li class="nav-item">
    <a class="nav-link text-dark" href="<?=base_url('admin/add_sub_category')?>"><i class="fa-solid fa-circle-plus"></i> Add</a>
  </li>
	<li class="nav-item">
    <a class="nav-link text-dark" href="<?=base_url('admin/manage_sub_category')?>"><i class="fa-solid fa-map"></i> Manage category</a>
  </li>
   </div>
	 <li class="nav-item news">
    <a class="nav-link text-dark" href="#"><i class="fa-solid fa-newspaper"></i> Add News <i class="fa-solid fa-chevron-down float-right mt-2"></i></a>
  </li>
	<div style="display:none;" class="mnews">
	<li class="nav-item">
    <a class="nav-link text-dark" href="<?=base_url('admin/add_news')?>"><i class="fa-solid fa-circle-plus"></i> Add</a>
  </li>
	<li class="nav-item">
    <a class="nav-link text-dark" href="<?=base_url('admin/manage_news')?>"><i class="fa-solid fa-map"></i> Manage news</a>
  </li>
   </div>
<!--<li class="nav-item">
    <a class="nav-link disabled text-primary small" href="#"><span class="blockquote-footer" style="display:inline;" class="text-primary"></span>Menu level</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="#"><i class="fa-solid fa-comment-dots"></i> Comment User</a>
  </li>
-->
</ul>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(".category").click(function(){
			$(".cat").toggle("slow");
		});
		$(".subcategory").click(function(){
			$(".scat").toggle("slow");
		});
		$(".news").click(function(){
			$(".mnews").toggle("slow");
		});
	});
</script>
