
<?php
include('../protect.php');
echo"<script>alert('Bem vindo ao Teste-02');</script>";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

                      <!-- ========CSS========= -->
<link rel="stylesheet" href="../estilos.css/style.css">
<link rel="shortcut icon" href="../_img/favicon.ico" type="image/x-icon">

                    <!--======== boxicons CSS =========-->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>                
    <title>Teste-02</title>
</head>
<body>
<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../_img/php1.jpeg" alt="logo">
                </span>

            <div class="text header-text"> 
                <span class="name">&nbsp;&nbsp;PHP</span>
                <span class="profission">&nbsp;&nbsp;&nbsp;Projetos</span>
            </div>
        </div>
        <i class='bx bx-menu toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <li class="pesquisa-box">
                   
                    <i class='bx bx-search icon'></i>
                        <input type="text" placeholder="pesquise....">
                   
                </li>
                <ul class="menu-links">
                    <li class="nav-links">
                    <a href="../menu.php">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Menu</span>
                        </a>
                    </li>
                </li>
                <ul class="menu-links">
                    <li class="nav-links">
                        <a href="https://nsa.cps.sp.gov.br/">
                            <i class='bx bx-cylinder icon'></i>
                            <span class="text nav-text">NSA</span>
                        </a>
                    </li>
                </li>
                <ul class="menu-links">
                    <li class="nav-links">
                        <a href="materias.html">
                            <i class='bx bx-book-open icon'></i>
                            <span class="text nav-text">Materias</span>
                        </a>
                    </li>
                </li>
                <ul class="menu-links">
                <li class="nav-links">
                        <a href="https://github.com/Kevenferraz39">
                        <i class='bx bxl-github icon'></i>
                            <span class="text nav-text">Github</span>
                        </a>
                    </li>
                </li>
                <ul class="menu-links">
                    <li class="nav-links">
                        <a href="sobre.html">
                            <i class='bx bx-question-mark icon'></i>
                            <span class="text nav-text">Sobre</span>
                        </a>
                    </li>
                </li>
                <ul class="menu-links">
                    <li class="nav-links">
                        <a href="config.html">
                            <i class='bx bx-cog icon'></i>
                            <span class="text nav-text">configurações</span>
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="buttom-content">
                <li class="">
                    <a href="../logout.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">sair</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav> 

                                    <!--Corpo-->
    <section class="corpo">
        <header class="top">
            <h1>Aulas de PHP</h1>
            <div class="topo">
                <nav class="dp-menu">
                    <ul>
                        <!--aula1-->
                        <li><a href="#">Aula-01</a>
                    <ul>
                        <li><a href="../aula-01/imc.php">imc</a></li>
                            <li><a href="../aula-01/olamundo.php">ola, mundo</a></li>
                            <li><a href="../aula-01/vendas.php">Vendas</a></li>
                    </ul>
                    </li>
                         <!--aula2-->
                        <li><a href="#">Aula-02</a>
                            <ul>
                                    <li><a href="EXERCICIO-02.PHP">Exercicio-01</a></li>
                                    <li><a href="../aula-02/exe2.php">Exercicio-02</a></li>
                                    <li><a href="../aula-02/exe3.php">Exercicio-03</a></li>
                                    <li><a href="../aula-02/exe4.php">Exercicio-04</a></li>
                                    <li><a href="../aula-02/exe5.php">Exercicio-05</a></li>
                                    
                            </ul>
                        </li>
                        <!--aula3-->
                        <li><a href="#">Aula-03</a>
                            <ul>
                                <li><a href="../aula-03/conversor_de_temperatura.php">Conversor de temperatura</a></li>
                                
                            </ul>
                        </li>
                            <!--aula4-->
                        <li><a href="#">Aula-04</a>
                            <ul>
                                    <li><a href="../aula-04/teste1.php">Teste-01</a></li>
                                    <li><a href="../aula-04/teste2.php">Teste-02</a></li>
                                    <li><a href="../aula-04/teste3.php">Teste-03</a></li>
                                    
                                    <li><a href="../aula-04/lanchotee.php">Lanchonete-01</a></li>
                                    <li><a href="../aula-04/combustivel.php">Combustivel</a></li>
                            </ul>
                        </li>
                            <!--aula5-->
                        <li><a href="#">Aula-05</a>
                            <ul>
                                   
                                    <li><a href="../aula-05/copa.php">Copa</a></li>
                                    <li><a href="../aula-05/For1.php">For</a></li>
                                    <li><a href="../aula-05/While1.php">While</a></li>
                                    <li><a href="../aula-05/While-Fifa.php">While-Fifa</a></li>
                                    <li><a href="../aula-05/For-copa.php">For-Copa</a></li>
                            </ul>
                        </li>
                                   <!--aula6-->
                        <li><a href="#">Aula-06</a>
                            <ul>
                            <li><a href="../aula-06/operacao.php">Operacao</a></li>
                                    <li><a href="../aula-06/media.php">Media</a></li> 
                                    <li><a href="../aula-06/log.php">Loguin</a></li> 
                                    
                            </ul>
                        </li>
                        <li><a href="#">Aula-07</a>
                            <ul>
                            <li><a href="../aula-07/conversor_de_bufufunfa.php">conversor de bufunfa</a></li>
                                    <li><a href="../aula-01/imc.php">IMC</a></li> 
                                    <li><a href="../aula-07/rodizio.php">Rodizio</a></li> 
                                    
                            </ul>
                        </li>
                            <!--aula8-->
                            <li><a href="../aula-08/caraoucoroa.php">Aula-08</a>
                            <ul>
                            <li><a href="../aula-08/caraoucoroa.php">Cara ou coroa<a><li>
                                        
                            </ul>
                        </li>
                       
                    </ul>
                </nav>
               </div>
        </header>

					 <!-- #region -->                 
  	<br> 
	<br> 
	<br> 
	<br> 
	<br> 
	<br> 
	<br> 

			  <h2>Teste Switch</h2>
<center><form action="CalculaComb.php" method="post">

     <select name="slCombustivel">
            <option> Escolha o conbustivel</option>
            <option value="1">Álcool</option>
            <option value="2">Gasolina</option>
    </select><br><br>
        <label>Digite a Quantidade de litros</label><br>
        <input type="text" name="txtLitros">
        <br><br>
        <input type="submit" name="btVerificar" value="verificar">
       
</form></center>
<?php
   
   $comb = $_POST['slCombustivel'];
   $litros = $_POST['txtLitros'];
   
   
   switch($comb){
       case '1':
           $total = $litros * 3.5;
           break;
       case '2':
           $total = $litros * 5; 
           break;
       default:
           $total = "Escolha um Combustivel";
           break;
   }
       echo"$total";
   ?>
   <br><br>   
    </section>
    <script src="../PHP/js/script.js"></script>
</body>
</html>
