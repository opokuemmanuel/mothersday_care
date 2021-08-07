
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link href="{{ asset('./assets1/assets/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('./assets1/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./assets1/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./assets1/assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('./assets1/assets/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./assets1/assets/css/cs-skin-elastic.css') }}" rel="stylesheet">
    <link href="{{ asset('./assets1/assets/scss/style.css') }}" rel="stylesheet">
    <link href="{{ asset('./assets1/assets/css/lib/vector-map/jqvmap.min.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <a class="navbar-brand" ><img src=" {{ asset('./assets1/assets/images/logo.png') }}" alt="Logo"></a>
            <a class="navbar-brand hidden" ><img src=" {{ asset('./assets1/assets/images/logo2.png') }}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{route('admin')}}"> <i class="menu-icon fa fa-dashboard"></i>Admin Dashboard </a>
                </li>


                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Menu</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{route('payment')}}">Payment</a></li>
                        <li><i class="fa fa-table"></i><a href="{{route('viewStock')}}">Stock</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{route('procat')}}">Add Product</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{route('cat')}}">Add Category</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{route('viewCategory')}}">Category</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{route('viewProduct')}}">Product</a></li>
                        <li><i class="fa fa-table"></i><a href="{{route('viewNoti')}}">Notification</a></li>
                    </ul>
                </li>


            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">

                    <div class="form-inline">

                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="{{ asset('./assets1/assets/images/admin.jpg') }}" alt="User Avatar">

                    </a>
                </div>
            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Bordered Table</strong>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <div id="app">
                            @if(!empty($successMsg))
                                <div class="alert alert-success">
                                    {{$successMsg}}
                                </div>
                            @endif
                        </div>
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Category name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        @foreach($pro as $prod)
                        <tbody>
                        <tr>
                            <td>{{$prod->id}}</td>
                            <td>{{$prod->category_name}}</td>
                            <td><img src="{{ asset('/core/public/post/'. $prod->image) }}" class="img-responsive" style="width:50px; height:50px"></td>
                            <td>
                                <a href="{{url('/EditPost/'.$prod->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{url('/DeletePost/'.$prod->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->
<script src="{{ asset('./assets1/assets/js/vendor/jquery-2.1.4.min.js') }}" ></script>
<script src="{{ asset('./assets1/assets/js/plugins.js') }}" ></script>
<script src="{{ asset('./assets1/assets/js/main.js') }}" ></script>
<script src="{{ asset('./assets1/assets/js/dashboard.js') }}" ></script>
<script src="{{ asset('./assets1/assets/js/lib/chart-js/Chart.bundle.js') }}" ></script>
<script src="{{ asset('./assets1/assets/js/widgets.js') }}" ></script>
<script src="{{ asset('./assets1/assets/js/lib/vector-map/jquery.vmap.min.js') }}" ></script>
<script src="{{ asset('./assets1/assets/js/lib/vector-map/jquery.vmap.js') }}" ></script>
<script src="{{ asset('./assets1/assets/js/lib/vector-map/jquery.vmap.sampledata.js') }}" ></script>
<script src="{{ asset('./assets1/assets/js/lib/vector-map/country/jquery.vmap.world.js') }}" ></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>


<script>
    ( function ( $ ) {
        "use strict";

        jQuery( '#vmap' ).vectorMap( {
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: [ '#1de9b6', '#03a9f5' ],
            normalizeFunction: 'polynomial'
        } );
    } )( jQuery );
</script>

</body>
</html>


