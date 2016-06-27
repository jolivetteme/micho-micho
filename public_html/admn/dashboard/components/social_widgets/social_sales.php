<div class="col-md-4" data-toggle="modal" data-target="#myModal-<?= $profile['id'] ?>">
  <!-- Widget: user widget style 1 -->
  <div class="box box-widget widget-user">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <a href="#">
      <div class="widget-user-header bg-<?= $colors[rand(0,count($colors)-1)] ?>-active">
        <h3 class="widget-user-username"><?= $profile['first_name']." ".$profile['last_name'] ?></h3>
        <h5 class="widget-user-desc"><?= $profile['position']->name ?></h5>
      </div>
      <div class="widget-user-image">
        <img class="img-circle" src="<?= $profile['picture'] ?>" alt="User Avatar">
      </div>
    </a>
    <div class="box-footer">
      <div class="row">
        <div class="col-sm-4 border-right">
          <div class="description-block">
            <h5 class="description-header">3,200</h5>
            <span class="description-text">SALES</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-4 border-right">
          <div class="description-block">
            <h5 class="description-header">13,000</h5>
            <span class="description-text">FOLLOWERS</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-4">
          <div class="description-block">
            <h5 class="description-header">35</h5>
            <span class="description-text">PRODUCTS</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
  </div>
  <!-- /.widget-user -->
</div>
<!-- /.col -->
<!-- Modal -->
<div class="modal fade modal-success" id="myModal-<?= $profile['id'] ?>" tabindex="-<?= $profile['id'] ?>" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?= $profile['first_name']." ".$profile['last_name'] ?></h4>
      </div>
      <div class="modal-body">
        <div class="modal-body"> 
        <div class="row">
          <div class="col-md-4 col-sm-12">
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
              <div class="col-md-12" style="padding-top:30px"><?= $profile['position']->description ?></div>
            </div>
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