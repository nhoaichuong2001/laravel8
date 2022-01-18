<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/main.css')
}}" />

<link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/font-awesome/4.7.0/css/font-awesome.min.css')}}"/>

<title>@yield('title')</title>
</head>
<body class="app sidebar-mini rtl">
    @include('admin.partials.header')
    @include('admin.partials.navbar')
    <main class="app-content">
        @yield('content')
    </main>
<script src="{{ asset('backend/assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/main.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/pace.min.js') }}"></script>
</body>
</html>