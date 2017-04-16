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
    <div class="go-top">go to top</div>
</div>
<a name="products" style="color: white">products</a>
<div class="products-block">
    <h1 class="products-header">Что ты хочешь зарядить сегодня?</h1>
    <a class="products-block" href="ZaryadiSebya.php">
        <div class="col-md-4 light_div">
            <img src="static/man.png" class="products-icon">
            <h1 class="products-text">Заряди себя</h1>
            <h4 class="products-text">Развитие собственных компетенций</h4>
        </div>
    </a>
    <a class="products-block" href="ZaryadiSebya.php#go-team">
    <div class="col-md-4 dark_div">
        <img src="static/team.png" class="products-icon">
        <h1 class="products-text">Заряди команду</h1>
        <h4 class="products-text">Навыки управления людьми</h4>
    </div>
    </a>
    <a class="products-block" href="ZaryadiSebya.php#go-clients">
    <div class="col-md-4 light_div">
        <img src="static/business.png" class="products-icon">
        <h1 class="products-text">Заряди клиентов</h1>
        <h4 class="products-text">Эффективные взаимоотношения с клиентом</h4>
    </div>
    </a>
</div>
<a name="saying" style="color: white">products</a>
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
        <img src="companies/burger_king_izmir_kipa_avm_restorant_c.png" style="height: 150px; position: absolute; margin-top: 25px;">
        <img src="companies/burger_king_izmir_kipa_avm_restorant_c1.png" style="height: 150px; position: relative; margin-top: 25px;" class="icon">
    </div>
    <div class="col-md-3 dark_div" style="height: 200px">
        <img src="companies/alidi.jpg" style="height: 90px; position: absolute; margin-top: 60px" >
        <img src="companies/alidi1.jpg" style="height: 90px; position: relative; margin-top: 60px" class="icon">
    </div>
    <div class="col-md-3 light_div" style="height: 200px">
        <img src="companies/binbank.jpeg" style="height: 120px; position: absolute; margin-top: 50px;">
        <img src="companies/binbank1.jpg" style="height: 120px; position: relative; margin-top: 50px;" class="icon">
    </div>
    <div class="col-md-3 dark_div" style="height: 200px">
        <img src="companies/dyson.gif" style="height: 90px; position: absolute; margin-top:55px">
        <img src="companies/dyson.png" style="height: 90px; position: relative; margin-top:55px" class="icon">
    </div>
    <div class="col-md-3 dark_div" style="height: 200px">
        <img src="companies/j&j.png" style="height: 180px; position: absolute; margin-top: 20px;">
        <img src="companies/j&j1.png" style="height: 180px; position: relative; margin-top: 20px;" class="icon">
    </div>
    <div class="col-md-3 light_div" style="height: 200px">
        <img src="companies/duracell.png" style="height: 30px; position: absolute; margin-top: 90px;">
        <img src="companies/duracell1.png" style="height: 30px; position: relative; margin-top: 90px;" class="icon">
    </div>
    <div class="col-md-3 dark_div" style="height: 200px">
        <img src="companies/Gibson.png" style="height: 120px; position: absolute; margin-top: 60px;">
        <img src="companies/Gibson1.png" style="height: 120px; position: relative; margin-top: 60px;" class="icon">
    </div>
    <div class="col-md-3 light_div" style="height: 200px">
        <img src="companies/Kimberly-Clark.jpg" style="height: 60px; position: absolute; margin-top: 70px;">
        <img src="companies/Kimberly-Clark1.jpg" style="height: 60px; position: relative; margin-top: 70px;" class="icon">
    </div>
    <div class="col-md-3 light_div" style="height: 200px">
        <img src="companies/loreal.png" style="height: 70px; position: absolute; margin-top: 65px">
        <img src="companies/loreal1.png" style="height: 70px; position: relative; margin-top: 65px" class="icon">
    </div>
    <div class="col-md-3 dark_div" style="height: 200px">
        <img src="companies/nestle.jpeg" style="height: 140px; position: absolute; margin-top: 20px">
        <img src="companies/nestle1.jpg" style="height: 140px; position: relative; margin-top: 20px" class="icon">
    </div>
    <div class="col-md-3 light_div" style="height: 200px">
        <img src="companies/philips.jpg" style="height: 150px; position: absolute; margin-top: 20px">
        <img src="companies/philips1.jpg" style="height: 150px; position: relative; margin-top: 20px" class="icon">
    </div>
    <div class="col-md-3 dark_div" style="height: 200px">
        <img src="companies/QUintles.jpg" style="height: 150px; position: absolute; margin-top: 20px">
        <img src="companies/QUintles1.jpg" style="height: 150px; position: relative; margin-top: 20px" class="icon">
    </div>
</div>
<div style="text-align: center; margin-top: 30px;">
    <a href="#" class="btn btn-sm btn-custom">Все компании</a>
</div>
<div style="background: rgba(240, 240, 245, 1); margin-top: 80px;">
    <a name="about" style="color: rgba(240, 240, 245, 1);">products</a>
    <h1 class="products-header">Кто мы?</h1>
    <h3 class="products-text">Мы команда бизнес-тренеров, которая поможет вам стать эффективнее</h3>
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
            <a style="margin-left:40px">
                <img src="static/facebook_icon_white.png" height="20px">
            </a>
            <a>
                <img src="static/linkedin_white.png" height="20px" style="margin-bottom: 10px;">
            </a>
            <a>
                <img src="static/skype_icon_white.png" height="20px">
            </a>
        </div>
        <div class="col-md-3" style="text-align: center; margin-left: 20px;">
            <h3 style="margin-left: 20px;">Роман Рычажков</h3>
            <h4 class="products-text" style="margin-left: 20px;">Бизнес-блогер</h4>
            <a style="margin-left:50px">
                <img src="static/facebook_icon_white.png" height="20px">
            </a>
            <a>
                <img src="static/linkedin_white.png" height="20px" style="margin-bottom: 10px;">
            </a>
            <a>
                <img src="static/skype_icon_white.png" height="20px">
            </a>
        </div>
    </div>
</div>
<div style="text-align: center; margin-top:0px; margin-bottom: 30px;">
    <a href="aboutus.php" class="btn btn-sm btn-custom">О нас</a>
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
<script src="jquery-3.2.1.js"></script>
<script src="jquery.min.js"></script>
<script src="jquery.scroolly.js"></script>
<script src="jquery.my.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>