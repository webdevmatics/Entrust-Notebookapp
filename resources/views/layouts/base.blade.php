<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                NoteBook App
            </title>
            <link href="{{asset('dist/css/main.css')}}" rel="stylesheet">
                <link href="{{asset('dist/css/bootstrap.css')}}" rel="stylesheet">
                    {{--
                    <link href="dist/css/bootstrap.css" rel="stylesheet">
                        --}}
                    </link>
                </link>
            </link>
        </meta>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-dark bg-primary">
                <button aria-controls="navbar-header" class="navbar-toggler hidden-sm-up" data-target="#navbar-header" data-toggle="collapse" type="button">
                    ☰
                </button>
                <div class="collapse navbar-toggleable-xs pull-xs-left" id="navbar-header">
                    <a class="navbar-brand" href="{{url('/')}}">
                        NoteBook App
                    </a>
                </div>
                <div  class="navholder dropdown pull-xs-right">
                    @if (Auth::guest())
                    
                        <a style="color:white" href="{{ url('/login') }}">
                            Login
                        </a>

                        &nbsp;&nbsp;
                    
                   
                        <a style="color:white" href="{{ url('/register') }}">
                            Register
                        </a>
                    
                    @else
                    <a class=" navholder dropdown-toggle" data-toggle="dropdown" href="#" id="dropdownMenuButton">
                        {{ ucfirst(Auth::user()->name) }}
                        <span class="caret">
                        </span>
                    </a>
                    <div aria-labelledby="dropdownMenuButton" class="navholder-menu dropdown-menu">
                        <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form action="{{ url('/logout') }}" id="logout-form" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                    @endif
                </div>
            </nav>
           
            @yield('content')
        </div>
        <!-- /container -->
        <script src="{{asset('dist/js/jquery3.min.js')}}">
        </script>
        <script src="{{asset('dist/js/bootstrap.js')}}">
        </script>
        {{--
        <script src="dist/js/bootstrap.js">
        </script>
        --}}
    </body>
</html>
