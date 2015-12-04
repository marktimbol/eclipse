<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
            </li>
            <li>
                <a href="{{ route('admin.home') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Categories <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.categories.create') }}">Add New</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.categories.index') }}">View All</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Packages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.packages.create') }}">Add New</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.packages.index') }}">View All</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('admin.bookings.index') }}"><i class="fa fa-table fa-fw"></i> Bookings</a>
            </li>
            <li>
                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Other Link</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> Other Link<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="panels-wells.html">Panels and Wells</a>
                    </li>
                    <li>
                        <a href="buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a href="notifications.html">Notifications</a>
                    </li>
                    <li>
                        <a href="typography.html">Typography</a>
                    </li>
                    <li>
                        <a href="icons.html"> Icons</a>
                    </li>
                    <li>
                        <a href="grid.html">Grid</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i> More Links<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> More sample links<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="blank.html">Blank Page</a>
                    </li>
                    <li>
                        <a href="login.html">Login Page</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>