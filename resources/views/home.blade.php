<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Example App || Add Product Page</title>

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
                <div class="custom-header-div">
                    <span class="custom-header">Add Product</span>
                </div>
                <form class="custom-form-parent" action="{{ url('/AddProduct') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="input-parent">
                        <label class="custom-label"for="productTitle">Product Title</label>
                        <input class="custom-input" type="text" name="productTitle" id="productTitle">
                    </div>
                    <div class="input-parent">
                        <label class="custom-label"for="productDesc">Product Description</label>
                        <textarea class="custom-input" type="text" name="productDesc" id="productDesc"></textarea>
                    </div>
                    <div class="input-parent">
                        <label class="custom-label"for="productImg">Product Image</label>
                        <input class="custom-input" type="file" name="productImg" id="productImg" accept="image/*">
                    </div>
                    <div class="btn-container">
                        <button type="submit" class="custom-btn">Add Product</button>
                    </div>
                </form>
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
