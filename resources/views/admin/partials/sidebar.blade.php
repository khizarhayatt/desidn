<div class="main-sidebar sidebar-style-2" style="overflow: hidden; outline: none;" tabindex="1">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="javascript:;"> 
                <span class="logo-name"> Med Opinion</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="javascript:;" class="nav-link toggled">
                    <i class="fas fa-desktop"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-header">Modules</li>

            <li class="dropdown acti ve">
                <a href="javascript:;" class="menu-toggle nav-link has-dropdown">
                    <i class="fa-solid  fa-user-doctor"></i>
                    <span>Doctors</span>
                </a>
                <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('doctors.index') }}">All Doctors </a></li>
                        <li><a class="nav-link" href="{{ route('doctors.create') }}"> Create</a></li>
                         
                    </ul>
            </li>
 <li class="menu-header">Media</li>

            <li class="dropdown acti ve">
                <a href="javascript:;" class="menu-toggle nav-link has-dropdown">
                    <i class="fa-solid  fa-user-doctor"></i>
                    <span>Posts</span>
                </a>
                <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('posts.index') }}">All Posts </a></li>
                        <li><a class="nav-link" href="{{ route('posts.create') }}"> Create</a></li>
                         <li><a class="nav-link" href="{{ route('categories.index') }}"> Categories</a></li> 
                         
                    </ul>
            </li>


            <li class="menu-header ">Admin Setting</li>


            <div class="navwrap">   
                <li class="dropdown">
                    <a href="javascript:;" class="menu-toggle nav-link has-dropdown">
                        <i class="fa-solid fa-user-group"></i><span>Users & Roles </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('users.index') }}">All Users </a></li>
                        <li><a class="nav-link" href="{{ route('roles.index') }}"> Roles & Permissions</a></li>
                        <li><a class="nav-link" href="#">Activity & History</a></li>
                    </ul>
                </li>
            </div>
            <li class="menu-header">Logout</li>
            <li >

                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form> 
                <a href="javascript:;" onclick="event.preventDefault();  document.getElementById('logout-form').submit();"  class="nav-link">
                    <i class="fa-solid fa-right-from-bracket"></i><span>Logout</span>
                </a> 
            </li> 
        </ul>
    </aside>
</div>
