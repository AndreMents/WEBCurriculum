<!--Desenvolvido por André Oliveira - github.com/AndreMents -->

<?php
$url = "https://www.google.com/recaptcha/api/siteverify";
$respon = $_POST['g-recaptcha-response'];

$data = array('secret' => " INFORME O SECRET KEY", 'response' => $respon);

$options = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data)

    )
);
$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$jsom = json_decode($result);

if ($jsom->success) {
    // sucesso
?>
    <script>
        function $(id) {
            return document.getElementById(id);
        }
        window.onload = function() {
            window.location = "https://whats.link/SEULINKDOWHATS";
        }
    </script>

<?php
} else {
?><script>
        //Alerta reCAPTCHA invalido 
    </script>
<?php
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/ SEU LINK DO ANALYTICS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', ' SUA ID DO ANALYTICS');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>André Oliveira</title>
    <link rel="shortcut icon" type="imagem/x-icon" href="http://hardsearch.com.br/andreoliveira/img/curriculo/icon/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/curriculo.css">
    </link>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100&display=swap" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
</head>

<body>

    <div class="main">
        <!-- INFORMAÇÕES PESSOAIS -->
        <div class="dpessoal">

            <h1>Currículo</h1>
            <h2>DADOS PESSOAIS</h2>
            <hr>

            <img class="foto" src="img/curriculo/andre_oliveira.jpg">

            <div id="pessoal">

                <h3>NOME:</h3>
                <p>André da Silva Oliveira</p>
                <h3>DATA DE NASCIMENTO:</h3>
                <p>02 Junho de 1996</p>
                <h3>RESIDÊNCIA:</h3>
                <p>Sapucaia do Sul, Rio Grande do Sul</p>
            </div>
            <!-- FIM DAS INFORMAÇÕES PESSOAIS -->


            <div id="paragrafo">

                <!-- TEXTO DESCRIÇÃO LIVRE -->
                <div class="info-sobre">
                    <h2>SOBRE MIM</h2>
                    <hr>
                    <p>Sou formado no curso profissionalizante em Manutenção de Equipamentos Eletrônicos no Senai AJRenner de Canoas.</p>
                    <p>Atualmente estou cursando técnico em informática no Ulbra São Lucas, com previsão de conclusão em Dezembro de 2020, e realizo inglês no Campus Unisinos.</p>
                    <p>Busco constantemente acrescentar e consolidar meus conhecimentos através de cursos EAD como, programação PHP, JAVA, PYTHON e JAVASCRIPT.<br>
                        <a href="www.google.com.br">Clique Aqui</a>, para ter acesso aos meus certificados de cursos EAD.</p>

                    <p>Trabalho atualmente na Metalúrgica Imac como auxiliar técnico em informática, onde há dois anos, realizo o gerenciamento da área de tecnologia e comunicação da empresa.</p>
                    <p>Sou CEO da empresa HARDSEARCH, onde junto de um sócio, buscamos o desenvolvimento de aplicações Desktop e WEB.</p>
                </div>
                <!-- FIM DO TEXTO -->

                <!-- INFORMAÇÕES DE EDUCAÇÃO -->
                <div class="info-educa">
                    <h2>EDUCAÇÃO</h2>
                    <hr>

                    <h3>2018 - Em andamento</h3>
                    <p>Inglês Regular - Universidade do Vale do Rio dos Sinos (Campus São Leopoldo)</p>

                    <h3>2018 - Em andamento</h3>
                    <p>Técnico em Informática - Ulbra São Lucas (Sapucaia do Sul)</p>

                    <h3>2013 - 2015</h3>
                    <p>Reparador de Equipementos Eletrônicos - Senai AJRenner (Canoas)</p>

                    <h2>HABILIDADES</h2>
                    <hr>

                    <h3>DESENVOLVIMENTO WEB & PROGRAMAÇÃO</h3>
                    <p>Médio = Java.</p>
                    <p>Básico = PHP / HTML / CSS / MySQL</p>
                    <p>Cursando = PHP / JavaScript / Python / MySQL</p>

                    <h3>ARTES DIGITAIS</h3>
                    <p>Básico = Ilustrator/ Photoshop</p>

                    <h3>SUPORTE HARDWARE & SOFTWARE</h3>
                    <p>Avançado = Manutenção de Hardware.</p>
                    <p>Básico = Active Directory.</p>
                </div>
                <!-- FIM DAS INFORMAÇÕES DE EDUCAÇÃO -->

                <!-- INFORMAÇÕES DE EXPERIÊNCIA PROFISSIONAL -->
                <div class="info-experi">
                    <h2>EXPERIÊNCIA PROFISSIONAL</h2>
                    <hr>
                    <h3>2018 - atualmente</h3>
                    <p>Auxiliar Técnico de Informática em Metalúrgica Imac Ltda. - Sapucaia do Sul - RS</p>

                    <h3>2016 - 2017</h3>
                    <p>Operador de Produção em Bettanin Industrias S.A. - Esteio - RS</p>

                    <h3>2015 - 2016</h3>
                    <p>Soldado em Estado Maior do Exercito(18º BINTZ). - Sapucaia do Sul - RS</p>

                    <h3>2013 - 2015</h3>
                    <p>Aprendiz Menor em Concrepedra Concreto e Pedreiras LTDA. - Porto Alegre - RS</p>
                </div>
                <!-- FIM DE EXPERIÊNCIA PROFISSIONAL -->

                <!-- INFORMAÇÕES DE PROTIFÓLIO -->
                <h2>PORTIFÓLIO</h2>
                <hr>
                <p>Clique para exibir</p>

                <!-- SCRIPT PORTIFÓLIO - BOTÃO EXIBIR -->
                <script>
                    jQuery(document).ready(
                        function() {
                            jQuery("#botaoExibir").toggle(
                                function() {
                                    jQuery("div#form-oculto").slideDown(); // slideDown() na div #form-oculto
                                    jQuery("#botaoExibir").find('div').addClass('active'); // altera para botão esconder
                                },
                                function() {
                                    jQuery("div#form-oculto").slideUp(); // slideUp()na div #form-oculto
                                    jQuery("#botaoExibir").find('div').removeClass('active'); //retorna para botão exibir
                                }
                            );
                        });
                </script>

                <!-- BOTÃO EXIBIR -->
                <div id="botaoExibir">
                    <div></div> <!-- BOTÃO ESCONDER -->
                </div>

                <!-- CONTEÚDO OCULTO = Quando style == none, conteúdo == OCULTO -->

                <div id="form-oculto" style="display: none;">

                    <!-- CONTEÚDO -->
                    <div class="porti">
                        <p>*As aplicações foram desenvolvidas em Java para suprir as necessidades específicas da IMAC.</p>

                        <h3>Aplicação: MyCalc.imac</h3>
                        <p>Calcula as dimensões da matéria prima em "mm", realiza a soma das unidades e converte o total em "Kg".</p>
                        <a href="https://github.com/AndreMents/MyCalc.imac " target="blank"><img id="img-porti" src="img/curriculo/portifolio/img-mycalc.png"></a>


                        <h3>Aplicação: Controle de Ferramentas</h3>
                        <p>Realiza o controle de empréstimos das ferramentas da qualidade, assim como o controle de dias restantes para recalibrar a ferramenta.</p>
                        <a href="https://github.com/AndreMents/ControleFerramentas"><img id="img-porti" src="img/curriculo/portifolio/img-contferramentas.png"></a>


                        <h3>Aplicação: DPessoal</h3>
                        <p>Realiza o controle de contratos de trabalho, se o mesmo está vencido e precisa ser atualizado.<br>
                            Realiza o controle de coparticipações por tipo de procedimento, com controle de parcelas e seus vencimentos.<br>
                            Realiza o controle das integrações feitas pelos funcionários, por data de vencimento.<br>
                            Emissão de relatórios, alertas e outros.</p>
                        <a href="https://github.com/AndreMents/DepartamentoPessoal"><img id="img-porti" src="img/curriculo/portifolio/img-dpessoal.png"></a>


                        <h3>Aplicação: INv</h3>
                        <p>Sistema feito para a realização da coleta de dados através do leitor de código de barras, para realizar inventário.<br>
                            Exporta os dados salvos no banco em .csv, para realizar a importação dos dados no sistema ERP.<br><br>
                            <a href="https://github.com/AndreMents"><img id="img-porti" src="img/curriculo/portifolio/img-inv.png"></a>

                        </p>
                        <br>
                    </div>
                </div>
                <!-- FIM CONTEÚDO -->

                <!-- INFORMAÇÕES DE REDES SOCIAIS -->

                <h2>REDES SOCIAIS</h2>
                <hr>

                <div class="info-social">

                    <ul id="social">
                        <li id="li">
                            <a href="https://www.linkedin.com/in/andré-oliveira-057a1b18b" target="blank">
                                <p>
                                    <h3>LINKEDIN</h3>
                                </p><img id="icon" src="img/curriculo/icon/linkedin.png">
                            </a>
                        </li>
                        <li id="li">

                            <a href="https://github.com/AndreMents" target="blank">
                                <p>
                                    <h3>GITHUB</h3>
                                </p>

                                <img id="icon" src="img/curriculo/icon/github.png">
                            </a>
                        </li>
                        <li id="li">
                            <a href="https://www.instagram.com/hardsearch_/" target="blank"></ <p>
                                <h3>INSTAGRAM</h3>
                                </p><img id="icon" src="img/curriculo/icon/instagram.png">
                            </a>
                        </li>

                        <li id="li">
                            <a href="mailto:andre@hardsearch.com.br" target="blank"></ <p>
                                <h3>E-MAIL</h3>
                                </p><img id="icon" src="img/curriculo/icon/email.png">
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- FIM REDES SOCIAIS -->

            </div>
            <!-- FIM PARAGRAFO -->



            <h2>CONTATO</h2>
            <hr>
            <h3>WhatsApp</h3>
            <p>Realize a validação do reCAPTCHA para abrir o Whats.Link</p>

        </div>
        <!-- FIM PARAGRAFO -->

        <div class="whats-recap">
            <form method="post" autocomplete="on">
                <div class="g-recaptcha" data-sitekey=" SUA CHAVE PUBLIC DO RECAPTCHA" data-theme="dark"></div>
                <script src="https://www.google.com/recaptcha/api.js" light async defer></script>
                <input id="bt" type="submit" value="VALIDAR">>
            </form>
        </div>
        <br>
        <br>
        <br>
        <div class="footer">

            <small>&copy; Copyright <?php echo date("Y"); ?> Todos os Direitos Reservados - André Oliveira</small>

        </div>

</body>

<!-- CRÉDITOS -->
<!-- https://github.com/Qcabeca/botao-exibir-esconder/blob/master/botao-exibir-esconder.php-->
<!-- http://www.ivanlourencogomes.com/-->

</html>