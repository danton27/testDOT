<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials._head')
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    @include('admin.partials._navigation')

    <div id="page-wrapper">
        <div class="row">
            @include('admin.partials._page_header')
        </div>
        <!-- /.row -->
        <div class="row">
            @yield('content')
        </div>
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

@include('admin.partials._jquery')

</body>

</html>
