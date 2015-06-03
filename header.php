<!doctype html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" id="viewport" content="width=device-width">
<title>Title</title>

<script src="/bower_components/devicejs/lib/device.min.js"></script>
<script>
    getViewport=function(){var e,t;return"undefined"!=typeof window.innerWidth?(e=window.innerWidth,t=window.innerHeight):"undefined"!=typeof document.documentElement&&"undefined"!=typeof document.documentElement.clientWidth&&0!=document.documentElement.clientWidth?(e=document.documentElement.clientWidth,t=document.documentElement.clientHeight):(e=document.getElementsByTagName("body")[0].clientWidth,t=document.getElementsByTagName("body")[0].clientHeight),[e,t]};var isPhablet,isMobile;device.tablet()&&getViewport()[0]<642&&(isPhablet=!0),isMobile=device.mobile()||isPhablet,isMobile?(document.getElementById("viewport").setAttribute("content","width=640, user-scalable=no"),document.getElementsByTagName("html")[0].classList.add("mobile")):document.getElementById("viewport").setAttribute("content","width=1170, user-scalable=no");
</script>

<link href="/css/bootstrap.css" rel="stylesheet">

<link href="/bower_components/chosen_v1.4.1/chosen.css" rel="stylesheet">
<link href="/bower_components/tooltipster/css/tooltipster.css" rel="stylesheet">
<link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
<link href="/css/style.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">

<script src="/bower_components/jquery/dist/jquery.min.js"></script>



<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<link href="/css/ie.css" rel="stylesheet">
<![endif]-->
</head>
    <body>
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-14">
                    <a href="/" class="logo"><img src="/img/logo.png" alt=""/></a>
                    <div class="top-right-menu">
                        <ul>
                            <li><a href="#">Ип Константинопольский <br/> <span>логин: pec_test</span></a></li>
                            <li><a href="#">Регистрационные <br/> данные</a></li>
                            <li><a href="#">Статус <br/>груза</a></li>
                            <li><a href="#">SMS-контроль <br/>качества</a></li>
                            <li><a href="#" class="log-out">Выйти</a></li>
                        </ul>
                        <a class="btn btn-primary" href="#">Подать заявку</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="top-menu">
        <div class="container">
            <ul>
                <li class="active"><a href="#"><i class="icon-point "></i>Отправки и получения</a></li>
                <li><a href="#"><i class="icon-calc"></i>Взаиморасчеты</a></li>
                <li><a href="#"><i class="icon-note"></i>Список заявок</a></li>
                <li><a href="#"><i class="icon-talke"></i>Обратная связь</a></li>
            </ul>
        </div>
    </section>
    <section class="main">
        <div class="container">
