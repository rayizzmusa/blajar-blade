<!-- template inharitance, parent layout -->
<html>

<head>
    <title>Nama Aplikasi - @yield('title')</title>
</head>

<body>
    <!-- @yield('header') -->
    <!-- @yield('content') -->

    <!-- show directive -->
    @section('header')
    <p>Default header</p>
    @show

    @section('content')
    <p>default content</p>
    @show
</body>

</html>