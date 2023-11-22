<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">

   <title>@yield('title')</title> 

</head>
<body id="top">
    
    {{-- -------------------------------nav--------------------------- --}}

    @include('include.nav')

    {{-- -------------------------------nav--------------------------- --}}

    {{-- ------------------------------header------------------------ --}}

    @include('include.header')

    {{-- ------------------------------header------------------------ --}}




    {{-- ------------------------------content------------------------ --}}

    @yield('content')

    {{-- ------------------------------content------------------------ --}}




    {{-- ------------------------------footer------------------------ --}}

    @include('include.footer')
    
    {{-- ------------------------------footer------------------------ --}}

</body>
</html>