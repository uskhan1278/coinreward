 <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="{{asset('public/assets/images/icon/logo-black.png')}}" alt="Cool Admin" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="has-sub">
                        <a class="js-arrow" href="{{route('dashboard')}}">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="far fa-copy"></i>Edits Page</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{route('edit_about')}}">About</a>
                            </li>
                            <li class="has-sub">
                                <a href="#">Affiliates</a>
                            </li>
                            <li>
                                <a href="#">blog</a>
                            </li>
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                            <li>
                                <a href="#">Footer</a>
                            </li>
                            <li>
                                <a href="#">Get Help</a>
                            </li>
                            <li>
                                <a href="#">Header</a>
                            </li>
                            <li>
                                <a href="#">How it works</a>
                            </li>
                            <li>
                                <a href="#">Index</a>
                            </li>
                            <li>
                                <a href="#">News</a>
                            </li>
                            <li>
                                <a href="#">Profile</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->