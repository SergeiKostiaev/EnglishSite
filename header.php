<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wp-content/themes/myTheme/style.css">
    <link rel="shortcut icon" href="wp-content/themes/myTheme/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <title>English test site</title>
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="wrap content">
        <div class="logo">
            <a href="#part0"><h1>Название</h1></a>
        </div>
        <nav class="nav">
            <ul class="nav_box">
                <a href="#part1" class="nav_link"><li class="nav_item">Преподаватели</li></a>
                <a href="#part2" class="nav_link"><li class="nav_item">Программы</li></a>
                <a href="price" class="nav_link"><li class="nav_item">Прайс</li></a>
                <a href="#part3" class="nav_link"><li class="nav_item">Контакты</li></a>
            </ul>
        </nav>
        <button class="call_btn" type="submit">Заказать звонок</button>
    </div>
</header>
