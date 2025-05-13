<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        <li class="nav-item">
            <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" href="{{ url('/admin') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/menu') || Request::is('admin/menu/*') ? 'active' : '' }}"
                href="{{ url('/admin/menu') }}">
                <span class="menu-title">Menu</span>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/message') || Request::is('admin/message/*') ? 'active' : '' }}"
                href="{{ url('/admin/message') }}">
                <span class="menu-title">Message</span>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/review') || Request::is('admin/review/*') ? 'active' : '' }}"
                href="{{ url('/admin/review') }}">
                <span class="menu-title">Review</span>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/team') || Request::is('admin/team/*') ? 'active' : '' }}"
                href="{{ url('/admin/team') }}">
                <span class="menu-title">Team</span>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
        </li>


    </ul>
</nav>
