<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@section('title') 正在学在线教育 @show</title>
    @section('meta_keywords')
        <meta name="keywords" content="your, awesome, keywords, here"/>
    @show @section('meta_description')
        <meta name="description"
              content=""/>
    @show

		<link href="{{ asset('css/site.css') }}" rel="stylesheet">
        <script src="{{ asset('js/site.js') }}"></script>

    @yield('styles')
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="{!! asset('assets/site/ico/favicon.ico')  !!} ">
</head>
<body>
@include('partials.nav')

<div class="container">
@yield('content')
</div>
@include('partials.footer')

<!-- Scripts -->
@yield('scripts')

</body>
</html>
