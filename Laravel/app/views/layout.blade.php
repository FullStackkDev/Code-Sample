<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
  
            <nav class="navbar navbar-inverse">
                @if(Auth::check())
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('users') }}">User Alert</a>
                </div>
                @endif
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('/') }}">Home</a></li>
                    @if(Auth::check())
                        <li><a href="{{ URL::to('profile') }}">Profile</a></li>
                        <li><a href="{{ URL::to('users') }}">View All Users</a></li>
                        <li><a href="{{ URL::to('logout') }}">Logout({{ Auth::user()->username }})</a></li>
                    @else
                        <li><a href="{{ URL::to('login') }}">Login</a></li>
                        <li><a href="{{ URL::to('users/create') }}">Register</a>
                    @endif                    
                </ul>
            </nav>
            
             <!-- check for flash notification message -->
            @if(Session::has('flash_notice'))
                <div id="flash_notice">{{ Session::get('flash_notice') }}</div>
            @endif

            @yield('content')
            
        </div>
    </body>
</html>
