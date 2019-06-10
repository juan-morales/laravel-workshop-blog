<!DOCTYPE html>
<html lang="en">
<head>
    <title>Miniblog</title>
    <!-- meta code -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- CSS files -->
    @include("layout.css")
</head>
<body>
    <!-- MASTER CONTAINER -->
    <div class="main-container">
        <!-- HEADER -->
        @include("layout.header")
        <!-- END HEADER -->
        <!-- CONTENT -->
        @yield("content")
        <!-- END CONTENT -->
    </div>

    <!-- JS files -->
    @include("layout.js")
</body>
</html>