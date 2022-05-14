<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://www.gao.com/" class="simple-text logo-normal">
      {{ __('Gola Artiistoota Oromoo') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
        <i><img  src="images/logo.svg"></i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="images/logo.svg"></i>
          <p>{{ __('Dashboard Controller') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item {{ $activePage == 'gallery-post' ? ' active' : '' }}">
              <a class="nav-link" href="/gallery-post">
                <span class="sidebar-mini"> GA </span>
                <span class="sidebar-normal"> {{ __('Gallery Management') }} </span>
              </a>
            </li>
            <li class="nav-item {{ $activePage == 'bio-post' ? ' active' : '' }}">
              <a class="nav-link" href="/bio-post">
                <span class="sidebar-mini">Bio </span>
                <span class="sidebar-normal"> {{ __('Biography Management') }} </span>
              </a>
            </li>
            <li class="nav-item {{ $activePage == 'youtube-post' ? ' active' : '' }}">
              <a class="nav-link" href="/youtube-post">
                <span class="sidebar-mini">You </span>
                <span class="sidebar-normal"> {{ __('Youtube Link') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'gao-post-form' ? ' active' : '' }}">
              <a class="nav-link" href="/gao-post-form">
                <span class="sidebar-mini">PO </span>
                <span class="sidebar-normal"> {{ __('New Post') }} </span>
              </a>
            </li>
            <li class="nav-item {{ $activePage == 'create-account' ? ' active' : '' }}">
            
            <a class="nav-link" href="/create-account" class="text-light">
            <span class="sidebar-mini">ACC </span>
            <span class="sidebar-normal"> {{ __('Create new account') }} </span>
            </a>
        
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>
