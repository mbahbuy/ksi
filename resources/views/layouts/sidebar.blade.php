<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      @guest
        <li class="nav-item">
          <a class="nav-link {{ Request::is('login') ? : 'collapsed' }}" href="{{ route('login') }}">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Login</span>
          </a>
        </li><!-- End Login Page Nav -->
      @else
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? : 'collapsed' }}" href="{{ route('dashboard') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->
      @endguest

    </ul>

</aside><!-- End Sidebar-->