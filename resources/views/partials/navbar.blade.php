<header class="header">
    <div class="header__bottom">
      <div class="container">
        <nav class="navbar navbar-expand-xl p-0 align-items-center">
          <a class="site-logo site-title" href="/">BlackRock</a>
          <ul class="account-menu mobile-acc-menu">
            @auth
                  <form id="gtoogle_translate_element" action="{{ route('logout') }}" method="post" class="text-white ">
                    @csrf
                    <button type="submit" class="" style="color: #111!important;padding: 5px;">Logout</button>
                  </form>
            @else
              <li class="icon">
                <a href="{{ route('login') }}"><i class="fa-solid fa-users"></i></a>
              </li>

            @endauth
          </ul>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu m-auto">
              <li> <a href="{{ route('index') }}">Home</a></li>
              <li> <a href="{{ route('about') }}">About Us</a></li>
              <li><a href="{{ route('contact') }}">Contact</a></li>
              @auth
                <li><a href="/user/{{ auth()->user()->id }}/dashboard">Dashboard</a></li>
                <li><a href="{{ route('plan') }}">Plan</a></li>
                <li><a href="{{ route('withdraw') }}">Withdraw</a></li>
              @endauth
            </ul>
            <div class="nav-right">
              <ul class="account-menu ml-3">
                <li>
                  @if(Auth::check())
                    
                  <form id="gtoogle_translate_element" action="{{ route('logout') }}" method="post" class="text-white ">
                    @csrf
                    <button type="submit" class="rounded-pill" style="color: #111!important;padding: 5px 20px;">Logout</button>
                  </form>
                  
                  @else
                    

                  <div id="gtoogle_translate_element" class="text-white ">
    <a href="{{ route('login') }}" class="border" style="border-radius: 30px; padding: 5px 20px; cursor: pointer;">Get started</a>
                </div>

                  @endif
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>