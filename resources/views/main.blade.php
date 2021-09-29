<!doctype html>
<html lang="en">
<head>
    @include('partial/_head')
    @include('partial/_css')
</head>
<body>

    @include('partial/_nav')
        <div style="margin-top: 5%;">
            @yield('content')
        </div>

    @include('partial/_footer')
    @include('partial/_script')

    @yield('script')
</body>
</html>
