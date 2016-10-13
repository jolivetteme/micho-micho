<p class="login-box-msg">Use the form below to add a profile.</p>

<form id="add_users" method="post">
  <div class="form-group has-feedback">
    <input type="text" class="form-control" id="username" placeholder="Username">
    <span class="glyphicon glyphicon-user form-control-feedback"></span>
  </div>
  <div class="form-group has-feedback">
    <input type="password" class="form-control" id="email" placeholder="Email">
    <span class="glyphicon glyphicon-user form-control-feedback"></span>
  </div>
  <div class="form-group has-feedback">
    <input type="password" class="form-control" id="password" placeholder="Password">
    <span class="glyphicon glyphicon-user form-control-feedback"></span>
  </div>
  <div class="form-group has-feedback">
    <input type="email" class="form-control" id="confirm-password" placeholder="Confirm Password">
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
  </div>
  <button class="btn btn-lg btn-success" type="submit" >Previous <span class="fa fa-arrow-left"></span></button>
  <button class="btn btn-lg btn-success" id="next-button" type="submit" >Next <span class="fa fa-arrow-right"></span></button>
</form>
<div class="row">
  <div id="result"></div>
</div>
<script>
  $('button#next-button').click(function(){
    alert("Hello, World!");
  });
</script>