<div>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('assets/admin-assets/dist/img/user2-160x160.jpg') }}"
                        class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Hiep Nguyen</a>
                </div>
            </div>


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li
                        class="nav-item has-treeview {{ request()->is('hotels') ? 'menu-open' : '' }} {{ request()->is('addhotels') ? 'menu-open' : '' }} ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-folder"></i>
                            <p>
                                Home
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li
                                class="nav-item has-treeview {{ request()->is('sliders') ? 'menu-open' : '' }} {{ request()->is('addsliders') ? 'menu-open' : '' }} ">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-folder"></i>
                                    <p>
                                        Slider
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>

                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('addsliders') }}"
                                            class="nav-link  {{ request()->is('addsliders') ? 'active' : '' }}">
                                            <i class="far fa-file nav-icon"></i>
                                            <p>Add slider</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('sliders') }}"
                                            class="nav-link  {{ request()->is('sliders') ? 'active' : '' }}">
                                            <i class="far fa-file nav-icon"></i>
                                            <p>Sliders</p>
                                        </a>
                                    </li>
                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li
                        class="nav-item has-treeview {{ request()->is('hotels') ? 'menu-open' : '' }} {{ request()->is('addhotels') ? 'menu-open' : '' }} ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-folder"></i>
                            <p>
                                Hotels Details
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li
                                class="nav-item has-treeview {{ request()->is('hotels') ? 'menu-open' : '' }} {{ request()->is('addhotels') ? 'menu-open' : '' }} ">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-folder"></i>
                                    <p>
                                        Hotels
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview ">
                                    <li class="nav-item">
                                        <a href="{{ route('addhotels') }}"
                                            class="nav-link  {{ request()->is('addhotels') ? 'active' : '' }}">
                                            <i class="far fa-file nav-icon"></i>
                                            <p>Add Hotels</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('hotel') }}"
                                            class="nav-link  {{ request()->is('hotels') ? 'active' : '' }}">
                                            <i class="far fa-file nav-icon"></i>
                                            <p>Hotels</p>
                                        </a>
                                    </li>
                                </ul>

                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li
                                class="nav-item has-treeview {{ request()->is('rooms') ? 'menu-open' : '' }} {{ request()->is('addrooms') ? 'menu-open' : '' }} {{ request()->is('roomtype') ? 'menu-open' : '' }} ">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-folder"></i>
                                    <p>
                                        Rooms
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview ">
                                    <li class="nav-item">
                                        <a href="{{ route('roomtype') }}"
                                            class="nav-link  {{ request()->is('roomtype') ? 'active' : '' }}">
                                            <i class="far fa-file nav-icon"></i>
                                            <p>Rooms Types</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('rooms') }}"
                                            class="nav-link  {{ request()->is('rooms') ? 'active' : '' }}">
                                            <i class="far fa-file nav-icon"></i>
                                            <p>Rooms</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li
                                class="nav-item has-treeview {{ request()->is('booking') ? 'menu-open' : '' }} {{ request()->is('booking') ? 'menu-open' : '' }}">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-folder"></i>
                                    <p>
                                        Room Booking
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview ">
                                    <li class="nav-item">
                                        <a href="{{ route('booking') }}"
                                            class="nav-link  {{ request()->is('booking') ? 'active' : '' }}">
                                            <i class="far fa-file nav-icon"></i>
                                            <p>Bookings</p>
                                        </a>
                                    </li>
                                </ul>

                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</div>
