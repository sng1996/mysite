<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width, initial-scale=1.0">
    <title>Main</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="my.css" rel="stylesheet">
</head>
<body>
<div class="img">
    <div class="img-overlay">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header" style="margin-left: 2vw">
                    <a class="navbar-brand" href="#">
                        <img alt="Brand" src="/static/business-training.png" height="30px">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right" style="margin-right: 2vw;">
                        <li><a class="toptext" href="#products">Продукты</a></li>
                        <li><a class="toptext" href="blog.php">Блог</a></li>
                        <li><a class="toptext" href="#about">О нас</a></li>
                        <li><a class="toptext" href="#saying">Отзывы</a></li>
                        <li style="margin-left: 5vw">
                            <form class="navbar-form navbar-right">
                                <a href="#" class="btn btn-sm btn-custom">Подписаться</a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <h1 class="maintext">Наша миссия</h1>
        <h1 class="maintext" style="padding-top: 0px">зарабатывать деньги</h1>
        <h1 class="maintext" style="padding-top: 0px">быстро и легко</h1>
    </div>
</div>
<div class="followers-block">
    <h1 class="followers-header">К нам уже присоединились 2,749,513 счастливчиков</h1>
    <div class="col-md-10 col-md-offset-2" style="margin-top: 20px;">
        <div class="col-md-2" style="text-align: center">
            <img class="followers-icons" src="static/mail_icon.png">
            <h3 style="color: white;">1,345,356</h3>
        </div>
        <div class="col-md-2" style="text-align: center">
            <img class="followers-icons" src="static/facebook_icon.png">
            <h3 style="color: white;">1,345,356</h3>
        </div>
        <div class="col-md-2" style="text-align: center">
            <img class="followers-icons" src="static/twitter_icon.png">
            <h3 style="color: white;">1,345,356</h3>
        </div>
        <div class="col-md-2" style="text-align: center">
            <img class="followers-icons" src="static/youtube_icon.png">
            <h3 style="color: white;">1,345,356</h3>
        </div>
        <div class="col-md-2" style="text-align: center">
            <img class="followers-icons" src="static/vk_icon.png">
            <h3 style="color: white;">1,345,356</h3>
        </div>
    </div>
</div>
<a name="products"></a>
<div class="products-block">
    <h1 class="products-header">Что ты хочешь зарядить сегодня?</h1>
    <!--<div class="col-md-6 light_div">
        <img src="static/man.png" class="products-icon">
        <h1 class="products-text">Заряди себя</h1>
        <h4 class="products-text">Развитие собственных компетенций</h4>
    </div>
    <div class="col-md-6 dark_div">
        <img src="static/team.png" class="products-icon">
        <h1 class="products-text">Заряди команду</h1>
        <h4 class="products-text">Навыки управления людьми</h4>
    </div>
    <div class="col-md-6 dark_div">
        <img src="static/business.png" class="products-icon">
        <h1 class="products-text">Заряди клиентов</h1>
        <h4 class="products-text">Эффективные взаимоотношения с клиентом</h4>
    </div>
    <div class="col-md-6 light_div">
        <img src="static/trener.png" class="products-icon">
        <h1 class="products-text">Тренер</h1>
        <h4 class="products-text">Развитие личности и саморазвитие</h4>
    </div>-->
    <div class="col-md-4 light_div">
        <a class="products-block" href="ZaryadiSebya.php">
            <img src="static/man.png" class="products-icon">
            <h1 class="products-text">Заряди себя</h1>
            <h4 class="products-text">Развитие собственных компетенций</h4>
        </a>
    </div>
    <div class="col-md-4 dark_div">
        <img src="static/team.png" class="products-icon">
        <h1 class="products-text">Заряди команду</h1>
        <h4 class="products-text">Навыки управления людьми</h4>
    </div>
    <div class="col-md-4 light_div">
        <img src="static/business.png" class="products-icon">
        <h1 class="products-text">Заряди клиентов</h1>
        <h4 class="products-text">Эффективные взаимоотношения с клиентом</h4>
    </div>
