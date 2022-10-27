@extends('layouts.app')

@section('content')
<div class="container-fluid p-md-2 p-0">
  <div class="container p-md-3 p-0">
    <div class="row justify-content-center pt-lg-4">
      <div class="col-xl-12 col-lg-12 col-md-9">
        <div class="card o-hidden border-2 shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-4 bg-login-right px-0"></div>
              {{-- <div class="col-lg-6 d-none d-lg-block img-login">
              </div> --}}
              <div class="col-lg-4 px-lg-1 px-sm-3 px-3">
                <div class="py-5 bg-login">
                  <h4 class="fw-bold mb-4 text-primary text-center">General Affair</h4>
                  {{-- <h1 class="h5 mb-4 fw-normal text-center">Login</h1> --}}
                  <form class="user" action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                      <input type="email" class="px-3 form-control-user form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" autofocus required  autocomplete="email" value="{{ old('email') }}">
                      <label class="px-3" for="email">{{ __('Email Address') }}</label>
                      @error ('email')
                      <div class="invalid-feedback" role="alert">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="px-3 form-control-user form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required  >
                      <i class="fa fa-eye me-3 login-eye" id="togglePassword"></i> 
                      <label class="px-3" for="password">{{ __('Password') }}</label>
                      @error('password')

                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mb-3" type="submit"> {{ __('Login') }}</button>
                  </form>
                  <hr>
                    <!-- {{-- forgot password --}}
                    {{-- @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif --}} -->
                  <div class="text-center mt-4">
                    <a href="/register" class="small text-center mt-4">Not Registered? Register now </a>
                  </div>
                </div>                           
              </div> 
              <div class="col-lg-4 bg-login-left px-0"></div>
            </div>
          </div>
        </div>
        <!-- foot -->
        <footer class="sticky-footer text-white p-0">
          <div class="container my-auto">
            <div class="copyright text-center pt-3">
              <span>Copyright &copy; 2022 . General Affair</span>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
</div>
<script type="">
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('fa-eye-slash');
    });
</script>
@endsection

                        <!-- {{-- remember checkbox --}}
                        {{-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            </div> --}} -->





