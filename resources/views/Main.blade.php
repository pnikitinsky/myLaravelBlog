<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials._head')
    </head>
    <body>
        @include('partials._nav')
        <!-- main-content -->
        <div class="container">
            @if(Session::has('message'))
                <div class="alert  alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif
            @yield('content')
        </div>
        <hr/><br/>
        <!-- end-main-content -->
        
        <!--footer -->
        @include('partials._footer')
        @include('partials._javascript')
    </body>
</html>