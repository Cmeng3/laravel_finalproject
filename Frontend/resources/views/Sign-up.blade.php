<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/signup.css">
  <title>Sign Up</title>
</head>
<body>
<div class="div">
  <div class="div-2">
    <img
      loading="lazy"
      srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/fa61a5e2c85d0394fae743b85348bed44cfc72228afc633b6e0e99e1d0916910?apiKey=13e5d974267742ca9c25ec9223504ce7&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/fa61a5e2c85d0394fae743b85348bed44cfc72228afc633b6e0e99e1d0916910?apiKey=13e5d974267742ca9c25ec9223504ce7&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/fa61a5e2c85d0394fae743b85348bed44cfc72228afc633b6e0e99e1d0916910?apiKey=13e5d974267742ca9c25ec9223504ce7&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/fa61a5e2c85d0394fae743b85348bed44cfc72228afc633b6e0e99e1d0916910?apiKey=13e5d974267742ca9c25ec9223504ce7&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/fa61a5e2c85d0394fae743b85348bed44cfc72228afc633b6e0e99e1d0916910?apiKey=13e5d974267742ca9c25ec9223504ce7&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/fa61a5e2c85d0394fae743b85348bed44cfc72228afc633b6e0e99e1d0916910?apiKey=13e5d974267742ca9c25ec9223504ce7&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/fa61a5e2c85d0394fae743b85348bed44cfc72228afc633b6e0e99e1d0916910?apiKey=13e5d974267742ca9c25ec9223504ce7&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/fa61a5e2c85d0394fae743b85348bed44cfc72228afc633b6e0e99e1d0916910?apiKey=13e5d974267742ca9c25ec9223504ce7&"
      class="img"
    />
    <img
      loading="lazy"
      src="https://cdn.builder.io/api/v1/image/assets/TEMP/da89e48c3006c7bc08a22ac710114c4cddc11b2af89ff534d7456697dc070f93?apiKey=13e5d974267742ca9c25ec9223504ce7&"
      class="img-2"
    />
    <div class="div-3">
      <div class="div-4">Get started.</div>
      <div class="div-5">
        <span
          style="
            font-family: DM Sans, sans-serif;
            font-weight: 400;
            line-height: 23px;
            color: rgba(124, 124, 141, 1);
          "
        >
          Already have an account?
        </span>
        <a href="{{ route('sign_in') }}" style="
            font-family: DM Sans, sans-serif;
            line-height: 23px;
            color: rgba(161, 98, 247, 1);
          ">Sign in</a>
      </div>
      <div class="div-6">
        <div class="div-7">
          <div class="div-8">
            <img
              loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/0cbf38571acdb32c63a168d0c34868d0fe2cb808cfbc4d32284a217369c10f9b?apiKey=13e5d974267742ca9c25ec9223504ce7&"
              class="img-3"
            />
            <div class="div-9">Sign in with Google</div>
          </div>
        </div>
        <div class="div-10">
          <div class="div-11">
            <img
              loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/ab0e5dbff55fc09c7093f0f95b3b0ea3c21ec010a409545f12b672553cecaf28?apiKey=13e5d974267742ca9c25ec9223504ce7&"
              class="img-4"
            />
            <div class="div-12">Sign in with Facebook</div>
          </div>
        </div>
      </div>
      <div class="div-13">
        <div class="div-14"></div>
        <div class="div-15">or</div>
        <div class="div-16"></div>
      </div>
      <form class="div-17" action="{{ route('sign_up') }}" method="post">
        @csrf
        <div class="div-18">Full Name</div>
        <input type="text" name="f_name" id="f_name" class="div-19"  placeholder="Enter your full name">
        <div class="div-22">Email</div>
        <input type="email" name="email" id="email" class="div-23" placeholder="Enter your email">
        <div class="div-20">Phone</div>
        <input type="text" name="phone" id="phone" class="div-21" placeholder="Enter your phone number">
        <div class="div-24">Password</div>
        <div class="div-25">
          <div class="div-26">
            <input type="password" name="password" id="password" class="div-27"  placeholder="Enter your password">
            <img
              loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/2997cba27956568da32b87baa21c94015e4ccb9abac8cbb64d20846acfdbbbf0?apiKey=13e5d974267742ca9c25ec9223504ce7&"
              class="img-5"
            />
          </div>
        </div>
        <div class="div-28">
          <div class="div-29">
            <input type="checkbox" name="remember_me" class="div-30">
            <div class="div-31">Remember me</div>
          </div>
          <div class="div-32">Forgot your password?</div>
        </div>
        <button type="submit" class="div-33">Sign up</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
