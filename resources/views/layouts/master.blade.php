<!DOCTYPE html>
<html lang="en">
<head>
	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{!! csrf_token() !!}"/>

    <title>@yield('title')</title>
    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/dropzone.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/stylesheets/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/icon.png">


</head>
<body>

@include('navigation')

  @yield('content')

@include('footer')



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap-filestyle.min.js"></script>

@yield('scripts')

</body>
</html>