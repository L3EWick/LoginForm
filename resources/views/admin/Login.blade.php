<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    .gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgb(27, 27, 27), rgb(27, 27, 27));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(27, 27, 27), rgba(27, 27, 27))
}
</style>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 0.5rem;">
                <div class="card-body p-5 text-center">
      
            <div class="mb-md-5 mt-md-4 pb-5">
                 <form method="post" action="{{ route('admin.login.do')}}">
                  @csrf
                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                    <p class="text-white-50 mb-5">Please enter your login and password!</p>
                
                    <div class="form-outline form-white mb-4">
                      <input type="email" id="email" name="email" class="form-control form-control-lg" required="true" placeholder="Email"/>
                      <label class="form-label" for="typeEmailX">Email</label>
                    </div>
                  
                    <div class="form-outline form-white mb-4">
                      <input type="password" id="password" name="password" class="form-control form-control-lg" required="true" placeholder="Password"/>
                      <label class="form-label" for="typePasswordX">Password</label>
                    </div>
      
                    
      
                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                 
                 <br>
                 <br>
                 <br>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            </div>
                 </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>