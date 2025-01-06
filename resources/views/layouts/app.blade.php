<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.header')
</head>

<body>
    <!-- Header -->
    @include('partials.navbar')
    <!-- Main Content -->
    @yield('content')
    <!-- Footer -->
    @include('partials.footer')
</body>

</html>
