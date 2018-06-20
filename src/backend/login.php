<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <!--[if lte IE 9]>
    <p class = "browserupgrade">Você está usando um navegador <strong>desatualizado</strong>. Por favor, <a href="https://browsehappy.com/"> atualize seu navegador </a> para melhorar sua experiência e segurança. </p>
    <![endif]-->

    <div class="emblem"><span class="icon-information"></span></div>
    <div class="frame">
        <div class="piece output">
            <div id="container">
                <output></output>
                <div id="input-line" class="input-line">
                    <div class="prompt"></div><div><input class="cmdline" autofocus /></div>
                </div>
            </div>
        </div>
        <div class="piece scanlines noclick"></div>
        <div class="piece glow noclick"></div>
    </div>

    <div class="login-container">
        <form action="act/login.php">
            <div class="form-inner">
                <div class="column">
                    <input type="text" required="" minlength="3" maxlength="24" placeholder="Nome de Usuário (obrigatório)" class="form-input" name="name" />
                    <input type="text" required="" minlength="1" maxlength="16" placeholder="Senha (obrigatório)" class="form-input" name="name" />
                </div>
                <input type="submit" value="Entrar" class="form-btn">
            </div>
        </form>
    </div>

    <script src="../js/vendor/modernizr-custom.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="../js/login.js"></script>

    <script>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

</body>
</html>