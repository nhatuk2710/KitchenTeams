<!DOCTYPE html>
<html lang="en">
@includeIf('html.head')
<body class="nav-md">
<div class="container body">
    <div class="main_container">

            @includeIf('html.leftnav')


        <!-- top navigation -->

            @includeIf('html.header')

        <!-- /top navigation -->

        <!-- page content -->
        @yield('all')
@includeIf('html.footer')
    </div>
</div>
@includeIf('html.script')

</body>
</html>

