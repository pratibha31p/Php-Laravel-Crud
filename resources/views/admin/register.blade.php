<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register </title>

    <!-- Bootstrap -->
    <link href="{{asset('admin_theme/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('admin_theme/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('admin_theme/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('admin_theme/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('admin_theme/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              @if ($errors->any())
              <div class="alert alert-danger">
                  @foreach ($errors->all() as $error )
                  <li>{{ $error }}</li>
                      
                  @endforeach
              </div>
                  
              @endif
            <form action="{{ route('admin.makeregister') }}" method="POST">
                @csrf
              <h1>Register Form</h1>
              <div>
                <input type="text" class="form-control" name="name" placeholder="Full Name" required="" />
              </div>
             
              <div>
                <input type="text" class="form-control" name="email" placeholder="email" required="" />
              </div>
              <div>
                <input type="text" class="form-control" name="mobile" placeholder="mobile" required="" />
              </div>
             
                <div>
                <input type="date" class="form-control" name="dob" placeholder="DOB" required="" />
              </div>
              <br>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div>
                <input type="submit" name="submit">
                
              </div>

             
            </form>
          </section>
        </div>

       
      </div>
    </div>
  </body>
</html>
