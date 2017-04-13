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
<div class="background-custom">
    <!--<div class="img-overlay">-->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header" style="margin-left: 4vw; width: 40vw;">
                    <a class="navbar-brand" href="main.php">
                            <img alt="Brand" src="/static/zaryadka_icon.png" height="40px">
                            <div style="margin-top: 25px; width: 300px; margin-left: 50px;">
                                <a href="main.php" class="header-text-custom">Бизнес зарядка</a>
                            </div>
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
                                <a href="#" class="btn btn-sm btn-custom">Войти</a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="col-md-6" style="align-items: center">
            <div class="under-right-panel-csm">
            </div>
            <div class="right-panel-csm">
                <h3>Оформи подписку</h3>
                <img alt="Brand" src="/static/zaryadka_icon.png" height="70px">
                <form style="margin-top:20px;">
                    <input class="input-csm" type="email" placeholder="email">
                    <input class="input-csm" type="text" placeholder="name">
                    <input class="input-csm" type="password" placeholder="password">
                    <input class="btn btn-sm btn-custom" style="width: 20vw; margin-top:25px; height:50px" type="submit">
                </form>
            </div>
        </div>
    <div class="col-md-6">
        <h1 class="maintext">Хочешь изменений - бери и делай!</h1>
        <h5 class="maintext-sm" style="padding-top: 30px">«Зарядка» бизнес навыков и компетенций. Все, что необходимо для эффективной работы и развития карьеры.</h5>
    </div>
    <!--</div>-->
</div>
<a name="products"></a>
<div class="products-block">
    <h1 class="products-header">Что ты хочешь зарядить сегодня?</h1>
    <a class="products-block" href="ZaryadiSebya.php">
        <div class="col-md-4 light_div">
            <img src="static/man.png" class="products-icon">
            <h1 class="products-text">Заряди себя</h1>
            <h4 class="products-text">Развитие собственных компетенций</h4>
        </div>
    </a>
    <a class="products-block" href="zaryadikomandu.php">
    <div class="col-md-4 dark_div">
        <img src="static/team.png" class="products-icon">
        <h1 class="products-text">Заряди команду</h1>
        <h4 class="products-text">Навыки управления людьми</h4>
    </div>
    </a>
    <a class="products-block" href="zaryadiclientov.php">
    <div class="col-md-4 light_div">
        <img src="static/business.png" class="products-icon">
        <h1 class="products-text">Заряди клиентов</h1>
        <h4 class="products-text">Эффективные взаимоотношения с клиентом</h4>
    </div>
    </a>
</div>
<a name="saying"></a>
<div class="saying-block">
    <h1 class="saying-header">Отзывы клиентов</h1>
    <div style="margin-top:50px; margin-left: 50px">
        <div class="col-md-2" style="text-align: center">
            <img src="static/Hafizulin_Artur.jpg" class="saying-icon">
            <h3 class="saying-text-name">Хафизулин Артур</h3>
        </div>
        <div class="col-md-8 col-md-offset-1">
            <h3 class="saying-text">Огромное спасибо за организацию и проведение тренинга «Сила творческой мысли»!  Мы отправляли на тренинг самых креативных сотрудников, но то, какие идеи они стали разрабатывать и запускать после тренинга не идет ни в какое сравнение с тем, что было до этого. Радуга мышления помогла им раскрыться, а количество сформулированных идей и проектов во время тренинга достигло, если я не ошибаюсь, 400! Часть их них, порядка 12, была детально проработана и 4 проекта были запущены, что помогло нам преодолеть турбулентность рынка, возникшую из-за новых регуляторных изменений и выполнить поставленные перед нами задачи</h3>
            <h3 class="saying-text" style="float:right">Директор по продажам ООО «Новартис Консьюмер Хелс»</h3>
        </div>
    </div>
    <div style="margin-top:400px; margin-left: 50px">
        <div class="col-md-2" style="text-align: center">
            <img src="static/Kataev_Alex.jpg" class="saying-icon">
            <h3 class="saying-text-name">Катаев Алексей</h3>
        </div>
        <div class="col-md-8 col-md-offset-1">
            <h3 class="saying-text">Training course Advanced Negotiation skills was excellent combination of Negotiation technics and practical tasks with video shooting what helped to my managers understand what they need to improve to really get from their customers what Company wants. And what is even more important that this course is really applicable for wider group of participants than usual KA or Sales teams. My marketing and medical people are participating there as well and really understood what they need to improve in own collaboration with external and internal customers. All feedbacks given were extremely positive, so I kindly recommend this training for roll out in various business, not only in FMCG environment.</h3>
            <h3 class="saying-text" style="float:right">Commercial Operations Director – The Janssen Pharmaceutical Companies of Johnson & Johnson</h3>
        </div>
    </div>
    <div style="margin-top:750px; margin-left: 50px">
        <div class="col-md-2" style="text-align: center">
            <img src="static/Korotaev_Yuriy.jpg" class="saying-icon">
            <h3 class="saying-text-name">Юрий Коротаев</h3>
        </div>
        <div class="col-md-8 col-md-offset-1">
            <h3 class="saying-text">Хочу поблагодарить за два наишикарнейших трейнинга («Time management. Эффективность.
                Как достигать результатов» и «Business Writing») , которые запали в душу всем нашим сотрудникам. Благодарю за подготовку и проведение! Огромное спасибо!
            </h3>
            <h3 class="saying-text" style="float:right">General Manager EE, Duracell</h3>
        </div>
    </div>
</div>
<div style="text-align: center; margin-bottom: 50px;">
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
<div style="background: rgba(240, 240, 245, 1); margin-top: 80px;">
    <h1 class="products-header">Кто мы?</h1>
    <h3 class="products-text">Мы команда бизнес-тренеров, которая поможет вам стать счастливее</h3>
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
<div style="text-align: center; margin-top:0px; margin-bottom: 30px;">
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