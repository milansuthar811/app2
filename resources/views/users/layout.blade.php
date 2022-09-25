<!DOCTYPE html>
<html lang="en">
    @include('layouts.partials.header')
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @auth
            @include('layouts.navbar')
            <!-- @include('layouts.sidebar') -->
            <main class="container">
                @yield('content')
            </main>
            @include('layouts.partials.footer')

            @endauth
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
        </div>

 <!-- DataTables  & Plugins -->
 
    </body>
</html>
