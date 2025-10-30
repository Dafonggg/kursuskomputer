<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Kursus Ryan Komputer</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
  </head>
  <body class="auth-body">
    @include('layouts.header')
    
    <div class="auth-wrapper">
      <div class="auth-card">
      <div class="auth-hero">
        <div class="auth-hero-inner">
          <h2>Kursus Ryan Komputer</h2>
          <h3>Master Your Digital Skills</h3>
        </div>
      </div>
      <form class="auth-form" action="{{ route('login') }}" method="POST">
        @csrf
        <h2>Login</h2>
        <h3>Login to your account</h3>
        <div class="auth-socials">
          <button type="button" class="auth-social-btn" onclick="alert('Google login - to be implemented')">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
              <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
              <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
              <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
            </svg>
            <p><span class="auth-extra-text">Login with</span> Google</p>
          </button>
          <button type="button" class="auth-social-btn" onclick="alert('Facebook login - to be implemented')">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="#1877F2">
              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
            <p><span class="auth-extra-text">Login with</span> Facebook</p>
          </button>
        </div>
        <span class="auth-or"></span>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus />
        @error('email')
          <div class="auth-error-message">{{ $message }}</div>
        @enderror
        <input type="password" name="password" placeholder="Password" required />
        @error('password')
          <div class="auth-error-message">{{ $message }}</div>
        @enderror
        @if($errors->any() && !$errors->has('email') && !$errors->has('password'))
          <div class="auth-error-message">
            <ul style="list-style: disc; margin-left: 20px;">
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <button type="submit">Login</button>
        <div class="auth-link-container">
          <span class="auth-link-text">Belum punya akun? <a href="{{ route('register') }}" class="auth-link">Register</a></span>
        </div>
      </form>
      </div>
    </div>

    @include('layouts.footer')
  </body>
</html>
