<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">

    <script src="/js/jquery-1.8.3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    
    <title>admin_panel</title>
    @yield('styles')
</head>

<body>

    <div id="app">

                <my-header></my-header>
                <!-- Page Content -->
        <div class="container-fluid">

            <div class="row">
            
                
                <!-- Blog Sidebar Widgets Column -->
                <div class="col-md-2 side_bar_parent">
                       <side-bar></side-bar>
                </div>

                <!-- Blog Entries Column -->
                <div class="col-md-10 content-admin" >
                    <router-view></router-view>
                </div>

            </div>
            <!-- /.row -->
            <hr>
        </div>
    </div>
    <!-- /.container -->
    @yield('scripts')
    <script>
        window.Laravel = {};
        window.Laravel.Auth = '{{ Auth::check() }}' == '' ? false : true;
        window.Laravel.csrfToken = '{{ csrf_token() }}'
    </script>
    <script src="/js/app.js"></script>
   


</body>

</html>
