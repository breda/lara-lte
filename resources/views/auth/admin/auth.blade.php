<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <title> @yield('htmlheader_title', 'تسجيل الدخول') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>


    @if ($app->environment('local'))
       <!-- Bootstrap 3.3.4 -->
       <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" />
       <!-- Bootstrap RTL 3.1.2 -->
       <!-- <link href="/css/bootstrap-rtl.css" rel="stylesheet" type="text/css" /> -->
       <!-- Font Awesome Icons -->
       <link href="/css/font-awesome.css" rel="stylesheet" type="text/css" />
    @else
       <!-- Bootstrap 3.3.4 -->
       <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
       <!-- Bootstrap RTL 3.1.2 -->
       <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.1.2/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" /> -->
       <!-- Font Awesome Icons -->
       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    @endif


    <!-- Theme style -->
    <link href="/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <!-- Main style -->
    <link href="/css/app.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- For any additional css files -->
    @yield('add-css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

@yield('content')

</html>
