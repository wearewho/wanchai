<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.partials.head')
</head>
<body itemscope>
    <div class="fakeLoader"></div>
    <main>
        <div class="paddlr60">
            @include('frontend.partials.indexheader')
            
            @yield('frontendcontent')
            
        </div>
        
        @include('frontend.partials.footer')

    </main><!-- Main Wrapper -->

    @include('frontend.partials.javascripts')
</body>	
</html>