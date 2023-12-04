<div class="vertical-menu" style="background:#50B544">

  <div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
      <!-- Left Menu Start -->
      <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title" style="color:black;">Menú</li>

        <li>
          <a href="{{ url('/dashboard') }}" class="waves-effect">
            <i class="ri-home-fill"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li class="menu-title" style="color:black;">ADMINISTAR PROVEEDORES</li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="ri-file-user-line"></i>
            <span>Proveedores</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('supplier.all') }}">Todos los Proveedores</a></li>
          </ul>
        </li>


      </ul>
    </div>
    <!-- Sidebar -->
  </div>
</div>
