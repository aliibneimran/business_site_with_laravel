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
        <a href="{{route('dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
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

      {{-- Gallery --}}
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa fa-list" aria-hidden="true"></i><span>Gallery</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('gallery.index')}}">All Gallery</a></li>
          <li><a class="nav-link" href="{{route('gallery.create')}}">Add Gallery</a></li>
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

      {{-- Team --}}
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fas fa-users" aria-hidden="true"></i><span>Team</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('team.index')}}">All Members</a></li>
          <li><a class="nav-link" href="{{route('team.create')}}">Add Team Member</a></li>
        </ul>
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
<div class="settingSidebar">
  <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
  </a>
  <div class="settingSidebar-body ps-container ps-theme-default">
    <div class=" fade show active">
      <div class="setting-panel-header">Setting Panel
      </div>
      <div class="p-15 border-bottom">
        <h6 class="font-medium m-b-10">Select Layout</h6>
        <div class="selectgroup layout-color w-50">
          <label class="selectgroup-item">
            <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
            <span class="selectgroup-button">Light</span>
          </label>
          <label class="selectgroup-item">
            <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
            <span class="selectgroup-button">Dark</span>
          </label>
        </div>
      </div>
      <div class="p-15 border-bottom">
        <h6 class="font-medium m-b-10">Sidebar Color</h6>
        <div class="selectgroup selectgroup-pills sidebar-color">
          <label class="selectgroup-item">
            <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
              data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
          </label>
          <label class="selectgroup-item">
            <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
              data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
          </label>
        </div>
      </div>
      <div class="p-15 border-bottom">
        <h6 class="font-medium m-b-10">Color Theme</h6>
        <div class="theme-setting-options">
          <ul class="choose-theme list-unstyled mb-0">
            <li title="white" class="active">
              <div class="white"></div>
            </li>
            <li title="cyan">
              <div class="cyan"></div>
            </li>
            <li title="black">
              <div class="black"></div>
            </li>
            <li title="purple">
              <div class="purple"></div>
            </li>
            <li title="orange">
              <div class="orange"></div>
            </li>
            <li title="green">
              <div class="green"></div>
            </li>
            <li title="red">
              <div class="red"></div>
            </li>
          </ul>
        </div>
      </div>
      <div class="p-15 border-bottom">
        <div class="theme-setting-options">
          <label class="m-b-0">
            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
              id="mini_sidebar_setting">
            <span class="custom-switch-indicator"></span>
            <span class="control-label p-l-10">Mini Sidebar</span>
          </label>
        </div>
      </div>
      <div class="p-15 border-bottom">
        <div class="theme-setting-options">
          <label class="m-b-0">
            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
              id="sticky_header_setting">
            <span class="custom-switch-indicator"></span>
            <span class="control-label p-l-10">Sticky Header</span>
          </label>
        </div>
      </div>
      <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
        <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
          <i class="fas fa-undo"></i> Restore Default
        </a>
      </div>
    </div>
  </div>
</div>