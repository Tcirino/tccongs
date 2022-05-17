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
                <h3 class="white-text">Entre em Contato</h3>
                <div class="divider"></div>
            </div>
        </div>

        <form class="teal">
            <div class="row">
                <div class="col s12 m4">
                    <h5 class="white-text"></h5>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m4">
                    <label for="nomecompleto" class="white-text">Nome Completo:</label>
                    <input type="textarea" name="nomecompleto" id="nomecompleto"  />
                </div>

                <div class="col s12 m4">
                    <label for="e-mail" class="white-text">E - mail:</label>
                    <input type="textarea" name="e-mai" id="e-mai"  />
                </div>
          
                <div class="col s12 m4">
                    <label for="telefone" class="white-text">Telefone:</label>
                    <input type="textarea" name="telefone" id="telefone"  />
                </div>
           </div>
            
            <div class="row">
                 <div class="col s12 ">
                    <label for="enviesuamensagem" class="white-text">Envie sua Mensagem:</label>
                    <textarea id="swal-input2" class="swal2-input" rows="100"></textarea>
                  </div>
               </div>
           </div>
       </form>
   </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script type="text/javascript">
    M.AutoInit();
   </script>
</body>

</html>
