<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= $user->picture ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?= $user->name ?></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">Users</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Users</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>admin/users/">View Users</a></li>
          <li><a href="<?= base_url() ?>admin/users/create/">Add User</a></li>
          <li><a href="#">Update User</a></li>
          <li><a href="#">Remove User</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Products</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="#">Add Products</a></li>
          <li><a href="#">Update Products</a></li>
          <li><a href="#">Remove Products</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Projects</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="#">Add Projects</a></li>
          <li><a href="#">Update Projects</a></li>
          <li><a href="#">Remove Projects</a></li>
        </ul>
      </li>
      <li class="header">Users</li>
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Messages</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="#">Compose Message</a></li>
          <li><a href="#">Read Messages</a></li>
          <li><a href="#">Send Messages</a></li>
        </ul>
      </li>
      
      
    </ul>

    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>