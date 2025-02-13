<!DOCTYPE html>
<html lang="pt-BR" xml:lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sistema de Gerenciamento de Aluguel de Automóveis</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="../css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all" />
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
                        <div id="divtitulocadastra">Inserir Automovel</div>
                        <div id="wrapperlogin">
                            <form enctype="multipart/form-data" method="POST" action="salvaCarro.php">

                                <label id="textocadastra" for="placaAutomovel">Placa:</label>
                                <input type="text" id="placaAutomovel" name="placaAutomovel" />
                                <br>

                                <label id="textocadastra" for="corAutomovel">Cor:</label>
                                <input type="text" id="corAutomovel" name="corAutomovel" />
                                <br>

                                <label id="textocadastra" for="chassisAutomovel">Chassis:</label>
                                <input type="text" id="chassisAutomovel" name="chassisAutomovel" />
                                <br>

                                <label id="textocadastra" for="nro_de_portaAutomovel">Nro de Portas:</label>
                                <input type="text" id="nro_de_portaAutomovel" name="nro_de_portaAutomovel" />
                                <br>

                                <label id="textocadastra" for="quilometragemAutomovel">Quilometragem:</label>
                                <input type="text" id="quilometragemAutomovel" name="quilometragemAutomovel" />
                                <br>

                                <label id="textocadastra" for="transmissaoAutomovel">Transmissão:</label>
                                <input type="text" id="transmissaoAutomovel" name="transmissaoAutomovel" />
                                <br>

                                <label id="textocadastra" for="marcaAutomovel">Marca:</label>
                                <input type="text" id="marcaAutomovel" name="marcaAutomovel" />
                                <br>

                                <label id="textocadastra" for="tipo_de_combustivelAutomovel">Combustível:</label>
                                <input type="text" id="tipo_de_combustivelAutomovel" name="tipo_de_combustivelAutomovel" />
                                <br>

                                <label id="textocadastra" for="renavamAutomovel">Renavam:</label>
                                <input type="text" id="renavamAutomovel" name="renavamAutomovel" />
                                <br>

                                <label id="textocadastra" for="tipoAutomovel">Tipo:</label>
                                <input type="text" id="tipoAutomovel" name="tipoAutomovel" />
                                <br>

                                <label id="textocadastra" for="valorAutomovel">Valor por dia:</label>
                                <input type="text" id="valorAutomovel" name="valorAutomovel" />
                                <br>

                                <label id="textocadastracheck" for="direcaoAutomovel">Direção:</label>
                                <input type="checkbox" id="direcaoAutomovel" name="direcaoAutomovel" value="TRUE" />
                                <br>

                                <label id="textocadastracheck" for="ar_condicionadoAutomovel">Ar Condicionado:</label>
                                <input type="checkbox" id="ar_condicionadoAutomovel" name="ar_condicionadoAutomovel" value="TRUE" />
                                <br>

                                <label id="textocadastracheck" for="manutencaoAutomovel">Manutenção:</label>
                                <input type="checkbox" id="manutencaoAutomovel" name="manutencaoAutomovel" value="TRUE" />
                                <br>

                                <div id="wrapper1">
                                    <button type="submit" id="botaoCadastro" class="button">
                                        Confirmar cadastro no sistema
                                    </button>

                                    <button id="botaoCancelar" class="button" formaction="../indexFuncionario.php">
                                        Cancelar cadastro
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>