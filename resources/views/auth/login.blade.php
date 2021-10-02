<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>E-Kadai | Inventory System </title>

  <!-- Bootstrap -->
  <link href="{{ asset('style/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ asset('style/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{ asset('style/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
  <!-- Animate.css -->
  <link href="{{ asset('style/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="{{ asset('style/build/css/custom.min.css')}}" rel="stylesheet">
</head>
<body class="login">
  <div>
    <p>{{ session('status')}}</p>
    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form  action="{{ url('login')}}" method="POST">
            @csrf
            <h1>Login Form</h1>
            <div>
              <input type="text" class="form-control" name="username" placeholder="Username"/>
            </div>
            <div>
              <input type="password" class="form-control" name="password" placeholder="Password"/>
            </div>
            <div>
              <button class="btn btn-dark float-sm-right" type="submit">Log in</button>

            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> E-Kadai Inventory System</h1>

              </div>
            </div>
          </form>
        </section>
      </div>


    </div>
  </div>
</body>

</html>