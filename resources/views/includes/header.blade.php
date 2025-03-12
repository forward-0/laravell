<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه آنلاین</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .card:hover {
            transform: scale(1.05);
            color: #28a745;
            background: #000;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body dir="rtl">
    <div class="content">
        <header style="background-color: #000000; color: #28a745;">
            <h1 class="text-center" style="margin: 0; padding: 20px 0;">فروشگاه آنلاین</h1>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-right">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">صفحه اصلی</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="login.php"> ورود/ثبت نام</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="panel/index.php" target="_blank">مدیریت سایت</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="list_order.php">مدیریت سبد خرید</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="index.php?search=" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    لیست محصولات
                                </a>
                                <ul class="dropdown-menu text-end">
                                    <li><a class="dropdown-item" href="index.php?id=1">محصول 1</a></li>
                                    <li><a class="dropdown-item" href="index.php?id=2">محصول 2</a></li>
                                    <!-- سایر محصولات -->
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">گالری</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" tabindex="-1" aria-disabled="true">درباره ما</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" tabindex="-1" aria-disabled="true">راهنمای سفارش</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="logout.php">خروج از حساب کاربری</a>
                            </li>
                        </ul>
                        <form class="d-flex" action="index.php" role="search">
                            <input class="form-control me-2" name="search" type="search" placeholder="جستجو" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">جستجو</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
    </div>
</body>
</html>
