
<?php
if(isset($_POST['cadastrar'])){

include_once('conexao.php');
$usuario = $_POST['nome'];
$email  = $_POST['email'];
$senha = $_POST['senha'];

$result = mysqli_query($mysqli,"INSERT INTO usuarios(nome,email,senha)VALUES('$usuario','$email','$senha')");

}
else{
    echo"<scripy>alert('Erro!!!')</script>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css/cadastro.css">
    
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Formulario | Cadastro</title>
</head>
<body>
    <div class="box">
        <form action="cadastro.php" method="post">
            <fieldset>
                <legend><b>Cadastro de usuários</b></legend><br>

                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div><br><br>
                <div class="inputbox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="text" class="labelInput">E-mail</label>
                </div><br><br>
                
                <label for="data_nacimento"><b>Data de nacimento:</b></label>
                    <input type="date" name="data_nacimento" id="data_nacimento"  required>
                    
                <br><br>
                <div class="inputbox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div><br><br>
                <input type="submit" value="Cadastrar" name="cadastrar" id="cadastrar">
            </fieldset><br>
            <style>
 button{
     background-image:linear-gradient(to left, #6065b6, #28337b);
     width: 90px;
     border:solid 1px ;
     border-radius: 6px;
     padding: 12px;
     color: #fcfdfd;
     font-size: 16px;
     cursor:pointer;
    }
    button a{
        
        text-decoration: none;
        color: #fcfdfd;
    }
     
button:hover{
    background: rgba(0, 0, 0, 0.25);
    
}
</style>
            <button ><a href="Loguin.php">loguin</a></button>
        </form>
    </div>

</body>
</html>