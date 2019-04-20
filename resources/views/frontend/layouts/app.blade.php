<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.partials.head')
</head>
<body itemscope>
    <main>

        @include('frontend.partials.header')
        
        @yield('frontendcontent')
            
        @include('frontend.partials.footer')

    </main><!-- Main Wrapper -->

    @include('frontend.partials.javascripts')
</body>	
</html>