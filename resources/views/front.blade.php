<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Restoran SMK </title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="mt-2">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a href="#"><img style="width: 300px" src="{{ asset('gambar/logo.jpeg') }}" alt=""></a>
                    <ul class="navbar-nav gap-5">
                        <li class="nav-item">Cart</li>
                        <li class="nav-item">Register</li>
                        <li class="nav-item">Email</li>
                        <li class="nav-item">login</li>
                        <li class="nav-item">logout</li>
                    </ul>
                </div>
            </nav>
        </div>
        <div>
            <div>
                kategori
            </div>
            <div>
                content
            </div>
        </div>
        <div>
            footer
        </div>
    </div>

    <script src="{{ asset('boostrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>