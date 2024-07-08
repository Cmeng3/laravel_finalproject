<header class="header">
  <a href="/" class="logo"><img src="/image/logo.png" alt="Logo"></a>
  <nav class="navbar">
    <a href="/animal">Pet Matching</a>
    <a href="/pet">Dog/Cat Information</a>
    <a href="/news">News & Article</a>
  </nav>
  
  
  <div class="login">
  @guest
      <a href="{{ route('sign_in') }}">Log in</a>
      <a href="{{ route('sign_up') }}">Sign up</a>
    @endguest

    @auth
      Welcome, {{ Auth::user()->name }}
      
        <form id="logoutForm" action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit">Log out</button>
        </form>
      </li>
    
    @endauth
  </div>
</header>
