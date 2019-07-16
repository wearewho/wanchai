<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')

<body class="page-index">

    @include('frontend.partials.header')

	<main class="page-main">
        
        @yield('frontendcontent')

    </main>
    
    @include('frontend.partials.footer')
    
    @include('frontend.partials.javascripts')
</body>

</html>