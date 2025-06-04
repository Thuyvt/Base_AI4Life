<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'Home' ?></title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .sidebar {
            height: 90vh; /* 90% chiều cao viewport */
            top: 0;
            left: 0;
            color: black;
            padding-top: 20px;
            /* margin-right: 20px; */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-xxl bg-info justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-uppercase" href="<?= BASE_URL ?>"><b>AI4LIFE - BTC BASE TÍCH HỢP</b></a>
            </li>
        </ul>
    </nav>

    <div class="container bg-light pt-3">
        <div class="row">
            <!-- Side bar trái -->
            <div class="col-md-3 sidebar">
                <!-- Menu dọc -->
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="?act=so-thich">Nhập sở thích</a>
                        </li>
                        <li class="list-group-item">
                            <a href="?act=thong-tin">Thông tin cá nhân</a>
                        </li>
                        <li class="list-group-item">
                            <a href="?act=hoi-dap">Hỏi đáp</a>
                        </li>
                    </ul>
                </div>
             
            </div>
            <div class="col-md-9">
                <h1><?= $title ?? 'Home' ?></h1>
                <p class="text-muted">Chào mừng bạn đến với AI4LIFE - BTC BASE TÍCH HỢP</p>
                <?php
                    if (isset($view)) {
                        require_once PATH_VIEW . $view . '.php';
                    }
                ?>
            </div>
         
        </div>
    </div>

</body>

</html>