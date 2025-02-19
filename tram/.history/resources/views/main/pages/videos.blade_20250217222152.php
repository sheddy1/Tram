@include('main.welcome_component.header')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="icon" href="{{ asset('images/tream_logo_header.png') }}">
    <link rel="stylesheet" href="{{ asset('css/main/pages/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/welcome_component/home_header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/welcome_component/section2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/welcome_component/section3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/welcome_component/live_break.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/welcome_component/section4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/welcome_component/news_break.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/welcome_component/section5.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/welcome_component/section6.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/welcome_component/section7.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/welcome_component/radio_break.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/welcome_component/footer.css') }}">
</head>
<body>
    <div>
        @yield('header')
    </div>

    {{--  <div>
        <img style="margin-left:130px" src="{{ asset('images/coming_soon.png') }}" alt="search" class="" >
        <h2 >Our Website is Comming Soon</h2>
    </div  --}}
</body>
</html>
