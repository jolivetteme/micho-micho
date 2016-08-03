<p class="login-box-msg">Use the form below to add a profile.</p>

<form id="add_users" method="post">
  <div class="form-group has-feedback">
    <input type="text" class="form-control" id="first_name" placeholder="First name">
    <span class="glyphicon glyphicon-user form-control-feedback"></span>
  </div>
  <div class="form-group has-feedback">
    <input type="text" class="form-control" id="city" placeholder="City">
    <span class="glyphicon glyphicon-user form-control-feedback"></span>
  </div>
  <div class="form-group has-feedback">
    <input type="text" class="form-control" id="state" placeholder="State">
    <span class="glyphicon glyphicon-user form-control-feedback"></span>
  </div>
  <div class="form-group has-feedback">
    <input type="email" class="form-control" id="zip" placeholder="Zip">
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
  </div>
  <div class="form-group has-feedback">
    <input type="password" class="form-control" id="picture" placeholder="Profile Picture">
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
  </div>
  <button class="btn btn-lg btn-success" type="submit" >Previous <span class="fa fa-arrow-left"></span></button>
  <button class="btn btn-lg btn-success" type="submit" >Next <span class="fa fa-arrow-right"></span></button>
</form>
<div class="row">
  <div id="result"></div>
</div>