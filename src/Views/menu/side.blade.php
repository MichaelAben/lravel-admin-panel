@section('menu.side')
    <nav class="col-md-2 d-md-block sidebar">
        <div class="sidebar-sticky">

            <a class="nav-submenu-heading d-block d-md-none" href="#collapseSidebar" data-toggle="collapse" role="button"
               aria-expanded="false" aria-controls="collapseSidebar">
                Menu <i class="float-right fa fa-caret-down"></i>
            </a>

            <div class="collapse" id="collapseSidebar" area-expanded="false">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="fa fa-home"></i> Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-submenu-heading" href="#collapseSidebarContent" data-toggle="collapse" role="button"
                           aria-expanded="false" aria-controls="collapseExample">
                            Content <i class="float-right fa fa-caret-down"></i>
                        </a>

                        <div class="collapse nav-submenu" id="collapseSidebarContent" area-expanded="false">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-copy"></i> Pages
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-file"></i> Files
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-submenu-heading" href="#collapseSidebarUsers" data-toggle="collapse" role="button"
                           aria-expanded="false" aria-controls="collapseExample">
                            User management <i class="float-right fa fa-caret-down"></i>
                        </a>

                        <div class="collapse nav-submenu" id="collapseSidebarUsers" area-expanded="false">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-users"></i> Users
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-user-tag"></i> Roles
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-align-justify"></i> Permissions
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-submenu-heading" href="#collapseSidebarSettings" data-toggle="collapse" role="button"
                           aria-expanded="false" aria-controls="collapseExample">
                            Settings <i class="float-right fa fa-caret-down"></i>
                        </a>

                        <div class="collapse nav-submenu" id="collapseSidebarSettings" area-expanded="false">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-cog"></i> Main settings
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-language"></i> Language
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-eye"></i> Privacy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-envelope"></i> Contact
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-question-circle"></i> FAQ
                        </a>
                    </li>
                </ul>
            </div>
            <div class="sidebar-footer">
                &copy; 2019 | Michael Aben
            </div>
        </div>
    </nav>
@endsection
