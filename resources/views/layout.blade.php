<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container">
                <a><img class="ms-5" src="logo.jpg" alt="Snow" style="width: 60px;">
                    <h5 class="ms-5"> Быстро и вкусно</h5>
                </a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <ul id="page" class="nav nav-pills nav-pills ">
                    <li class="nav-item"><a class="nav-link" href="main">Главная</a></li>
                    <li class="nav-item"><a class="nav-link" href="catalog">Наша продукция</a></li>
                    <li class="nav-item"><a class="nav-link" href="reviews">Оставить отзыв</a></li>
                    <li hidden="hidden" id="adm" class="nav-item"><a class="nav-link" href="admin">Администрирование</a></li>
                </ul>
            </div>
            <div  id="cart" class="nav-item mx-5 text-warning"><a class="text-warning" href="show"><?php  echo Session::get('items_count') ?>
                    <img src="cart.png" width="50" height="50" alt="cart"></a></div>
        </nav>
        @yield('content')
    </div>
</body>

</html>

<style ENGINE="text/css">
    body {
        font: 40px;
        color: darkblue;
    }

    .container {
        position: relative;
        text-align: center;
        color: darkblue;
    }

    h5 {
        color: darkorange;
    }

    .nav-link {
        text-decoration: none;
        color: yellow;
    }

    .nav-link:hover {
        color: darkorange;
    }

    .act {
        color: darkorange;
    }
</style>

<script type="text/javascript">
    try {
        var el = document.getElementById('page').getElementsByTagName('a');
        var url = document.location.href;
        for (var i = 0; i < el.length; i++) {
            if (url == el[i].href) {
                el[i].className += ' act';
            };
        };
    } catch (e) {}

    <?php
    $value = Session::get('auth');
    if ($value == true) {
    ?>
    document.getElementById("adm").hidden = false;
    <?php
    }
    ?>
</script>