@extends('layout.master')

@section('title')
    <title>Iter | Login</title>
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('section')
    <main>
      <div class="form">
        <div class="form__logo">
          <svg
            width="186"
            height="79"
            viewBox="0 0 186 79"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
          >
            <path
              d="M92.85 29H104.65V64H92.85V29ZM130.28 63.05C128.58 64.0167 126.264 64.5 123.33 64.5C119.497 64.5 116.547 63.5833 114.48 61.75C112.414 59.8833 111.38 57.1 111.38 53.4V46.4H107.63V38.15H111.38V30.5H122.68V38.15H128.28V46.4H122.68V53.3C122.68 54.1333 122.897 54.7833 123.33 55.25C123.764 55.7167 124.33 55.95 125.03 55.95C125.997 55.95 126.847 55.7 127.58 55.2L130.28 63.05ZM161.646 50.3C161.646 50.4667 161.596 51.35 161.496 52.95H142.496C142.896 53.9833 143.563 54.7833 144.496 55.35C145.429 55.8833 146.596 56.15 147.996 56.15C149.196 56.15 150.196 56 150.996 55.7C151.829 55.4 152.729 54.8833 153.696 54.15L159.596 60.1C156.929 63.0333 152.946 64.5 147.646 64.5C144.346 64.5 141.446 63.9 138.946 62.7C136.446 61.4667 134.513 59.7667 133.146 57.6C131.779 55.4333 131.096 53 131.096 50.3C131.096 47.5667 131.763 45.1333 133.096 43C134.463 40.8333 136.313 39.15 138.646 37.95C141.013 36.75 143.663 36.15 146.596 36.15C149.363 36.15 151.879 36.7 154.146 37.8C156.446 38.9 158.263 40.5167 159.596 42.65C160.963 44.7833 161.646 47.3333 161.646 50.3ZM146.696 43.85C145.529 43.85 144.563 44.1667 143.796 44.8C143.029 45.4333 142.529 46.3333 142.296 47.5H151.096C150.863 46.3667 150.363 45.4833 149.596 44.85C148.829 44.1833 147.863 43.85 146.696 43.85ZM176.112 39.6C178.112 37.3 181.062 36.15 184.962 36.15V46.15C184.062 46.0167 183.229 45.95 182.462 45.95C178.595 45.95 176.662 47.9167 176.662 51.85V64H165.362V36.65H176.112V39.6Z"
              fill="black"
            />
            <rect width="78" height="79" fill="url(#pattern0)" />
            <defs>
              <pattern
                id="pattern0"
                patternContentUnits="objectBoundingBox"
                width="1"
                height="1"
              >
                <use
                  xlink:href="#image0_15_138"
                  transform="translate(-0.0196298) scale(0.00203378)"
                />
              </pattern>
              <image
                id="image0_15_138"
                width="511"
                height="498"
                xlink:href="data:image/png;base64,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"
              />
            </defs>
          </svg>
        </div>

        <div class="form__input">
          <h1>
            Welcome Back! Please <span id="blue" href="#">Login</span><br />To
            Your Account.
          </h1>
          <form action="/login" method="post">
            @csrf
            <div class="form__username">
              <label for="username" class="form__input__label">Username</label>
              <input type="text" id="username" class="form__input__field" name="username"/>
            </div>
            <div class="form__password">
              <label for="password" class="form__input__label">Password</label>
              <input type="password" id="password" class="form__input__field" name="password"/>
            </div>

            <div class="form__remember">
              <input type="checkbox" id="form__remember__input" />
              <label for="remember" id="remember" class="form__input__label"
                >Remember me</label
              >
            </div>
            <input type="submit" id="submit" value="Login" />
          </form>
        </div>
    
        <div class="form__register">
          <h2>
            Don't have an account? <a id="blue" href="#">Register here!</a>
          </h2>
        </div>
      </div>
    
      <div class="image">
        <img src="./assets/decorative picture.jpg" alt="" id="image--desktop" />
      </div>
      <img
        src="./assets/decorative picture (mobile).jpg"
        alt=""
        id="image--mobile"
      />
    </main>
@endsection