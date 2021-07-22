<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hello out there</title>
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>
</head>
<body>
    <img src="https://tech.osteel.me/images/2020/03/04/hello.gif" alt="Hello there" class="center">
    <?php
        try {
            $connection = new PDO('mysql:host=mysql;dbname=demo;charset=utf8', 'root', 'root');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    ?>
</body>
</html>