<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Example App || Products Page</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/App.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Styles.css') }}">
</head>

<body class="layout">
    <div class="wrapper">
        <nav class="nav-container">
            <a class="" href="/">Example App</a>
            <div class="btns-container">
                <a class="custom-btn-02" href="{{ url('AddProduct') }}">Add Product</a>
                <a class="custom-btn-02" href="{{ url('ShowProduct') }}">Show Product</a>
            </div>
        </nav>
        <main class="main-container">
            <div class="flex flex-col justify-center items-center w-full">
            </div>
        </main>
        <footer class="footer-container">
            <span>&#169;
                <script>
                    document.write(new Date().getFullYear());
                </script>. All rights reserved Abdul-Quayum
            </span>
        </footer>
    </div>
</body>

</html>
