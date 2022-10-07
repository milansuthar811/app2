<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('home.dashboard_index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Home</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.listactions') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Actions</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('logout.perform') }}" class="btn btn-block btn-info me-2">Logout</a>
        </li>
    </ul>
</nav>
