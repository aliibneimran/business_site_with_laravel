<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{url('dashboard')}}"> 
        <img alt="image" src="{{asset('backend/img/logo.png')}}" class="header-logo" /><span class="logo-name" style="font-size: .93rem; color:#6777F0">Business Website</span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Admin Dashboard</li>
      {{-- Dashboard --}}
      <li class="">
        <a href="{{url('dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
      </li>

      {{-- Services --}}
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa fa-wrench" aria-hidden="true"></i><span>Services</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('service.index')}}">All Services</a></li>
          <li><a class="nav-link" href="{{route('service.create')}}">Add Service</a></li>
        </ul>
      </li>

      {{-- Blog --}}
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa fa-blog" aria-hidden="true"></i><span>Blogs</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('blog.index')}}">All Blogs</a></li>
          <li><a class="nav-link" href="{{route('blog.create')}}">Add Blogs</a></li>
        </ul>
      </li>

      {{-- Category --}}
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa fa-list" aria-hidden="true"></i><span>Category</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('category.index')}}">All Category</a></li>
          <li><a class="nav-link" href="{{route('category.create')}}">Add Category</a></li>
        </ul>
      </li>

      {{-- Gallery --}}
      <li class="dropdown">
        <a href="#" class="nav-link"><i class="fa fa-image" aria-hidden="true"></i><span>Gallery</span></a>
      </li>

      {{-- FAQ --}}
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa fa-question" aria-hidden="true"></i><span>FAQ</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route("faq.index")}}">All FAQ</a></li>
          <li><a class="nav-link" href="{{route("faq.create")}}">Add FAQ</a></li>
        </ul>
      </li>

      {{-- Message --}}
      <li>
        <a href="{{route('messages')}}" class="nav-link"><i data-feather="mail"></i><span>Message</span></a>
      </li>

    </ul>
  </aside>
</div>