</div>
<a name="saying"></a>
<div class="saying-block">
    <h1 class="saying-header">Отзывы клиентов</h1>
    <div style="float:left; margin-top:30px; width: 50vw">
        <div class="col-md-1">
            <img src="static/avatar.png" class="saying-icon">
        </div>
        <div class="col-md-9 col-md-offset-2">
            <h3 class="saying-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut magna placerat, faucibus ipsum in, dapibus enim. Donec dapibus nibh non sem imperdiet interdum. Curabitur nec quam molestie, viverra urna sit amet, posuere nisi. Duis feugiat luctus lacus vel laoreet. Praesent a mattis mauris. Nunc porta mi nulla, non sodales felis tincidunt id.</h3>
        </div>
    </div>
    <div style="float:right; margin-top:30px; width: 50vw">
        <div class="col-md-1">
            <img src="static/avatar.png" class="saying-icon">
        </div>
        <div class="col-md-9 col-md-offset-2">
            <h3 class="saying-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut magna placerat, faucibus ipsum in, dapibus enim. Donec dapibus nibh non sem imperdiet interdum. Curabitur nec quam molestie, viverra urna sit amet, posuere nisi. Duis feugiat luctus lacus vel laoreet. Praesent a mattis mauris. Nunc porta mi nulla, non sodales felis tincidunt id.</h3>
        </div>
    </div>
    <div style="float:left; margin-top:30px; width: 50vw">
        <div class="col-md-1">
            <img src="static/avatar.png" class="saying-icon">
        </div>
        <div class="col-md-9 col-md-offset-2">
            <h3 class="saying-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut magna placerat, faucibus ipsum in, dapibus enim. Donec dapibus nibh non sem imperdiet interdum. Curabitur nec quam molestie, viverra urna sit amet, posuere nisi. Duis feugiat luctus lacus vel laoreet. Praesent a mattis mauris. Nunc porta mi nulla, non sodales felis tincidunt id.</h3>
        </div>
    </div>
    <div style="float:right; margin-top:30px; width: 50vw;">
        <div class="col-md-1">
            <img src="static/avatar.png" class="saying-icon">
        </div>
        <div class="col-md-9 col-md-offset-2">
            <h3 class="saying-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut magna placerat, faucibus ipsum in, dapibus enim. Donec dapibus nibh non sem imperdiet interdum. Curabitur nec quam molestie, viverra urna sit amet, posuere nisi. Duis feugiat luctus lacus vel laoreet. Praesent a mattis mauris. Nunc porta mi nulla, non sodales felis tincidunt id.</h3>
        </div>
    </div>
</div>
<div style="text-align: center; padding-top: 30px;">
    <a href="#" class="btn btn-sm btn-custom">Все отзывы</a>
</div>
<div class="comp-block">
    <h1 class="products-header">Компании, с которыми мы работаем</h1>
    <div class="col-md-3 light_div" style="height: 200px">
        <img src="static/google.png" class="comp-icon">
    </div>
    <div class="col-md-3 dark_div" style="height: 200px">
        <img src="static/google.png" class="comp-icon">
    </div>
    <div class="col-md-3 light_div" style="height: 200px">
        <img src="static/google.png" class="comp-icon">
    </div>
    <div class="col-md-3 dark_div" style="height: 200px">
        <img src="static/google.png" class="comp-icon">
    </div>
    <div class="col-md-3 dark_div" style="height: 200px">
        <img src="static/google.png" class="comp-icon">
    </div>
    <div class="col-md-3 light_div" style="height: 200px">
        <img src="static/google.png" class="comp-icon">
    </div>
    <div class="col-md-3 dark_div" style="height: 200px">
        <img src="static/google.png" class="comp-icon">
    </div>
    <div class="col-md-3 light_div" style="height: 200px">
        <img src="static/google.png" class="comp-icon">
    </div>
</div>
<div style="text-align: center; margin-top: 30px;">
    <a href="#" class="btn btn-sm btn-custom">Все компании</a>
</div>
<a name="about"></a>
<div>
    <h1 class="products-header">Кто мы?</h1>
    <h3 class="products-text">Мы команда безнес-тренеров, которая поможет вам стать счастливее</h3>
    <div class="col-md-offset-3 col-md-3" style="margin-top: 20px; text-align: center;">
        <img src="static/Arkadiy.png" height="350px">
    </div>
    <div class="col-md-3" style="margin-top: 20px; text-align: center;">
        <img src="static/roma.png" height="350px">
    </div>
    <div class="personal-block">
        <div class="col-md-offset-3 col-md-3" style="text-align: center">
            <h3>Аркадий Коваленко</h3>
            <h4 class="products-text">Бизнес-тренер</h4>
            <img src="static/facebook_icon_green.png" height="20px">
            <img src="static/linkedin.png" height="20px" style="margin-left:10px">
            <img src="static/skype_icon.png" height="20px" style="margin-top: 5px; margin-left: 10px">
        </div>
        <div class="col-md-3" style="text-align: center; margin-left: 20px;">
            <h3>Роман Рычажков</h3>
            <h4 class="products-text">Бизнес-блогер</h4>
            <img src="static/facebook_icon_green.png" height="20px">
            <img src="static/linkedin.png" height="20px" style="margin-left:10px">
            <img src="static/skype_icon.png" height="20px" style="margin-top: 5px; margin-left: 10px">
        </div>
    </div>
</div>
<div style="text-align: center; margin-top: 30px; margin-bottom: 30px;">
    <a href="#" class="btn btn-sm btn-custom">О нас</a>
</div>
<div class="bottom-block">
    <div class="bottom-left">
        <h4>All Rights Reserved</h4>
    </div>
    <div class="bottom-right">
        <h4>Контакты:</h4>
        <h4>+7(979)797-97-97</h4>
        <h4>site@zaryadka.biz</h4>
    </div>
</div>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>