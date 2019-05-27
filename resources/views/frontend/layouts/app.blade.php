<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.partials.head')
</head>
<body itemscope>
    <main class="paddlrb40" style="padding-top: 40px;">

        @include('frontend.partials.header')
        
        @yield('frontendcontent')

    </main><!-- Main Wrapper -->
            
    @include('frontend.partials.footer')

    @include('frontend.partials.javascripts')
</body>	
</html>