<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <!-- текущие необходимые стили на сайте, не стоит использовать повторно -->
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/webdebug.ruble.a.css">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/str.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- текущие необходимые стили на сайте, не стоит использовать повторно -->

  <!-- нужные стили для новых сверстанных страниц - можно использовать не минифицированный -->
  <link rel="stylesheet" href="css/dr-custom.css">
  <!-- нужные стили для новых сверстанных страниц - можно использовать не минифицированный -->
</head>
<body>
<style>
    header.header-for-test {
        position: fixed;
        background: #fff;
        z-index: 9;
        width: 100%;
        height: 80px;
        border-bottom: 2px solid #f9f9f9;
    }

    header.header-for-test ~ * {
        margin-top: 80px;
    }

    .scroll-fixed-sidebar {
        top: 80px;
    }
</style>
