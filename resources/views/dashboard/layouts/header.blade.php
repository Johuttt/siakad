<header class="navbar navbar-dark sticky-top bg-grey flex-md-nowrap p-2 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-5" href="/"><img src="/assets/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        FASILKOM UNSIKA
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <span class="w-100 rounded-0 border-0 bg-grey"></span>
      {{-- <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search"> --}}
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
          <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="nav-link px-3 bg-grey border-0"><span data-feather="log-out" class="align-text-bottom"></span> Logout</button>
          </form>
      </div>
    </div>
  </header>
