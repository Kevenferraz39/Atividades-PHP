<?php
if(!isset($_SESSION)){
    session_start(); 
}
if(!isset($_SESSION['id'])){
    die("Voce nao pode acessar esta pagina porque nao esta logado.<p><a href = \"../Loguin.php\">Loguin</a></p>
    <p><a href = \"../../Loguin.php\">Menu loguin</a></p>");  
}

?>
<!DOCTYPE html>
<html lang="loja"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css/flex.css">
    <link rel="stylesheet" href="estilos.css/materias.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>      
    <title>ETEC Loja</title>
</head>
<body>
     
            <section class="corpo">
                <header class="top"> 
                    <div class="topo">
                        <nav class="dp-menu">
                            <ul>
                                <!--aula1-->
                                <li><a href="#">Aula-01</a>
                            </li>
                                 <!--aula2-->
                                <li><a href="#">Contato</a>
                                </li>

                                <li><a href="menu.php">Menu</a>            
                                </li>
                              </ul>
                            </div>  
                        </header>
                                <!--centro da pagina-->
                                <div id="principal">
                                    <div class="interna">
                                        
                                            <a href="#"><img src="_img/css-removebg-preview.png" alt="imagem" width="100%" height="100%"></a>
                                            <div class="legenda">Css</div>
                                    </div>
                            
                                    <div class="interna">
                                        
                                            <a href="#"><img src="_img/html-removebg-preview.png" width="100%" height="100%"></a>
                                            <div class="legenda">HTML - 5</div>
                                    </div>
                            
                                    <div class="interna">
                                        
                                           <a href="#"><img src="_img/js-removebg-preview.png" width="100%" height="100%"></a>
                                            <div class="legenda">JS</div>
                                    </div>
                                    <div class="interna">
                                        
                                        <a href="#"><img src="_img/images-removebg-preview.png" width="95%" height="100%"></a>
                                         <div class="legenda">C#</div>
                                 </div>
                                 <div class="interna">
                                        
                                    <a href="#"><img src="_img/java-removebg-preview.png" width="100%" height="100%"></a>
                                     <div class="legenda">Java</div>
                                    </div>
                                     <div class="interna">
                                        <a href="#"><img src="_img/p-removebg-preview.png" width="100%" height="100%"></a>
                                         <div class="legenda">Python</div>
                                        </div>
                                         <div class="interna">
                                            <a href="#"><img src="_img/php-removebg-preview.png" width="100%" height="100%"></a>
                                             <div class="legenda">Php</div>
                             </div>
                             <div class="interna">
                                <a href="#"><img src="_img/jupyter-removebg-preview.png" width="100%" height="100%"></a>
                                 <div class="legenda">Jupyter</div>
                 </div>
             </div>
            </section> 
</body>
</html>