
<!DOCTYPE html>
<html lang="pt-br">  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

                      <!-- ========CSS========= -->
<link rel="stylesheet" href="estilos.css/loguin.css">
<link rel="shortcut icon" href="_img/favicon.ico" type="image/x-icon">

                    <!--======== boxicons CSS =========-->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>                
    <title>Loguin PHP</title>
</head>
        <style>
        button a{
        color:var(--topo-color);
        }
        button:hover{
            color:var(--box);
            background:var(--botao-color);
        }
        </style>
<body>
<form action="../../../login.php" method="post">
<div class="main-login">
    <div class="right-login">
        <div class="card-login">
                    <h1>LOGIN</h1>
            <form action="" method="post">
                <div class="text-fild">
                        <label for="usuario">usuário</label>
                        <input type="text" name="email" placeholder="usuário">
                </div>
                <div class="text-fild">
                        <label for="senha">senha</label>
                        <input type="password" name="senha" placeholder="senha">
                </div>
                    <button type="submit">Logar</button><br><br>
                    <button style="width:200px; margin-top:-30px;margin-bottom:-2px;">
                    <a href="cadastro.php">Novo loguin</a></button>
                </div> 
            </div>
        </div>
    <div>
</div>
        </form>


    
</body>
</html>