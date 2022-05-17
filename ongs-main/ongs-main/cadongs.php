<?php
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="row">
        <nav>
            <div class="nav-wrapper blue ">
                <a href="#!" class="brand-logo"><img src="infointerface.png" class="responsive-img" width="70"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="cadongs.php">Cadastro de Ongs</a></li>
                    <li><a href="ongscadastradas.php">Ongs Cadastradas</a></li>
                    <li><a href="jatenhocadastro.php">Já Tenho Cadastro</a></li>
                    <li><a href="faleconosco.php">Fale Conosco</a></li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="cadongs.php">Cadastro de Ongs</a></li>
            <li><a href="ongscadastradas.php">Ongs Cadastradas</a></li>
            <li><a href="jatenhocadastro.php">Já Tenho Cadastro</a></li>
            <li><a href="faleconosco.php">Fale Conosco</a></li>
        </ul>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3 class="white-text">Cadastre sua ONG</h3>
                <div class="divider"></div>
            </div>
        </div>

        <form class="teal">
            <div class="row">
                <div class="col s12 m4">
                    <h5 class="white-text">Crie sua conta</h5>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m4">
                    <label for="emailOng" class="white-text">E-mail</label>
                    <input type="email" name="usuario" id="usuario" class="white-text" />
                </div>

                <div class="col s12 m4">
                    <label for="senhaOng" class="white-text">Senha</label>
                    <input type="password" name="senhaOng" id="senhaOng" class="white-text" />
                </div>
            </div>

        </form>
        <form class="teal">
            <div class="row">
                <div class="col s12 m4 ">
                    <h5 class="white-text">Conta</h5>

                    <div class="row">
                        <div class="col s12 m4">
                            <label for="nomeOng" class="white-text">Nome da ONG</label>
                            <input type="text" name="nomeOng" id="nomeOng" />
                        </div>

                        <div class="col s12 m4">
                            <label for="tipodeong" class="white-text">Tipo de Ong</label>
                            <select name="tipodeong" id="tipodeong">
                                <option value=""></option>
                                <option>Animais</option>
                                <option>Social</option>
                                <option>Ambiental</option>
                                <option>Crianças Carentes</option>
                                <option>Combate à Pobreza</option>
                                <option>Violencia Domestica</option>
                                <option>Moradores de Rua</option>
                                <option>Dependencia Quimica</option>
                                <option>Deficientes</option>
                                <option>Azilos</option>
                                <option>Doenças Crônicas</option>
                                <option>Outros</option>

                            </select>
                        </div>

                        <div class="col s12 m4">
                            <label class="white-text">Logo da Ong</label>
                            <label class="fakeinput">
                                <input type="file"></label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m4">
                    <label for="descrevasuaong" class="white-text">Descreva sua Ong/Do que ela precisa?</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
            
        </form>
    </div>

    <form class="teal">
        <div class="row">
            <div class="col s12 m4">
                <h5 class="white-text">Endereço</h5>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m4">
                <label class="white-text">Estado</label>
                <select name="" id="">
                    <option value=""></option>
                    <option>AC</option>
                    <option>AL</option>
                    <option>AP</option>
                    <option>AM</option>
                    <option>BA</option>
                    <option>CE</option>
                    <option>DF</option>
                    <option>ES</option>
                    <option>GO</option>
                    <option>MA</option>
                    <option>MT</option>
                    <option>MS</option>
                    <option>MG</option>
                    <option>PA</option>
                    <option>PB</option>
                    <option>PR</option>
                    <option>PE</option>
                    <option>PI</option>
                    <option>RJ</option>
                    <option>RN</option>
                    <option>RS</option>
                    <option>RO</option>
                    <option>RR</option>
                    <option>SC</option>
                    <option>SP</option>
                    <option>SE</option>
                    <option>TO</option>
                </select>
            </div>

            <div class="row">
                <div class="col s12 m4">
                    <label for="cep" class="white-text">Cep</label>
                    <input type="text" name="cep" id="cep" />
                </div>

                <div class="row">
                    <div class="col s12 m4">
                        <label for="telefone"class="white-text">Telefone</label>
                        <input type="text" name="telefone" id="telefone" />
                    </div>

                    <div class="row">
                        <div class="col s12 m4">
                            <label for="logradouro" class="white-text">Logradouro (ex:rua,avenida)</label>
                            <input type="text" name="logradouro" id="logradouro" />
                        </div>

                        <div class="row">
                            <div class="col s12 m4">
                                <label for="numero" class="white-text">N°</label>
                                <input type="text" name="numero" id="numero" />
                            </div>

                            <div class="row">
                                <div class="col s12 m4">
                                    <label for="complemento" class="white-text">Complemento</label>
                                    <input type="text" name="complemento" id="complemento" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </form>
    
    <form class="teal">
        <div class="row">
            <div class="col s12 m4">
                <h5 class="white-text">Dados Para Doações</h5>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m4">
                <label for="numero" class="white-text">Pix Para Doações</label>
                <input type="text" name="pix" id="pix" />
            </div>

            <div class="col s12 m4">
                <label for="tipo" class="white-text">Tipo</label>
                <select name="tipo" id="tipo">
                    <option value=""></option>
                    <option>CPF</option>
                    <option>CNPJ</option>
                    <option>Numero do Celular</option>
                    <option>E-mail</option>
                    <option>QR CODE</option>

                </select>
            </div>

            <div class="row">
                <div class="col s12 m4">
                    <label for="numeroconta" class="white-text">Numero da Conta Para Doações</label>
                    <input type="text" name="numeroconta" id="numeroconta" />
                </div>
            </div>
       
    </form>
    </div>

    <p class="center"><a class="waves-effect waves-light btn" href="ongscadastradas.php">Enviar</a></p>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript">
        M.AutoInit();
    </script>


</body>


</html>