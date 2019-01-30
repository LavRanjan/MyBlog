<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="/images/short_logo.jpg" alt="Larvel-Tech" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                {{--  <li class="active has-sub">
                     <a class="js-arrow" href="#">
                         <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                     <ul class="list-unstyled navbar__sub-list js-sub-list">
                         <li>
                             <a href="index.html">Dashboard 1</a>
                         </li>
                         <li>
                             <a href="index2.html">Dashboard 2</a>
                         </li>
                         <li>
                             <a href="index3.html">Dashboard 3</a>
                         </li>
                         <li>
                             <a href="index4.html">Dashboard 4</a>
                         </li>
                     </ul>
                 </li> --}}
                <li>
                    <a href="{{route('admin-dashboard')}}">
                        <i class="fas fa-chart-bar"></i>Dashboard</a>
                </li>
                <li>
                    <a href="{{route('lead-list')}}">
                        <i class="fas fa-table"></i>Leads from Blog</a>
                </li>
                <li>
                    <a href="{{route('post.index')}}">
                        <i class="far fa-check-square"></i>Posts</a>
                </li>
                <li>
                    <a href="{{route('edit-profile')}}">
                        <i class="fas fa-calendar-alt"></i>User Profile</a>
                </li>

                {{-- <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->