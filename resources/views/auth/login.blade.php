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
    <style>
      body {
        height: 100vh;
        margin: 0;
        display: grid;
        place-items: center;
        background: #fffcdb;
        color: #645e74;
        font-family: "Poppins", sans-serif;
      }

      :root {
        --color-primary: #e5212a;
        --color-border: #d0d0d6;
      }

      * {
        box-sizing: border-box;
      }

      .card {
        display: flex;
        flex-direction: column;
        background: #ffffff;
        border-radius: 22px;
        padding: 20px;
        width: clamp(300px, 85vw, 500px);
        box-shadow: 0 50px 100px rgb(0 0 0 / 8%);
      }

      .hero,
      form {
        flex: 1 1 50%;
      }

      h2,
      h3,
      p {
        font-weight: 500;
        margin: 0;
      }

      .hero {
        background: linear-gradient(135deg, #e5212a 0%, #c41a21 100%);
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 16px;
        overflow: hidden;
        font-family: "Space Grotesk", sans-serif;
        min-height: 200px;
        display: flex;
        align-items: center;
        margin-bottom: 20px;
      }

      .hero-inner {
        display: flex;
        flex-direction: column;
        justify-content: center;
        border-radius: inherit;
        background: linear-gradient(rgb(229 33 42 / 0%), rgb(229 33 42 / 70%));
        padding: 40px 66px;
        height: 100%;
        min-height: 170px;
      }

      .hero h2 {
        font-size: 22px;
        color: #ffffff;
        line-height: 1.25;
      }

      .hero h3 {
        margin-top: 12px;
        font-size: 18px;
        color: #c7c2d6;
        display: none;
      }

      form {
        padding: 30px 18px;
        display: flex;
        flex-direction: column;
        gap: 12px;
      }

      form :is(h2, h3) {
        text-align: center;
      }

      form > h2 {
        letter-spacing: 0.5px;
        font-weight: 600;
        color: var(--color-primary);
      }

      form > h3 {
        font-size: 14px;
        margin-bottom: 12px;
      }

      button,
      input {
        height: 44px;
        border-radius: 6px;
        border: 1px solid var(--color-border);
        background: transparent;
        color: inherit;
        font-family: inherit;
        font-size: 16px;
        width: 100%;
        outline-color: var(--color-primary);
      }

      input {
        padding: 0 2.5vw;
      }

      input::placeholder {
        color: #9c99a4;
      }

      .socials {
        display: flex;
        gap: 8px;
      }

      .extra-text {
        display: none;
      }

      .social-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        background: #f2f3f6;
        border-color: transparent;
        font-size: 15px;
        cursor: pointer;
        transition: all 0.3s ease;
      }

      .social-btn:hover {
        background: #e8dfff;
        border-color: var(--color-primary);
      }

      .social-btn > img {
        height: 24px;
      }

      .social-btn:first-child > img {
        height: 20px;
      }

      .social-btn > p {
        color: #7e7c83;
      }

      form > button[type="submit"] {
        color: #ffffff;
        background: var(--color-primary);
        font-size: 17px;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 8px;
      }

      form > button[type="submit"]:hover {
        background: #c41a21;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(229, 33, 42, 0.4);
      }

      .or {
        position: relative;
        text-align: center;
        height: 24px;
      }

      .or::before {
        content: "";
        position: absolute;
        z-index: 0;
        top: 50%;
        left: 0;
        width: 100%;
        translate: 0 -50%;
        height: 1px;
        background: var(--color-border);
        opacity: 0.6;
      }

      .or::after {
        content: "Or";
        position: absolute;
        top: 50%;
        left: 50%;
        translate: -50% -50%;
        z-index: 1;
        background: #ffffff;
        font-size: 12px;
        padding: 0 12px;
      }

      .error-message {
        background: #fee;
        border: 1px solid #fcc;
        border-radius: 6px;
        padding: 12px;
        color: #c33;
        font-size: 14px;
        margin-bottom: 12px;
      }

      @media (width >= 485px) {
        .card {
          width: clamp(300px, 90vw, 740px);
        }

        form {
          padding-inline: 50px;
        }

        .hero-inner {
          padding-right: clamp(10px, 20vw, 60px);
        }

        .socials {
          flex-direction: column;
        }

        .extra-text {
          display: inline;
        }
      }

      @media (width >= 640px) {
        .card {
          flex-direction: row;
          padding: 8px 0 8px 8px;
        }

        .hero {
          margin-bottom: 0;
          margin-right: 20px;
        }

        form :is(h2, h3) {
          text-align: left;
        }

        .hero-inner {
          justify-content: center;
          align-items: flex-start;
          padding: 0 36px;
        }

        .hero h3 {
          display: block;
        }

        form {
          padding: 30px;
        }
      }
    </style>
  </head>
  <body>
    <div class="card">
      <div class="hero">
        <div class="hero-inner">
          <h2>Kursus Ryan Komputer</h2>
          <h3>Master Your Digital Skills</h3>
        </div>
      </div>
      <form action="{{ route('login') }}" method="POST">
        @csrf
        <h2>Login</h2>
        <h3>Login to your account</h3>
        <div class="socials">
          <button type="button" class="social-btn" onclick="alert('Google login - to be implemented')">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
              <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
              <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
              <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
            </svg>
            <p><span class="extra-text">Login with</span> Google</p>
          </button>
          <button type="button" class="social-btn" onclick="alert('Facebook login - to be implemented')">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="#1877F2">
              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
            <p><span class="extra-text">Login with</span> Facebook</p>
          </button>
        </div>
        <span class="or"></span>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus />
        @error('email')
          <div class="error-message">{{ $message }}</div>
        @enderror
        <input type="password" name="password" placeholder="Password" required />
        @error('password')
          <div class="error-message">{{ $message }}</div>
        @enderror
        @if($errors->any() && !$errors->has('email') && !$errors->has('password'))
          <div class="error-message">
            <ul style="list-style: disc; margin-left: 20px;">
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <button type="submit">Login</button>
        <div style="text-align: center; margin-top: 16px;">
          <span style="font-size: 14px; color: #645e74;">Belum punya akun? <a href="{{ route('register') }}" style="color: var(--color-primary); text-decoration: none; font-weight: 600;">Register</a></span>
        </div>
      </form>
    </div>
  </body>
</html>
