<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="/images/favicon.png" type="">
     
      <title>@yield('title')</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="/css/responsive.css" rel="stylesheet" />
   </head>

<body>

    @include ('layouts.header')
        
            @yield('content')
        
    </div>

@include ('layouts.footer')
</body>
</html>
