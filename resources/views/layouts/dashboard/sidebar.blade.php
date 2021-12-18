<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <span class="brand-text font-weight-light pl-4"><strong>Yummy Box</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @if(!empty(Auth::user()->image))
          <img src="{{asset(Auth::user()->image)}}" class="img-circle elevation-2" alt="User Image">
          @else
          <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" class="img-circle elevation-2" alt="User Image">
          @endif
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->fname}} {{Auth::user()->lname}}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('home')}}" class="nav-link {{  request()->is('home') ? 'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                  Tableau de bord
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('admin.contact')}}" class="nav-link {{  request()->is('admin/contact') ? 'active':'' }}">
                <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>
                  Requêtes
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('admin.home')}}" class="nav-link {{  request()->is('admin/home') ? 'active':'' }}">
                <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>
                  Page d'accueil
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('admin.settings')}}" class="nav-link {{  request()->is('admin/settings') ? 'active':'' }}">
                <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>
                  Réglages généraux
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('admin.advantage')}}" class="nav-link {{  request()->is('admin/advantage') ? 'active':'' }}">
                <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>
                  Avantage
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('admin.ambitions')}}" class="nav-link {{  request()->is('admin/ambitions') ? 'active':'' }}">
                <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>
                  Ambitions
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('admin.objectifs')}}" class="nav-link {{  request()->is('admin/objectifs') ? 'active':'' }}">
                <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>
                  Objectifs
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('admin.blog')}}" class="nav-link {{  request()->is('admin/blog') ? 'active':'' }}">
                <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>
                  Blog
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('admin.privacy')}}" class="nav-link {{  request()->is('admin/privacy') ? 'active':'' }}">
                <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>
                  Politique de confidentialité
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('admin.terms')}}" class="nav-link {{  request()->is('admin/terms') ? 'active':'' }}">
                <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>
                  Termes et conditions
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('admin.pages')}}" class="nav-link {{  request()->is('admin/pages') ? 'active':'' }}">
                <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>
                  Pages
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                         class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log Out
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
