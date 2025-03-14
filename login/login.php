<!DOCTYPE html>
<html lang="pt-BR" xml:lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="../css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../icon.css" rel="stylesheet" type="text/css" media="all" />

    <!--- Esta funcao formata mascara dos inputs-->
    <script type="text/javascript">
        function formatar_mascara(src, mascara) {
            var campo = src.value.length;
            var saida = mascara.substring(0, 1);
            var texto = mascara.substring(campo);
            if (texto.substring(0, 1) != saida) {
                src.value += texto.substring(0, 1);
            }
        }
    </script>

</head>

<body>
    <div id="wrapper1">
        <div id="header-wrapper">
            <div id="header" class="container">
                <div id="logo">
                    <div id="wrapper1">
                        <div id="espaço_container" class="container">
                            <div id="logo_site">
                                <img src="../images/carros_logo.png" alt="some text" width=940 height=200>
                            </div>
                        </div>
                    </div>
                    <h1><a href="#">Sistema de Gerenciamento de Aluguel de Carros</a></h1>
                    <div id="menu">
                        <ul>
                            <li><a href="../index.php" title="">Principal</a></li>
                            <li class="current_page_item"><a href="current_page_item" title="">Login</a></li>
                            <li><a href="../categorias/economicos.php" title="">Econômicos</a></li>
                            <li><a href="../categorias/utilitarios.php" title="">Utilitários</a></li>
                            <li><a href="../categorias/suv.php" title="">SUV</a></li>
                            <li><a href="../categorias/luxo.php" title="">Luxo</a></li>
                            <li><a href="../contato.php" title="">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="wrapperlogin">
                <form method="post" action="confirmalogin.php">

                    <label id="textologin" for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" maxlength="14" onkeypress="formatar_mascara(this,'###.###.###-##')" />
                    <br>

                    <label id="textologin" for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" />
                    <br>
                    <button type="submit" id="botaoEntrar" class="button">
                        Entrar
                    </button>
                </form>

                <form method="post" action="../criarconta.php">

                    <button id="botaoCriarConta" class="button" formaction="../cliente/cria_conta.php">
                        Criar conta
                    </button>
                </form>
                <br>
            </div>
        </div>
        <div id="espaço_container" class="container">
            <div class="title">
                <h2>Acesse nossas redes sociais!</h2>
                <span class="byline">Estamos sempre a disposição de nossos clientes!</span>
            </div>
            <ul class="contact">
                <li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
                <li><a href="#" class="icon icon-facebook"><span></span></a></li>
                <li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
                <li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
                <li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
            </ul>
            <div id="espaço_container" class="container">
            </div>
</body>

</html>