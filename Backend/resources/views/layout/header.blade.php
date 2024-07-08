<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/header.css">
  <title>Document</title>
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  padding-top: 80px; /* Adjust this based on the header height */
}

.header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 80px; /* Set a fixed height for the header */
  padding: 20px;
  background: pink;
  display: flex;
  justify-content: space-between;
  align-items: center;
  z-index: 100;
}

.logo {
  margin-left: 15px;
}

.logo img {
  width: 50px;
  height: auto;
}

.navbar {
  display: flex;
  justify-content: center;
  flex: 1;
}

.navbar a {
  font-size: 15px;
  color: aliceblue;
  font-weight: 500;
  text-decoration: none;
  margin: 0 20px;
  position: relative;
}

.navbar a::before {
  content: '';
  position: absolute;
  top: 100%;
  left: 0;
  width: 0;
  height: 2px;
  background-color: #fff;
  transition: 0.5s;
}

.navbar a:hover::before {
  width: 100%;
}

.logoi {
  margin-right: 20px;
}

.logoi img {
  width: 50px;
  height: auto;
}

.login {
  margin-right: 20px;
}

.login a {
  color: aliceblue;
  font-weight: 500;
  text-decoration: none;
  display: block;
}

.logo1 {
  margin-right: 20px;
}

.logo1 img {
  width: 50px;
  height: auto;
}

</style>
</head>
<body>
  <header class="header">

    <a href="#" class="logo">
        <img src="{{ asset('assets/brand/dog-solid.svg') }}" />
        <span style="display: block; color: red;">Petcare</span>
      </a>

    <nav class="navbar">
      <a href="/animal">Pet Matching</a>
      <a href="/pet-random">Dog/Cat Information</a>
      <a href="/news">News & Article</a>
      <a href="/report">report</a>
      <a href="/contact-us">contactus</a>
    </nav>
    <a href="#" class="logoi"><img src="{{ asset('assets/brand/noti.svg') }}" alt="Notification"></a>
    <div class="login">
      <a href="/sign-in">Login</a>
      <a href="/sign-up">Sign Up</a>
    </div>
    <a href="#" class="logo1"><img src="{{ asset('assets/brand/user-avatar.svg') }}" alt="Profile"></a>
  </header>
</body>
</html>
