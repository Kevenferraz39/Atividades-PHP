<?php
      include('conexao.php'); //para incluir os codigos da pagina conexao.php 

    if(isset($_POST['email'])||isset($_POST['senha'])){

        if(strlen($_POST['email']) == 0){
            echo"<script>alert('Preencha seu E-mail!');</script>";
        }
        elseif(strlen($_POST['senha']) == 0){
            echo"<script>alert('Preencha sua senha!');</script>";
        }
        else{
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM usuarios WHERE email = '$email'AND senha = '$senha' ";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execucao do codigo SQL:" . $mysqli->$error);

            $quantidade = $sql_query->num_rows;
            if($quantidade == 1){
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start(); 
                }
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header("Location: menu.php");
            }
            else{
                echo"Falha ao logar!<br>E-mail ou senha incorretos";
            }
        }

    }

?>