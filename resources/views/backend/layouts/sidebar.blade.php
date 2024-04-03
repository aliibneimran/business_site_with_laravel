<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html"> <img alt="image" src="{{asset('backend/img/logo.png')}}" class="header-logo" /> <span
          class="logo-name">Otika</span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Admin Dashboard</li>
      <li class="active">
        <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
      </li>
      <li>
        <a href="{{route('messages')}}" class="nav-link"><i data-feather="mail"></i><span>Message</span></a>
      </li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="briefcase"></i><span>Widgets</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="widget-chart.html">Chart Widgets</a></li>
          <li><a class="nav-link" href="widget-data.html">Data Widgets</a></li>
        </ul>
      </li>
      
    </ul>
  </aside>
</div>