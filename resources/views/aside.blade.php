<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset('dist/img/logo.png') }}" alt="Support Center Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Support center</span>
    </a>

    <!-- Sidebar -->
    <div
        class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
        <div class="os-resize-observer-host observed">
            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
        </div>
        <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
            <div class="os-resize-observer"></div>
        </div>
        <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 376px;"></div>
        <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
                <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                    <!-- Sidebar user panel (optional) -->
                    {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> --}}


                    <!-- Sidebar Menu -->
                    <nav class="mt-2">



                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item mt-3 pb-3 mb-3">
                                <a href="#" class="nav-link ">
                                    <i class="nav-icon fas fa-user-alt"></i>
                                    <p>
                                        Hello! {{ Auth::user()->name }}
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav ">
                                    <li class="nav-item">
                                        <a href="{{ route('profile.edit') }}" class="nav-link ">
                                            <i class="nav-icon fas fa-angle-right"></i>
                                            <p>Profile</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link "
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="nav-icon fas fa-angle-right"></i>
                                            <p>Logout</p>
                                        </a>
                                    </li>

                                    <form id="logout-form" method="POST" action="{{ route('logout') }}"
                                        style="display: none;">
                                        @csrf
                                        <button type="submit">Logout</button>
                                    </form>
                                </ul>
                            </li>



                            <li class="nav-item ">
                                <a href="#" class="nav-link ">
                                    <i class="nav-icon fas fa-ticket-alt"></i>
                                    <p>
                                        Ticket
                                        <i class="right fas fa-angle-left"></i>

                                    </p>
                                </a>

                                <ul class="nav ">

                                    @role('admin')
                                        <li class="nav-item">
                                            <a href="{{ route('tickets.index') }}" class="nav-link ">

                                                <i class="nav-icon fas fa-angle-right"></i>
                                                <p>Ticket All</p>
                                            </a>
                                        </li>
                                    @endrole

                                    @unless (auth()->user()->hasRole('admin'))
                                        <li class="nav-item">
                                            <a href="{{ route('myticket') }}" class="nav-link ">

                                                <i class="nav-icon fas fa-angle-right"></i>
                                                <p>My Ticket</p>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{ route('tickets.create') }}" class="nav-link ">
                                                <i class="nav-icon fas fa-angle-right"></i>
                                                <p>Create a Ticket</p>
                                            </a>
                                        </li>
                                    @endunless
                                </ul>

                            </li>

                        </ul>


                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
            </div>
        </div>
        <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable">
            <div class="os-scrollbar-track">
                <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px);"></div>
            </div>
        </div>
        <div class="os-scrollbar os-scrollbar-vertical">
            <div class="os-scrollbar-track">
                <div class="os-scrollbar-handle" style="height: 27.741%; transform: translate(0px);"></div>
            </div>
        </div>
        <div class="os-scrollbar-corner"></div>
    </div>
    <!-- /.sidebar -->
</aside>
