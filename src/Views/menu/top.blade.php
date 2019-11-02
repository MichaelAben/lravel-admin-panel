@section('menu.top')
    <div class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top topbar">
        <a href="{{ route('home') }}" class="navbar-brand">{{ env('APP_NAME', 'Portal') }}</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuTopNav"
                aria-controls="menuTopNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuTopNav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="menuTopNavDropdownNotifications" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell text-info"></i>
                        <span class="d-lg-none">Notifications</span>
                        <span class="badge badge-danger rounded-circle">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="menuTopNavDropdownNotifications">
                        <h5 class="dropdown-header">Notifications</h5>
                        <a class="dropdown-item" href="#">Hello world, i'm a notification</a>
                        <a class="dropdown-item" href="#">I'm a real long notification so i can show you what happens to me cause i'm to long</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="menuTopNavDropdownUser" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user text-info"></i>
                        <span class="d-lg-none">Account</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="menuTopNavDropdownUser">
                        @if(Auth::check())
                            <h5 class="dropdown-header">{{ Auth::user()->email }}</h5>
                        @endif
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-cog"></i> Personal Settings</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-sign-out-alt"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
