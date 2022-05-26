<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
     .gradient-custom {
/* fallback for old browsers */
/* background: #000000; */

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-radial-gradient(circle, rgba(0,0,0,1) 35%, rgb(31, 31, 31) 88%);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
/* background: radial-gradient(circle, rgba(0,0,0,1)45%, rgb(34, 34, 34)100%, rgb(71, 71, 71) 100%); */
background: radial-gradient(circle, rgba(0,0,0,1) 35%, rgb(31, 31, 31) 88%);
}
</style>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-10 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 0.5rem;">
                <div class="card-body p-5 text-center">
   

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                    <p class="text-white-50 mb-5">Please enter your credentials!</p>
                            {{-- <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label ">{{ __('Name') }}</label> --}}

                                <div class="form-outline form-white mb-4">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Type your Name">
                                    <label class="form-label" for="typeEmailX">Name</label>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            {{-- </div> --}}

                            {{-- <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label ">{{ __('E-Mail Address') }}</label> --}}

                                <div class="form-outline form-white mb-4">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Type your Email">
                                    <label class="form-label" for="typeEmailX">Email</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            {{-- </div> --}}

                            {{-- <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label ">{{ __('Password') }}</label> --}}

                                <div class="form-outline form-white mb-4">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your password">
                                    <label class="form-label" for="typeEmailX">Password</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            {{-- </div> --}}

                            {{-- <div class="form-group row">
                                <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('Confirm Password') }}</label> --}}

                                <div class="form-outline form-white mb-4">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                    <label class="form-label" for="typeEmailX">Confirm Password</label>
                                </div>
                            {{-- </div> --}}

                            <div class="form-group row mb-0">
                                <div class="col-md-4 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button> 
                                    <br>
                                    <br>
                                    <br>
                                      
                            </div>
                            <p class="col-md-12 ">Already have an accout? <a href="{{ route('admin.login')}}">Log in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
    
