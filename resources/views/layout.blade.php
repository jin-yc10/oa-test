<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet" />
    <script type="application/javascript" src="/js/jquery-1.11.3.min.js"></script>
    <script type="application/javascript" src="/js/bootstrap.min.js"></script>
@yield('head')
</head>
<body>
@yield('body')
</body>
@yield('tail')
</html>
