@extends("LoginDefultView.Master")
@section("content")

<div class="container">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-5 form_uper_div">

<form action="logcheck" method="post">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Login Id</label>
    <input type="email" name="login_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <input type="submit" class="btn btn-info" value="Login Now">
</form>
</div>
</div>
</div>

@endsection