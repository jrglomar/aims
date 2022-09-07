<style>
.sidebar-custom{
    display: inherit;
    position: absolute;
    width: 93%;
    bottom: 10px;
}
</style>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/dashboard" class="brand-link">

        <img src="{{ asset('vendors/adminlte/dist/img/laravel-svg.png') }}" alt="Laravel Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light" style="padding-left:10%;"> {{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('vendors/adminlte/dist/img/avatar5.png') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="/admin/dashboard" class="d-block"> Admin Raven</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-header">DASHBOARD</li>
               <li class="{{ Request::segment(2) == 'dashboard' ? 'nav-item active' : 'nav-item' }}">
                   <a href="/services/dashboard"
                       class="{{ Request::segment(2) == 'dashboard' ? 'nav-link active' : 'nav-link' }}">
                       <i class="nav-icon fas fa-tachometer-alt"></i>
                       <p>
                           Dashboard
                       </p>
                   </a>
               </li>
               <li class="nav-header">USER MANAGEMENT</li>
               <li class="nav-item">
                   <a href="/services/inquiry"
                       class="{{ Request::segment(2) == 'inquiry' ? 'nav-link active' : 'nav-link' }}">
                       <i class="nav-icon fas fa-question"></i>
                       <p>
                           Inquiries
                       </p>
                   </a>
               </li>
               <li class="nav-header">EQUIPMENT MANAGEMENT</li>
               <li class="nav-item">
                   <a href="/services/equipment"
                       class="{{ Request::segment(2) == 'equipment' ? 'nav-link active' : 'nav-link' }}">
                       <i class="nav-icon fas fa-boxes"></i>
                       <p>
                           Equipments
                       </p>
                   </a>
               </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
</aside>
