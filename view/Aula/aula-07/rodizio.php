
<?php
include('../protect.php');
echo"<script>alert('Bem vindo ao rodízio PHP');</script>";
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
    <title>rodízio</title>
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
                        </li>

                    </ul>
                </nav>
               </div>
        </header>
        <br><br><br><br><br><br><br><br><br><br>
        <style>
            #rod{
               border-style: solid;
               padding: 10px;
               border-width: 2px;
               border-radius: 10px;
               box-shadow: 5px 5px 10px rgb(0, 0, 18,0.50);
               width: 50%;
               height: 40%;
            }
            #recebe{
                padding: 10px;
                border-radius: 5px;
                border-style: solid;
                border-width: 1px;
                width: 50%;
                text-align: center;
                
            }
            #btn{
                padding: 10px;
                border-radius: 5px;
                border-style: solid;
                border-width: 1px;
                background-color:#1C214D;
                color:white;
                width: 50%;
            }
        </style>
    <center>
        <form action="" method="post">
            <div id="rod">
            <label for=""><h3>Informe o ultimo numero da placa do seu carro:</h3></label>
            <br><br><br>
            <input type="text" name="placa" id="recebe" placeholder=" digite o numero da sua placa..."><br><br>
            <input type="submit" value="Verificar placa" id="btn">
            </div>
        </form>
    </center>
    <br><br>

        
        <?php
        $p = $_POST['placa'];

        switch ($p) {
            case '0':
                echo"Mes limite para o licenciamento e: Dezembro.<br><br>";

                echo"Dia do rodizio SP: Sexta-feira.<br><br>";

                echo"Calendario IPVA: <br><br>
                <table style=\" border-style:solid; padding:5px; marguin:2px;\">
                <tr>
                <td><h3>Vencimento</h3></td>
              </tr>
            
              <tr>
              <td  style=\" border-style:solid;\"><center> Numero </center></td>
                <td  style=\" border-style:solid;\"><center>1-parcela</center></td>
                <td  style=\" border-style:solid;\"><center>2-parcela</center></td>
                <td  style=\" border-style:solid;\"><center>3-parcela</center></td>
              </tr>
            
              <tr>
              <td  style=\" border-style:solid;\"><center> 0 </center></td>
              <td  style=\" border-style:solid;\"><center>21/jan</center></td>
              <td  style=\" border-style:solid;\"><center>21/fev</center></td>
              <td  style=\" border-style:solid;\"><center>23/mar</center></td>
              </tr>
            </table>";
                break;

                //01

                case '1':
                    echo"Mes limite para o licenciamento e: Julho.<br><br>";
    
                    echo"Dia do rodizio SP: Segunda-feira.<br><br>";
    
                    echo"Calendario IPVA: <br><br>
                    <table style=\" border-style:solid; padding:5px; marguin:2px;\">
                    <tr>
                    <th><center>Vencimento</center></th>
                  </tr>
                
                  <tr>
                  <td  style=\" border-style:solid;\"><center> Numero </center></td>
                    <td  style=\" border-style:solid;\"><center>1-parcela</center></td>
                    <td  style=\" border-style:solid;\"><center>2-parcela</center></td>
                    <td  style=\" border-style:solid;\"><center>3-parcela</center></td>
                  </tr>
                
                  <tr>
                  <td  style=\" border-style:solid;\"><center> 1 </center></td>
                  <td  style=\" border-style:solid;\"><center>24/jan</center></td>
                  <td  style=\" border-style:solid;\"><center>23/fev</center></td>
                  <td  style=\" border-style:solid;\"><center>25/mar</center></td>
                  </tr>
                </table>";
                    break;
            
                    //02

                case '2':
                    echo"Mes limite para o licenciamento e: Julho.<br><br>";
    
                    echo"Dia do rodizio SP: Segunda-feira.<br><br>";
    
                    echo"Calendario IPVA: <br><br>
                    <table style=\" border-style:solid; padding:5px; marguin:2px;\">
                    <tr>
                    <th><center>Vencimento</center></th>
                  </tr>
                
                  <tr>
                  <td  style=\" border-style:solid;\"><center> Numero </center></td>
                    <td  style=\" border-style:solid;\"><center>1-parcela</center></td>
                    <td  style=\" border-style:solid;\"><center>2-parcela</center></td>
                    <td  style=\" border-style:solid;\"><center>3-parcela</center></td>
                  </tr>
                
                  <tr>
                  <td  style=\" border-style:solid;\"><center> 2 </center></td>
                  <td  style=\" border-style:solid;\"><center>25/jan</center></td>
                  <td  style=\" border-style:solid;\"><center>24/fev</center></td>
                  <td  style=\" border-style:solid;\"><center>28/mar</center></td>
                  </tr>
                </table>";
                    break;
            //03

            case '3':
                echo"Mes limite para o licenciamento e: Agosto.<br><br>";

                echo"Dia do rodizio SP: Terca-feira.<br><br>";

                echo"Calendario IPVA: <br><br>
                <table style=\" border-style:solid; padding:5px; marguin:2px;\">
                <tr>
                <th><center>Vencimento</center></th>
              </tr>
            
              <tr>
              <td  style=\" border-style:solid;\"><center> Numero </center></td>
                <td  style=\" border-style:solid;\"><center>1-parcela</center></td>
                <td  style=\" border-style:solid;\"><center>2-parcela</center></td>
                <td  style=\" border-style:solid;\"><center>3-parcela</center></td>
              </tr>
            
              <tr>
              <td  style=\" border-style:solid;\"><center> 3 </center></td>
              <td  style=\" border-style:solid;\"><center>26/jan</center></td>
              <td  style=\" border-style:solid;\"><center>25/fev</center></td>
              <td  style=\" border-style:solid;\"><center>29/mar</center></td>
              </tr>
            </table>";
                break;
        //04

        case '4':
            echo"Mes limite para o licenciamento e: Agosto.<br><br>";

            echo"Dia do rodizio SP: Terca-feira.<br><br>";

            echo"Calendario IPVA: <br><br>
            <table style=\" border-style:solid; padding:5px; marguin:2px;\">
            <tr>
            <th><center>Vencimento</center></th>
          </tr>
        
          <tr>
          <td  style=\" border-style:solid;\"><center> Numero </center></td>
            <td  style=\" border-style:solid;\"><center>1-parcela</center></td>
            <td  style=\" border-style:solid;\"><center>2-parcela</center></td>
            <td  style=\" border-style:solid;\"><center>3-parcela</center></td>
          </tr>
        
          <tr>
          <td  style=\" border-style:solid;\"><center> 4 </center></td>
          <td  style=\" border-style:solid;\"><center>27/jan</center></td>
          <td  style=\" border-style:solid;\"><center>03/mar</center></td>
          <td  style=\" border-style:solid;\"><center>04/abr</center></td>
          </tr>
        </table>";
            break;
                //05

        case '5':
            echo"Mes limite para o licenciamento e: Setembrp.<br><br>";

            echo"Dia do rodizio SP: Quarta-feira.<br><br>";

            echo"Calendario IPVA: <br><br>
            <table style=\" border-style:solid; padding:5px; marguin:2px;\">
            <tr>
            <th><center>Vencimento</center></th>
        </tr>
        
        <tr>
        <td  style=\" border-style:solid;\"><center> Numero </center></td>
            <td  style=\" border-style:solid;\"><center>1-parcela</center></td>
            <td  style=\" border-style:solid;\"><center>2-parcela</center></td>
            <td  style=\" border-style:solid;\"><center>3-parcela</center></td>
        </tr>
        
        <tr>
        <td  style=\" border-style:solid;\"><center> 5 </center></td>
        <td  style=\" border-style:solid;\"><center>28/jan</center></td>
        <td  style=\" border-style:solid;\"><center>04/mar</center></td>
        <td  style=\" border-style:solid;\"><center>06/abr</center></td>
        </tr>
        </table>";
            break;

                //06

        case '6':
            echo"Mes limite para o licenciamento e: Setembro.<br><br>";

            echo"Dia do rodizio SP: Quarta-feira.<br><br>";

            echo"Calendario IPVA: <br><br>
            <table style=\" border-style:solid; padding:5px; marguin:2px;\">
            <tr>
            <th><center>Vencimento</center></th>
        </tr>

        <tr>
        <td  style=\" border-style:solid;\"><center> Numero </center></td>
            <td  style=\" border-style:solid;\"><center>1-parcela</center></td>
            <td  style=\" border-style:solid;\"><center>2-parcela</center></td>
            <td  style=\" border-style:solid;\"><center>3-parcela</center></td>
        </tr>

        <tr>
        <td  style=\" border-style:solid;\">
        <center> 6 </center></td>
        <td  style=\" border-style:solid;\"><center>31/jan</center></td>
        <td  style=\" border-style:solid;\"><center>07/mar</center></td>
        <td  style=\" border-style:solid;\"><center>06/abr</center></td>
        </tr>
        </table>";
            break;

        //07

        case '7':
            echo"Mes limite para o licenciamento e: Outubro.<br><br>";

            echo"Dia do rodizio SP: Quinta-feira.<br><br>";

            echo"Calendario IPVA: <br><br>
            <table style=\" border-style:solid; padding:5px; marguin:2px;\">
            <tr>
            <th><center>Vencimento</center></th>
          </tr>
        
          <tr>
          <td  style=\" border-style:solid;\"><center> Numero </center></td>
            <td  style=\" border-style:solid;\"><center>1-parcela</center></td>
            <td  style=\" border-style:solid;\"><center>2-parcela</center></td>
            <td  style=\" border-style:solid;\"><center>3-parcela</center></td>
          </tr>
        
          <tr>
          <td  style=\" border-style:solid;\"><center> 7 </center></td>
          <td  style=\" border-style:solid;\"><center>01/fev</center></td>
          <td  style=\" border-style:solid;\"><center>08/mar</center></td>
          <td  style=\" border-style:solid;\"><center>07/abr</center></td>
          </tr>
        </table>";
            break;
    
        //08

        case '8':
            echo"Mes limite para o licenciamento e: Outubro.<br><br>";

            echo"Dia do rodizio SP: Quinta-feira.<br><br>";

            echo"Calendario IPVA: <br><br>
            <table style=\" border-style:solid; padding:5px; marguin:2px;\">
            <tr>
            <th><center>Vencimento</center></th>
          </tr>
        
          <tr>
          <td  style=\" border-style:solid;\"><center> Numero </center></td>
            <td  style=\" border-style:solid;\"><center>1-parcela</center></td>
            <td  style=\" border-style:solid;\"><center>2-parcela</center></td>
            <td  style=\" border-style:solid;\"><center>3-parcela</center></td>
          </tr>
        
          <tr>
          <td  style=\" border-style:solid;\"><center> 8 </center></td>
          <td  style=\" border-style:solid;\"><center>02/fev</center></td>
          <td  style=\" border-style:solid;\"><center>09/mar</center></td>
          <td  style=\" border-style:solid;\"><center>08/abr</center></td>
          </tr>
        </table>";
            break;
    
        //09

        case '9':
            echo"Mes limite para o licenciamento e: Novembro.<br><br>";

            echo"Dia do rodizio SP: Sexta-feira.<br><br>";

            echo"Calendario IPVA: <br><br>
            <table style=\" border-style:solid; padding:5px; marguin:2px;\">
            <tr>
            <th><center>Vencimento</center></th>
          </tr>
        
          <tr>
          <td  style=\" border-style:solid;\"><center> Numero </center></td>
            <td  style=\" border-style:solid;\"><center>1-parcela</center></td>
            <td  style=\" border-style:solid;\"><center>2-parcela</center></td>
            <td  style=\" border-style:solid;\"><center>3-parcela</center></td>
          </tr>
        
          <tr>
          <td  style=\" border-style:solid;\"><center> 9 </center></td>
          <td  style=\" border-style:solid;\"><center>03/fev</center></td>
          <td  style=\" border-style:solid;\"><center>10/mar</center></td>
          <td  style=\" border-style:solid;\"><center>11/abr</center></td>
          </tr>
        </table>";
            break;
    
            default:
               echo"<script>alert('Erro!!!');</script>";
               echo"<center>Erro!!!<br> Verifique o numero da sua placa.</center>";
                break;
}?>
</section>
    <script src="../aula-07/../js/script.js"></script>
</body>
</html>