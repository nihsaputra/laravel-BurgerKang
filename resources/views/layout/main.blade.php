<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>BurgerKang | {{$title}}</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/sidebars/sidebars.css" rel="stylesheet">
</head>
<body>


<main>
{{--    SIDEBAR  --}}
    @include('partials.sidebars.sidebar')

{{--  content --}}
    <div class="b-example-divider me-4"></div>
    <div class="container mt-4 " >
        @yield('content')
    </div>

</main>


<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/sidebar/sidebars.js"></script>
</body>
</html>
