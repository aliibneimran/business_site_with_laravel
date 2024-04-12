<nav class="navbar navbar-expand-lg main-navbar sticky">
  <div class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
            collapse-btn"> <i data-feather="align-justify"></i></a></li>
      <li>
        <a href="#" class="nav-link nav-link-lg fullscreen-btn">
          <i data-feather="maximize"></i>
        </a>
      </li>
    </ul>
  </div>
  <ul class="navbar-nav navbar-right">
    <li>
      {{-- <a style="color:rgb(108, 106, 106)" class="nav-link nav-link-lg">{{Auth::user()->name}}</a> --}}
    </li>
    
    <li class="dropdown">
      <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <span class="text-black" style="color:rgb(108, 106, 106)">{{Auth::user()->name}}</span>
        <img alt="image" src="{{asset('')}}uploads/{{Auth::user()->img}}"
          class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span>
      </a>
      <div class="dropdown-menu dropdown-menu-right pullDown">
        <a href="{{route('profile.index')}}" class="dropdown-item has-icon"> <i class="far
              fa-user"></i> Profile
        </a>
        <div class="dropdown-divider"></div>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="dropdown-item has-icon text-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
        </button>
          {{-- <a href="{{route('logout')}}" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
            Logout
          </a> --}}
        </form>
      </div>
    </li>
  </ul>
</nav>