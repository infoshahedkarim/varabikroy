<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-dark-sm.png') }}" alt="" height="26">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="28">
            </span>
        </a>

        <a href="index" class="logo logo-light">
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="30">
            </span>
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-light-sm.png') }}" alt="" height="26">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
        <i class="bx bx-menu align-middle"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <!-- <li class="menu-title" data-key="t-menu">Dashboard</li>

               <li>
                    <a href="javascript: void(0);">
                        <i class="bx bx-home-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                        <span class="badge rounded-pill bg-primary">2</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index" data-key="t-ecommerce">Ecommerce</a></li>
                        <li><a href="dashboard-sales" data-key="t-sales">Sales</a></li>
                    </ul>
                </li>

                 -->


                <li>
                    <a href="{{route('back.pcreate')}}">
                        <i class="bx bx-paper-plane icon nav-icon"></i>
                        <span class="menu-item" data-key="t-todo">Add a Place</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('back.pshow')}}">
                        <i class="bx bx-grid-vertical icon nav-icon"></i>
                        <span class="menu-item" data-key="t-todo">Place Lists</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('back.ccreate')}}">
                        <i class="bx bxl-react icon nav-icon"></i>
                        <span class="menu-item" data-key="t-todo">Add a Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('back.cshow')}}">
                        <i class="bx bx-book icon nav-icon"></i>
                        <span class="menu-item" data-key="t-todo">Category Lists</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('back.create')}}">
                        <i class="bx bx-cloud-download icon nav-icon"></i>
                        <span class="menu-item" data-key="t-todo">Create a AD</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('back.show')}}">
                        <i class="bx  bx-folder icon nav-icon"></i>
                        <span class="menu-item" data-key="t-todo">AD Lists</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('contact.messages')}}">
                        <i class="bx bxl-google icon nav-icon"></i>
                        <span class="menu-item" data-key="t-todo">Show Emails</span>
                    </a>
                </li>

                <!-- <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-cuboid icon nav-icon"></i>
                        <span class="menu-item" data-key="t-icons">Icons</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-evaicons" data-key="t-evaicons">Eva Icons</a></li>
                        <li><a href="icons-boxicons" data-key="t-boxicons">Boxicons</a></li>
                        <li><a href="icons-materialdesign" data-key="t-material-design">Material Design</a></li>
                        <li><a href="icons-fontawesome" data-key="t-font-awesome">Font Awesome 5</a></li>
                    </ul>
                </li> -->
            </ul>
        </div>
        
    </div>
</div>
