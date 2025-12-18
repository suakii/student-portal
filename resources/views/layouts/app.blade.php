<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Student Portal')</title>
</head>
<body>

<header>
    <h1>학생 관리 시스템</h1>
    <nav>
        <a href="/">홈</a> |
        <a href="/students/1">학생</a>
    </nav>
    <hr>
</header>

<main>
    @yield('content')
</main>

<footer>
    <hr>
    <p>© 2025 경기과학고</p>
</footer>

</body>
</html>
