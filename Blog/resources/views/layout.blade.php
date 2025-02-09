<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>{{ $title }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer-navbar/">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        main > .container {
            padding: 60px 15px 0;
        }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    
  @includeIf('components.menu.header', ['menuItems' => App\Models\MenuItem::orderByDesc('z-index')->limit(10)->get()])

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    @yield('content')
  </div>
</main>

 @includeIf("components.footer.footer")


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
