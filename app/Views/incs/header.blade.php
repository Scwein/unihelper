<?php require_once APP . '/Controllers/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'title error' ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="shortcut icon" href="/assets/imgs/icon.jpeg" type="image/x-icon">
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Главная страница</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="/menu">Меню</a>
                        </li>                             

                        <li class="nav-item">
                            <a class="nav-link active" href="/ideas/create">Сохранить идею</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="/ideas">Идеи</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="/tests">Тесты</a>
                        </li>
                    </ul>

                    <span class="navbar-text me-auto">
                        <?php day_or_night($time_h); ?> <?= "$date_day $date_month $time_h:$time_m, $day_of_week" ?>
                    </span>                          
                </div>
            </div>
        </nav>
    </header>

    <main class="main">
        <?php isset($view) ? require_once $view : '' ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>