<div class="col-md-4">
  <!-- Widget: user widget style 1 -->
  <div class="box box-widget widget-user-2">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <a href="#">
      <div class="widget-user-header bg-<?= $colors[rand(0,count($colors)-1)] ?>">
        <div class="widget-user-image">
          <img class="img-circle" src="<?= $profile['picture'] ?>" alt="User Avatar">
        </div>
        <!-- /.widget-user-image -->
        <h3 class="widget-user-username"><?= $profile['first_name']." ".$profile['last_name'] ?></h3>
        <h5 class="widget-user-desc"><?= $profile['position'] ?></h5>
      </div>
    </a>
    <div class="box-footer no-padding">
      <ul class="nav nav-stacked">
        <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
        <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>
        <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
        <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>
      </ul>
    </div>
  </div>
  <!-- /.widget-user -->
</div>
<!-- /.col -->