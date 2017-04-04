<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="/events"><strong>2017 Line-Up</strong></a></li>
                      <li><a href="/information"><strong>Information</strong></a></li>
                      <li><a href="/2017-sponsors"><strong>Sponsors</strong></a></li>
                      <li><a href="/charities"><strong>Charities</strong></a></li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())

                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              @if (Auth::user()->hasRole('LeveeManager'))
                              <li><a href="/admin/events">All Events</a></li>
                              <li><a href="/admin/events/create">Create Event</a></li>
                              <li><a href="/admin/sponsors">All Sponsors</a></li>
                              <li><a href="/admin/sponsors/create">Add Sponsor</a></li>
                              @endif
                              @if (Auth::user()->hasRole('SuperManager'))
                              <li><a href="/admin/roles/create">Role Create</a></li>
                              <li><a href="/admin/users">Users</a></li>
                              @endif
                            </ul>
                          </li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                                <ul class="dropdown-menu" role="menu">

                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
