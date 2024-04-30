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
                <a class="custom-btn-02" href="{{ url('AddProduct') }}">Add</a>
                <a class="custom-btn-02" href="{{ url('ShowProduct') }}">View All</a>
            </div>
        </nav>
        <main class="main-container">
            <div class="flex flex-col justify-center items-center w-full">
                <div class="product-header-div">
                    <span class="custom-header">All Products</span>
                </div>
                <div class="product-parent">
                    @foreach ($data as $data)
                        <div class="product-container">
                            <img src="product/{{ $data->image }}" alt={{ $data->title }}>
                            <div class="product-container-text">
                                <h4 class="custom-label">{{ $data->title }}</h4>
                                <span class="">{{ $data->description }}</span>
                                <div class="btn-container">
                                    <a href="{{ url('EditProduct', $data->id) }}" class="custom-btn-02">Edit</a>
                                    <a onclick="return confirm('Are you sure you want to delete this?');" href="{{ url('DeleteProduct', $data->id) }}" class="custom-btn-02">Delete</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
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
