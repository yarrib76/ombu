<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Ombu Flota Admin</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            @if (Auth::check())
            <ul class="nav navbar-nav">
                <li><a href="/">Mecanica</a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li><a href="/">Seguros</a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li><a href="/">Finanzas</a></li>
            </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="https://www.gravatar.com/avatar/{{{ md5(strtolower(Auth::user()->email)) }}}?s=35" height="35" width="35" class="navbar-avatar">
                            {{ Auth::user()->name }} <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/auth/logout"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            @else
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/auth/login"><i class="fa fa-btn fa-sign-in"></i>Ingresar</a></li>
                    <li><a href="/auth/register"><i class="fa fa-btn fa-user"></i>Registrarse</a></li>
                </ul>
            @endif
        </div>
    </div>
</nav>
