<div class="col-md-4" data-toggle="modal" data-target="#myModal-<?= $profile['id'] ?>">
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
        <h5 class="widget-user-desc"><?= $profile['position']->name ?></h5>
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
<!-- Modal -->
<div class="modal fade modal-primary" id="myModal-<?= $profile['id'] ?>" tabindex="-<?= $profile['id'] ?>" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?= $profile['first_name']." ".$profile['last_name'] ?> - <span class="label label-info"><?= $profile['position']->name ?></span></h4>
      </div>
      <div class="modal-body"> 
        <div class="row">
          <div class="col-md-4">
            <div class="widget-user-image">
              <img src="<?= $profile['picture'] ?>" width="150px" class="img-circle" alt="<?= $profile['first_name'] ?>&amp; Profile Picture">
            </div>
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-2">City: </div>
              <div class="col-md-8"><?= $profile['city'] ?></div>
            </div>
            <div class="row">
              <div class="col-md-2">State:</div>
              <div class="col-md-8"><?= $profile['state'] ?></div>
            </div>
            <div class="row">
              <div class="col-md-2">Zip:</div>
              <div class="col-md-8"><?= $profile['zip'] ?></div>
            </div>
            <div class="row">
              <div class="col-md-12"><?= $profile['position']->description ?></div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>