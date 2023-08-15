<nav class="navbar navbar-expand-md bg-dark navbar-dark" style="box-sizing:border-box;padding:0;">
  <!-- Brand -->
  <a class="navbar-brand ml-3" href="#">News portal</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse justify-content-end mr-5" id="collapsibleNavbar">
    <ul class="navbar-nav">
		<li class="nav-item dropdown mr-5">
      <a class="nav-link active" href="#" id="navbardrop" data-toggle="dropdown">
			<img src="<?=base_url('assets/images/avatar.jpg')?>" style="height:50px;" class="rounded-circle"> Admin
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?=base_url('admin/change_password')?>"><i class="fa-solid fa-gear"></i> Change password</a>
        <a class="dropdown-item" href="<?=base_url('admin/profile')?>"><i class="fa-solid fa-user"></i> Profile</a>
        <a class="dropdown-item" href="<?=base_url('admin/logout')?>"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
      </div>
    </li>
    </ul>
  </div>
</nav>

