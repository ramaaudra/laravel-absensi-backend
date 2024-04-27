<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">RAMA</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="{{route('home')}}"
                    class="nav-link">
                    <i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>

            {{-- user --}}
            <li>
                <a href="{{route('users.index')}}"
                    class="nav-link">
                    <i class="fas fa-columns"></i> <span>Users</span></a>
            </li>

            {{-- company --}}
             <li class="nav-item">
                <a href="{{ route('companies.show', 1) }}" class="nav-link">
                    <i class="fas fa-columns"></i>
                    <span>Company</span>
                </a>
            </li>

            {{-- attendance --}}
             <li class="nav-item">
                <a href="{{ route('attendances.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i>
                    <span>Attendances</span>
                </a>
            </li>

            {{-- permission --}}
             <li class="nav-item">
                <a href="{{ route('permissions.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i>
                    <span>Permission</span>
                </a>
            </li>
    </aside>
</div>
