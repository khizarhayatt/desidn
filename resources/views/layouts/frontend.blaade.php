<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Homepage</title>
    <!-- Stylesheets -->
    @include('frontend.partials.head')
   
</head>

<body>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>
      
        @include('frotend.partials.header') 
        <div class="main-content-wrapper">
            @yield('content')
        </div>

        @include('frotend.partials.footer')
        @include('frotend.partials.script')
</body>

</html>