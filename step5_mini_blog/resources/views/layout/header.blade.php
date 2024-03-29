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
    <div class="auth-section">
        <ul class="auth-menu">
            <li class="menu-item">
                <a href="login.html" class="btn btn-outline-danger">Login</a>
                <a href="register.html" class="btn btn-outline-dark">Register</a>
            </li>
        </ul>
    </div>
    <!-- END AUTH buttons -->
</div>