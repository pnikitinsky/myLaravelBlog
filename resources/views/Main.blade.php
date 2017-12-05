<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials._head')
    </head>
    <body>
        @include('partials._nav')
        <!-- main-content -->
        <div class="container">
            @yield('content')
        </div>
        <hr/><br/>
        <!-- end-main-content -->
        <!--footer -->
        @include('partials._footer')
        @include('partials._javascript')
    </body>
</html>