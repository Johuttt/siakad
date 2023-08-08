<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/profil*') ? 'active' : '' }}" aria-current="page" href="/dashboard/profil">
              <span data-feather="user" class="align-text-bottom"></span>
              Profil
            </a>
          </li>
      </ul>

      @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Administrator</span>
      </h6>
      <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/ukt*') ? 'active' : '' }}" aria-current="page" href="/dashboard/ukt">
              <span data-feather="user" class="align-text-bottom"></span>
              UKT Mahasiswa
            </a>
          </li>
      </ul>
      @endcan
    </div>
  </nav>
