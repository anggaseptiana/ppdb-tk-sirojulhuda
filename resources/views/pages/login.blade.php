{{-- @extends('layouts.main-dashboard')

@section('content')

    <h1 class="fs-2 text-center mb-4">Login Admin</h1>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            @if ($errors->any())
            <div class="alert alert-danger mb-3" role="alert">
                <strong>Login gagal!!</strong> Pastikan email dan password benar.
            </div>
            @endif
            @if (session('failed'))
                {!! session('failed') !!}
            @endif
            <form action="/admin/login" method="post">
            @csrf
                <div class="mb-3 form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="mb-3 form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-daftar w-100">Login</button>
                </div>
            </form>
        </div>
    </div>

@endsection --}}

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="{{ '/assets/dist/css/bootstrap.min.css' }}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ '/assets/css/signin.css' }}" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
    @if ($errors->any())
    <div class="alert alert-danger mb-3" role="alert">
        <strong>Login gagal!!</strong> Pastikan email dan password benar.
    </div>
    @endif
    @if (session('failed'))
        {!! session('failed') !!}
    @endif
  <form action="/admin/login" method="post">
    @csrf
    <img class="mb-4" src="{{ '/assets/images/logo.png' }}" alt="" width="70" height="80">
    <h1 class="h3 mb-3 fw-normal">Silakan log in</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Masukkan Email">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Masukkan Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Log In</button>
    <p class="mt-5 mb-3 text-muted">TK Sirojul Huda &copy; 2023</p>
  </form>
</main>


    
  </body>
</html>
