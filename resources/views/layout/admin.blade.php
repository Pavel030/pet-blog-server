<!DOCTYPE html>
<html>
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Blog's handling</title>
</head>
<body class="body">
<header class="header">
    <div class="header_menu">
        <a href="{{ route('post.handling') }}" class="a {{ Request::is('post/handling') ? 'a_on_page' : '' }}">Posts</a>
        <a class="a w_4">Activity</a>
    </div>
    <div class="header_buttons">
        <a class="a" href="post.list">Go out</a>
    </div>
</header>
@yield('post')
</body>
</html>
