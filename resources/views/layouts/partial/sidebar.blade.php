<div class="sidebar" data-color= "green" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="/" class="simple-text logo-normal">
      <img id="logo" src="{{asset('frontend/images/Logo_white_bg.png')}}" class="logo img-responsive" style="margin-left: auto; margin-right: auto; width: 180px; height: 200px;">
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">  
        <li class= "{{ Request::is('adminHome*') ? 'active': '' }}" >
            <a class="nav-link" href="/adminHome">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{ Request::is('user*') ? 'active': '' }}">
            <a class="nav-link" href="/user">
              <i class="material-icons">person</i>
              <p>{{ Auth::user()->name }}</p>
            </a>
          </li>
          <li class="{{ Request::is('menu*') ? 'active': '' }}">
            <a class="nav-link" href="/menu">
              <i class="material-icons">content_paste</i>
              <p>Menu</p>
            </a>
          </li>
          <!--<li class="{{ Request::is('slider*') ? 'active': '' }}">
            <a class="nav-link" href="/slider">
              <i class="material-icons">dashboard</i>
              <p>Slider</p>
            </a>
          </li>-->
          <li class="{{ Request::is('Reservation*') ? 'active': '' }}">
            <a class="nav-link" href="/Reservation">
              <i class="material-icons">library_books</i>
              <p>Reservation Requests</p>
            </a>
          </li>
          <li class="{{ Request::is('contact*') ? 'active': '' }}">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">language</i>
              <p>Contact</p>
            </a>
          </li>
          <li class="nav-item ">
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              <i class="material-icons">bubble_chart</i>
              <p>{{ __('Logout') }}</p>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
          </li>
        </ul>
      </div>
    </div>