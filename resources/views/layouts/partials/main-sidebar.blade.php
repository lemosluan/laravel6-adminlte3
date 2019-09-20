<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{route('panel.index')}}" class="brand-link">
    <img src="/panel/img/logo.png" alt="logomarca" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/panel/img/profile.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{auth()->user()->name}}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @can('index', App\User::class)
        <li class="nav-item">
          <a class="nav-link {{ (Route::currentRouteName() == 'panel.user.index') ? 'active' : ''}}"
            href="{{route('panel.user.index')}}">
            <i class="nav-icon fas fa-users blue"></i>
            <p>
              Manter Usuários
            </p>
          </a>
        </li>
        @endcan

        <hr />
        @if(auth()->user()->can('edit', [App\User::class, auth()->user()]))
        <li class="nav-item">
          <a href="{{route('panel.user.profile')}}"
            class="nav-link {{ (Route::currentRouteName() == 'panel.user.profile') ? 'active' : ''}}">
            <i class="nav-icon fas fa-user blue"></i>
            <p>
              Meu Perfil
            </p>
          </a>
        </li>
        @endif

        @if(auth()->check())
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
            <i class="nav-icon fa fa-power-off red"></i>
            <p>
              {{ __('Logout') }}
            </p>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
        @endif

      </ul>
    </nav>

    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>