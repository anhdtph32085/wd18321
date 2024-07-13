<!DOCTYPE html>
<html lang="en">

<head>
<base href="/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 bg-info position-fixed top-0 start-0 sidebar">
                <h3 class="mt-3 text-light">Shoppe</h3>
                <div class="list-group mt-4">
                    <a href="#" class="list-group-item ">
                        Quản lý người dùng
                    </a>
                    <a href="#" class="list-group-item">
                        Quản lý sản phẩm
                    </a>
                    <a href="#" class="list-group-item ">
                        Báo cáo
                    </a>
                    <a href="#" class="list-group-item ">
                        Thống kê
                    </a>
                </div>
            </div>
            <div class="col-9 offset-3 p-0 position-relative">
                <div class="bg-primary header">
                    <h3 class="text-light layer">
                        <span>Shoppe</span>
                        <span>Quản lý sản phẩm</span>
                    </h3>

                    <div class="dropdown">
                        <img class="dropdown-toggle" src="assets/image/avatar.jpg" alt="" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown">
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">My profile</a></li>
                            <li><a class="dropdown-item" href="#">Language</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
<!-- main -->@yield('body')
                <div class="bg-warning ps-4 pt-3 position-absolute end-0" style="height: 60px; width: 100%;">
                    <h5 class="text-light">
                        @Copyright bootstrap
                    </h5>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>