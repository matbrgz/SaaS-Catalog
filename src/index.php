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


<div class='leather'>
    <div class='leather-stitch'>
        <ul class='rings'>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <ul class='tabs'>
            <li id='t-1' class='current'>Quem Somos</li>
            <li id='t-2'>Catálogo</li>
            <li id='t-3'>Cliente</li>
            <li id='t-4'>Fornecedor</li>
            <li id='t-5'>Atendimento</li>
            <li id='t-6'>Trabalhe Conosco</li>
        </ul>
        <article>
            <h1>SaaS Frontend</h1>
            <p>Implantar a SaaS na sua empresa pode começar por onde há menor risco, mesmo que de início não haja muito impacto nos custos. Ganhando segurança, poderá partir para aplicações mais ousadas, que tenham maior impacto nos custos. E guardar as economias realizadas para aplicar no desenvolvimento de aplicações que efetivamente são a chave para o sucesso do seu negócio e para manutenção dos diferenciais competitivos.</p>
            <section id='s-1' class='current'>
                <h2>Sobre Nós</h2>
                <p>Somos uma empresa especializa em software como servicos, oferecemos uma completa linha de soluções comerciais para clientes finais e desenvolvedores. Fundanda em 1999, a SaaS possuir experiencia em mais de 365 projetos, atualmente o cátalogo da compania oferta 12 produtos diferentes.</p>
                <h3>Missão</h3>
                <p>Oferecer com exelencia softwares com serviço, garantindo alta disponibilidade, vasta documentação e plataforma de interconexão.</p>
                <h3>Valores</h3>
                <ul>
                    <li>Transparencia nas operações</li>
                    <li>Atendimento ao cliente efetivo</li>
                    <li></li>
                </ul>
            </section>
            <section id='s-2'>
                <h2>Catálogo</h2>
                <ul>
                    <li>Conversores de Arquivos, Áudios, Vídeos, Documentos, Apresentações, Fontes Tipográfica e EBooks;</li>
                    <li>Conversor e Redimensionador de Imagens;</li>
                    <li>Juntar, Dividir e Compressor de PDF;</li>
                    <li>Compressor de GIF;</li>
                    <li>Serviço de Instalação, Configuração e Manutenção de Software Open Source;</li>
                    <li>Serviço de Compartilhamento de Arquivo;</li>
                    <li>Serviço de Encurtador de URL;</li>
                    <li>Serviço de Disparo de Email;</li>
                    <li>Serviço de Email;</li>
                    <li>Serviço de Help Desk Terceirizado;</li>
                    <li>Serviço de Atendimento de Telemarketing;</li>
                    <li>Serviço de Tradução;</li>
                    <li>Capturas de Tela do Site em Tempo Real;</li>
                    <li>Criação de Landing Pages;</li>
                    <li>Criação de Websites e Apps;</li>
                    <li>Desenvolvimento de Plataformas e Sistemas;</li>
                    <li>Gerenciamento de Mídias Sociais;</li>
                </ul>
            </section>
            <section id='s-3'>
                <h1>Clientes</h1>
                <p>Clique <a href="backend/login.php">aqui</a> para realizar login</p>
            </section>
            <section id='s-4'>
                <h1>Fornecedores</h1>
                <p>Clique <a href="backend/login.php">aqui</a> para realizar login</p>
            </section>
            <section id='s-5'>
                <h2>Fale Conosco</h2>
                <p>Nossa equipe está sempre disponivel para ouvir você, o que podemos ajudar você hoje?</p>
                <p>Utilize o formulário abaixo para enviar sua mensagem, sugestão, dúvida.. Estamos sempre aqui ;)</p>
                <form class="contact-form envelope nolabel" action="backend/act/recive_contactForm.php">
                    <div class="form-inner">
                        <div class="column">
                            <input type="text" required="" minlength="3" maxlength="24" placeholder="Nome (obrigatório)" class="form-input" name="name">
                            <input type="email" required="" minlength="7" maxlength="48" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email (obrigatório)" class="form-input" name="email">
                            <input type="text" required="" maxlength="500" placeholder="Assunto (obrigatório)" class="form-input" name="subject">
                            <input type="text" maxlength="255" placeholder="Assunto (opcional)" class="form-input" name="subject" />
                        </div>
                        <div class="column">
                            <textarea required="" rows="4" placeholder="Mensagem (obrigatório)" class="form-input" name="message"></textarea>
                        </div>
                        <input type="submit" value="Enviar Mensagem" class="form-btn">
                    </div>
                </form>
            </section>
            <section id='s-6'>
                <h2>Trabalhe Conosco</h2>
                <form class="contact-form envelope nolabel" action="backend/act/recive_workForm.php">
                    <div class="form-inner">
                        <div class="column">
                            <input type="text" required="" minlength="3" maxlength="24" placeholder="Nome (obrigatório)" class="form-input" name="name" />
                            <input type="email" required="" minlength="7" maxlength="48" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email (obrigatório)" class="form-input" name="email" />
                            <input type="hidden" name="MAX_FILE_SIZE" value="500" />
                            <label>Curriculo (obrigatório):
                                <input type="file" required="" class="form-input" name="cv" />
                            </label>
                        </div>
                        <div class="column">
                            <textarea rows="4" maxlength="500" placeholder="Mensagem (opcional)" class="form-input" name="message"></textarea>
                        </div>
                        <input type="submit" value="Enviar Mensagem" class="form-btn">
                    </div>
                </form>
            </section>
        </article>
        <div id="modal-lg" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-lg-remoteCall">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Carregando...</h4>
                    </div>
                    <div class="modal-body">
                        <p>Carregando...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/vendor/modernizr-custom.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
