<div class="header">
    <h3 class="app-name">
        <img class="header-logo" src="{{ asset('logo.png') }}" height="40">
        Mini-Blog
    </h3>
    <div class="header-menu">
        <ul>
            <li class="menu-item">
                <a href="{{ route("posts") }}">Posts</a>
            </li>
        </ul>
    </div>
    <!-- AUTH buttons -->
    @auth
    <div class="auth-section">
        <ul class="auth-menu">
            <li class="menu-item">
                <span>Logged in as <b>{{ auth()->user()->name }}</b></span>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <input type="submit" class="btn btn-outline-danger" value="Logout"/>
                </form>
                
            </li>
        </ul>
    </div>
    @endauth
    @guest
    <div class="auth-section">
        <ul class="auth-menu">
            <li class="menu-item">
                <a href="{{ route('login') }}" class="btn btn-outline-danger">Login</a>
                <a href="{{ route('register') }}" class="btn btn-outline-dark">Register</a>
            </li>
        </ul>
    </div>
    @endguest
    <!-- END AUTH buttons -->
</div>