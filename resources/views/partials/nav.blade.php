<nav class="navbar navbar-default navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">正在学</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ (Request::is('/') ? 'active' : '') }}">
                    <a href="{{ url('') }}"><i class="fa fa-home"></i> 首页</a>
                </li>
                <li class="{{ (Request::is('teachers') ? 'active' : '') }}">
                    <a href="{{ url('teachers') }}">匠人传道</a>
                </li>
                <li class="{{ (Request::is('lessons') ? 'active' : '') }}">
                    <a href="{{ url('lessons') }}">体验授业</a>
                </li>
                <li class="{{ (Request::is('products') ? 'active' : '') }}">
                    <a href="{{ url('products') }}">学以致用</a>
                </li>
                <li class="{{ (Request::is('activity') ? 'active' : '') }}">
                    <a href="{{ url('activity') }}">活动正当时</a>
                </li>
                <li class="{{ (Request::is('about') ? 'active' : '') }}">
                    <a href="{{ url('about') }}">关于我们</a>
                </li>
                <li class="{{ (Request::is('contact') ? 'active' : '') }}">
                    <a href="{{ url('contact') }}">联系我们</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li class="{{ (Request::is('auth/login') ? 'active' : '') }}"><a href="{{ url('auth/login') }}"><i
                                    class="fa fa-sign-in"></i> 登录</a></li>
                    <li class="{{ (Request::is('auth/register') ? 'active' : '') }}"><a
                                href="{{ url('auth/register') }}">注册</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->name }} <i
                                    class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            @if(Auth::check())
                                @if(Auth::user()->admin==1)
                                    <li>
                                        <a href="{{ url('admin/dashboard') }}"><i class="fa fa-tachometer"></i> Admin Dashboard</a>
                                    </li>
                                @endif
                                <li role="presentation" class="divider"></li>
                            @endif
                            <li>
                                <a href="{{ url('auth/logout') }}"><i class="fa fa-sign-out"></i> 登出</a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>