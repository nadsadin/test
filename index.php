<?php
include_once 'Message.php';

$db = new DB();
$messages = Message::all($db);
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/style.css" >

    <title>Test</title>
</head>
<body>
<div class="container-fluid bg-dark text-white">
    <div class="container">
        <nav class="navbar">
            <a class="navbar-brand" href="#">
                <img src="/img/logo.png" height="40">
            </a>
        </nav>
        <div class="row">
            <div class="col-md-3 offset-md-4"><img src="img/contact-icon.png" class="img-fluid"></div>
        </div>
        <form id="form">
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="name">Имя <span class="text-danger">*</span></label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail <span class="text-danger">*</span></label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="form-group">
                        <label for="message">Комментарий <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="message" name="message" rows="6" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-red float-right" id="submit">Записать</button>
                </div>
            </div>
        </form>

    </div>
</div>
<div class="container">
    <h2 class="text-dark-gray text-center p-5">Выводим Комментарии</h2>
    <div class="row comments">
        <?php
            foreach($messages as $message){
                echo $message->html_render();
            }
        ?>
    </div>
</div>
<div class="container-fluid footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="#">
                    <img src="/img/logo.png" height="35">
                </a>
            </div>
            <div class="col-1 text-center">
                <a href="https://facebook.com/" class="icon-facebook"></a>
            </div>
            <div class="col-1 text-center">
                <a href="https://vk.com/" class="icon-vk"></a>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/js/jquery-3.3.1.min.js" ></script>
<script src="/js/bootstrap.min.js" ></script>
<script src="/js/jquery.validate.min.js" ></script>
<script src="/js/script.js"></script>
</body>
</html>