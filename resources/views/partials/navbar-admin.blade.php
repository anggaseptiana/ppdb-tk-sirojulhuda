{{-- Nav --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand text-semibold text-green-dark" href="/"><img src="{{ '/assets/images/logo.png' }}" alt="Logo TK" width="50"> TK Sirojul Huda</a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item ms-md-4">
            <a class="nav-link {{ request()->is('admin/index*') ? 'active' : '' }}" href="/admin/index{{ count(DB::table('recruitments')->get()) > 0 ? '?tahun_ajaran=' . DB::table('recruitments')->orderBy('id', 'desc')->first()->tahun_ajaran : '' }}">Data Calon Peserta Didik</a>
          </li>
          <li class="nav-item ms-md-4">
            <div class="dropdown">
                <a class="nav-link dropdown-toggle {{ request()->is('admin/recruitment') ? 'active' : '' }} || {{ request()->is('admin/blog') ? 'active' : '' }} || {{ request()->is('admin/admin') ? 'active' : '' }}" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Manajemen</a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <li><a class="dropdown-item {{ request()->is('admin/recruitment') ? 'active' : '' }}" href="/admin/recruitment">Pendaftaran</a></li>
                      <li><a class="dropdown-item {{ request()->is('admin/blog') ? 'active' : '' }}" href="/admin/blog">Blog</a></li>
                      <li><a class="dropdown-item {{ request()->is('admin/user') ? 'active' : '' }}" href="/admin/user">Admin</a></li>
                  </ul>
            </div>
          </li>
          @auth
          <li class="nav-item ms-md-4">
              <div class="dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i> {{ auth()->user()->name }}</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="/admin/logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
              </div>
            </li>
            @endauth
        </ul>
      </div>
    </div>
  </nav>
{{-- End Nav --}}
