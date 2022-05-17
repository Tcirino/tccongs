<?php
include_once ('conexao.php');

//if (!empty($_POST['usuario']) && !empty ($_POST['senha'])) {
    # code...
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    //$pegahash = mysqli_fetch_assoc($queryresulthash);

    $query = "select usuario, senha from login where
    usuario = '$usuario' and senha ='$senha'";

    $result =mysqli_query ($conn,$query);

    $numrows= mysqli_num_rows($result);



if ($numrows > 0 ) {

    header('location: index.php');
    //header('Location: http://www.example.com/');
}else{

    echo"<scrip>alert('login ou senha invalida');location.href='login.html'; </scrip>";

}


//}