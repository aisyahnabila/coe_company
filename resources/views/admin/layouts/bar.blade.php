<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                        href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item"><a class="navbar-brand"
                        href="../../../html/ltr/vertical-menu-template/index.html"><img class="brand-logo"
                            alt="robust admin logo" src="{{ asset('assets/img/logo.png') }}">
                        <h3 class="brand-text">BNH CMS</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                        data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                            href="#"><i class="ft-menu"> </i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">

                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                            href="#" data-toggle="dropdown"><span class="avatar avatar-online"><img
                                    src="{{ asset('assets/img/Logo BHT.png') }}" alt="avatar"><i></i></span><span
                                class="user-name">John Doe</span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    class="ft-power"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- //////////////////////////////SIDEBAR//////////////////////////////////////////////-->


<div class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item active"><a href="email-application.html"><i class="icon-home"></i><span
                        class="menu-title" data-i18n="nav.email-application.main">Dashboard</span></a>
            </li>
            <li class=" navigation-header"><span data-i18n="nav.category.layouts">CONTENT</span><i
                    class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right"
                    data-original-title="Layouts"></i>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title"
                        data-i18n="nav.page_layouts.main">Seminar</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="layout-1-column.html"
                            data-i18n="nav.page_layouts.1_column">Daftar</a>
                    </li>
                    <li><a class="menu-item" href="layout-2-columns.html"
                            data-i18n="nav.page_layouts.2_columns">Tambahkan</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title"
                        data-i18n="nav.page_layouts.main">Kerja Sama</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="layout-1-column.html"
                            data-i18n="nav.page_layouts.1_column">Daftar</a>
                    </li>
                    <li><a class="menu-item" href="layout-2-columns.html"
                            data-i18n="nav.page_layouts.2_columns">Tambahkan</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title"
                        data-i18n="nav.page_layouts.main">Pengmas</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="layout-1-column.html"
                            data-i18n="nav.page_layouts.1_column">Daftar</a>
                    </li>
                    <li><a class="menu-item" href="layout-2-columns.html"
                            data-i18n="nav.page_layouts.2_columns">Tambahkan</a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header"><span data-i18n="nav.category.layouts">USER</span><i
                    class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right"
                    data-original-title="Layouts"></i>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-people"></i><span class="menu-title"
                        data-i18n="nav.page_layouts.main">Akun</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="layout-1-column.html" data-i18n="nav.page_layouts.1_column">1
                            column</a>
                    </li>
                    <li><a class="menu-item" href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns">2
                            columns</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
