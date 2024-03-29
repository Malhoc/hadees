<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        @if (true)
                        <img alt="image" class="img-circle" src="{{asset('adminpanel')}}/img/default_profile_image.png" style="width: 70px; height: 70px"/>
                        @else
                        <img alt="image" class="img-circle" src="{{asset('storage')}}/images/{{Auth::user()->profile_image}}" style="width: 70px; height: 70px"/>
                        @endif
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs">
                                <strong class="font-bold">{{Auth::user()->name}}</strong>
                            </span> <span class="text-muted text-xs block"><b
                                    class="caret"></b></span>
                        </span>
                    </a>
                    {{-- <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="">My Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Setingg</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul> --}}
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li>
                <a href="{{route('admin.dashboard')}}">
                    <i class="fa fa-dashboard"></i>
                    <span class="nav-label">Dashboard</span>
                    {{-- <span class="fa arrow"></span> --}}
                    {{-- <span class="pull-right label label-primary">SPECIAL</span> --}}

                </a>

            </li>



            <li class="@if (request()->is('videos/*'))  {{'active'}} @else {{''}} @endif">
                <a href="{{route('admin.videos.index')}}">
                    <i class="fa fa-users"></i>
                    <span class="nav-label">Videos</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('admin.videos.create')}}">Create New</a></li>
                    <li><a href="{{route('admin.videos.index')}}">List</a></li>
                </ul>
            </li>

            <li class="@if (request()->is('videos/*'))  {{'active'}} @else {{''}} @endif">
                <a href="{{route('admin.videos.index')}}">
                    <i class="fa fa-users"></i>
                    <span class="nav-label">Blogs</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('admin.blogs.create')}}">Create New</a></li>
                    <li><a href="{{route('admin.blogs.index')}}">List </a></li>
                </ul>
            </li>




        </ul>

    </div>
</nav>
