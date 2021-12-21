<!doctype html>
<html>
<head>
    @include('admin.includes.head')
</head>
@yield('styles')
<body class="">
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>

    <div class="wrapper">
        @include('admin.includes.sidebar')
        @include('admin.includes.header')

        <div class="content-page">
            @yield('content')
        </div>
    </div>

    <footer class="iq-footer">
        @include('admin.includes.footer')
    </footer>
      @yield('scripts')
    </div>
 
</body>

</html>
