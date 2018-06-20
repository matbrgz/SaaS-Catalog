<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="../site.webmanifest">
    <link rel="apple-touch-icon" href="../icon.png">

    <link rel="stylesheet" href="../css/normalize.css">
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
                    <div class="prompt"></div><div><input class="cmdline" autofocus title="cmdline"/></div>
                </div>
            </div>
        </div>
        <div class="piece scanlines noclick"></div>
        <div class="piece glow noclick"></div>
    </div>

    <script src="../js/vendor/modernizr-custom.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <div class="clock-container">
        <svg viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="45"/>
            <g>
                <rect class="hour" x="47.5" y="12.5" width="5" height="40" rx="2.5" ry="2.55" />
                <rect class="min" x="48.5" y="12.5" width="3" height="40" rx="2" ry="2"/>
                <line class="sec" x1="50" y1="50" x2="50" y2="16" />
            </g>
        </svg>
    </div>

    <div class="login-container">

    </div>

    <div class="read-container">
        <div class="wrapper">
            <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                <li><a href="#tab1" class="active">Produtos</a></li>
                <li><a href="#tab2">Clientes</a></li>
                <li><a href="#tab3">Funcionarios</a></li>
                <li><a href="#tab4">Parceiros</a></li>
                <li><a href="#tab5">Fornecedores</a></li>
            </ul>
            <section id="first-tab-group" class="tabgroup">
                <div id="tab1">
                    <h2>Todos os Produtos</h2>
                    <p><?php echo $this->crud->table('products'); ?></p>
                </div>
                <div id="tab2">
                    <h2>Todos os Clientes</h2>
                    <p><?php echo $this->crud->table('clients'); ?></p>
                </div>
                <div id="tab3">
                    <h2>Todos os Funcionarios</h2>
                    <p><?php echo $this->crud->table('functionaries'); ?></p>
                </div>
                <div id="tab4">
                    <h2>Todos os Parceiros</h2>
                    <p><?php echo $this->crud->table('partners'); ?></p>
                </div>
                <div id="tab5">
                    <h2>Todos os Fornecedores</h2>
                    <p><?php echo $this->crud->table('providers'); ?></p>
                </div>
            </section>
        </div>

        <div class="create-container">
            <div class="wrapper">
                <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                    <li><a href="#tab1" class="active">Produtos</a></li>
                    <li><a href="#tab2">Clientes</a></li>
                    <li><a href="#tab3">Funcionarios</a></li>
                    <li><a href="#tab4">Parceiros</a></li>
                    <li><a href="#tab5">Fornecedores</a></li>
                </ul>
                <section id="first-tab-group" class="tabgroup">
                    <div id="tab1">
                        <h2>Cadastrar um Produto</h2>
                        <p><?php echo $this->crud->create('products'); ?></p>
                    </div>
                    <div id="tab2">
                        <h2>Cadastrar um Cliente</h2>
                        <p><?php echo $this->crud->create('clients'); ?></p>
                    </div>
                    <div id="tab3">
                        <h2>Cadastrar um Funcionario</h2>
                        <p><?php echo $this->crud->create('functionaries'); ?></p>
                    </div>
                    <div id="tab4">
                        <h2>Cadastrar um Parceiro</h2>
                        <p><?php echo $this->crud->create('partners'); ?></p>
                    </div>
                    <div id="tab5">
                        <h2>Cadastrar um Fornecedor</h2>
                        <p><?php echo $this->crud->create('providers'); ?></p>
                    </div>
                </section>
            </div>

    </div>

</body>
</html>