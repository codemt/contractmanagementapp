<div class="navbar navbar-default">
    <div class="navbar-header">
        <a class="navbar-brand navbar-brand-center" href="">
            <img class="navbar-brand-logo" src="{{ asset('img/ics.svg') }}" alt="ICS Elevator">
        </a>
        <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
            <span class="sr-only">Toggle navigation</span>
            <span class="bars">
                <span class="bar-line bar-line-1 out"></span>
                <span class="bar-line bar-line-2 out"></span>
                <span class="bar-line bar-line-3 out"></span>
            </span>
            <span class="bars bars-x">
                <span class="bar-line bar-line-4"></span>
                <span class="bar-line bar-line-5"></span>
            </span>
        </button>
        <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="arrow-up"></span>
            <span class="ellipsis ellipsis-vertical">
                <img class="ellipsis-object" width="32" height="32" src="{{ asset('img/profile.jpg') }}" alt="Teddy Wilson">
            </span>
        </button>
    </div>

    @php
        $url = "";
        $user = "";
        $gaurd = "";
        if(Auth::guard('supervisor')->check())
        {
            $url = "/supervisor/logout";
            $user = auth()->guard('supervisor')->user();
            $guard = 'supervisor';
        }

        elseif(Auth::guard('technician')->check())
        {
            $url = "/technician/logout";
            $user = auth()->guard('technician')->user();
            $guard = 'technician';
        }

        elseif(Auth::guard('tester')->check())
        {
            $url = "/tester/logout";
            $user = auth()->guard('tester')->user();
            $guard = 'tester';
        }

        elseif(Auth::guard('stock')->check())
        {
            $url = "/stock/logout";
            $user = auth()->guard('stock')->user();
            $guard = 'stock';
        }
        elseif(Auth::guard('ic')->check())
        {
            $url = "/ic/logout";
            $user = auth()->guard('ic')->user();
            $guard = 'ic';
        }

        elseif(Auth::guard('web')->check())
        {
            $url = "/logout";
            $user = auth()->guard('web')->user();
            $guard = 'client';
        }
    @endphp

    <div class="navbar-toggleable">
        <nav id="navbar" class="navbar-collapse collapse">
            <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="bars">
                    <span class="bar-line bar-line-1 out"></span>
                    <span class="bar-line bar-line-2 out"></span>
                    <span class="bar-line bar-line-3 out"></span>
                    <span class="bar-line bar-line-4 in"></span>
                    <span class="bar-line bar-line-5 in"></span>
                    <span class="bar-line bar-line-6 in"></span>
                </span>
            </button>
            <ul class="nav navbar-nav navbar-right">
                <li class="visible-xs-block">
                    <h4 class="navbar-text text-center">Hi,{{auth()->guard((get_guard()=="client")?"web":get_guard())->user()->name}}</h4>
                </li>
                <li class="dropdown hidden-xs">
                    <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
                        <img class="rounded" width="36" height="36" src="{{ asset('img/profile.jpg') }}" alt="">
                         <span class="text-capitalize">
                           {{auth()->guard((get_guard()=="client")?"web":get_guard())->user()->name}}
                        </span> 
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="{{route('profile')}}" >Profile</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ url($url) }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="visible-xs-block">
                    <a href="{{route('profile')}}">
                        <span class="icon icon-user icon-lg icon-fw"></span>
                        Profile
                    </a>

                </li>
                <li class="visible-xs-block">
                    <a href="{{ url($url) }}"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </li>
            </ul>
        </nav>
        <form id="logout-form" action="{{ url($url) }}" method="POST" style="display: none;">
           {{ csrf_field() }}
        </form>
    </div>
</div>
