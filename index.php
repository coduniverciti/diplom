<?
  include 'head_title.php';
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <title><?=$title?></title>
    <meta charset="UTF-8">
    <!-- Подключаем Стили -->
    <link rel="stylesheet" href="style.css">
    <!-- Подключаем Стили -->
  </head>
  <body>
      <div class="roditel">
      <!--Header-->
          <div class="header">
              <!--Логотип-->
              <?
				        include 'logo/logo.php';
			        ?>
              <!--Логотип-->
			  
              <!--форма поиск-->
              <?
				        include 'search.php';
			       ?>
              <!--форма поиск-->
              
			  <!--Корзина-->
              <?
				          include 'cars.php';
			         ?>
			  <!--Корзина-->   
          </div>
          <!--Header-->
              <!-- left menu -->
              <div class="main">
                <div  class="side">
                    <ul class="menu">
                        <li class="menu__list"><a href="#">Программирование</a>
                            <ul class="menu__drop">
                                <li><a href="index.php?id=android">Android</a></li> 
                                <li><a href="index.php?id=ci">С++</a></li> 
                                <li><a href="index.php?id=delphi">Delphi</a></li> 
                                <li><a href="index.php?id=java">Java</a></li> 
                                <li><a href="index.php?id=python">Python</a></li> 
                            </ul>
                        </li>
                        <li class="menu__list"><a href="#">Веб технологии</a>
                            <ul class="menu__drop">
                                <li><a href="index.php?id=html">HTML</a></li> 
                                <li><a href="index.php?id=javascript">JavaScript</a></li> 
                                <li><a href="index.php?id=jquery">jQuery</a></li> 
                                <li><a href="index.php?id=php">PHP</a></li> 
                                <li><a href="index.php?id=perl">Perl</a></li> 
                            </ul>
                        </li> 
                        <li class="menu__list"><a href="#">Безопасность</a>
                            <ul class="menu__drop">
                                <li><a href="index.php?id=cripto">Криптография</a></li> 
                                <li><a href="index.php?id=securite">Защита</a></li> 
                                <li><a href="index.php?id=hack">Хакерство</a></li> 
                                <li><a href="index.php?id=infecfi">Инфекции</a></li> 
                            </ul>
                        </li> 
                        <li class="menu__list"><a href="#">Разработка</a>
                            <ul class="menu__drop">
                                <li><a href="index.php?id=desine">Управление</a></li> 
                                <li><a href="index.php?id=menedj">Менеджмент</a></li> 
                                <li><a href="index.php?id=project">Проектирование</a></li> 
                                <li><a href="index.php?id=usability">Usability</a></li> 
                            </ul>
                        </li> 
                        <li class="menu__list"><a href="#">Базы Данных</a>
                            <ul class="menu__drop">
                                <li><a href="index.php?id=all">Общее</a></li> 
                                <li><a href="index.php?id=oracle">Oracle</a></li> 
                                <li><a href="index.php?id=mysql">MySQL</a></li> 
                                <li><a href="index.php?id=mssql">MS SQL</a></li> 
                                <li><a href="index.php?id=prochee">Прочее</a></li> 
                            </ul>
                        </li> 
                        <li class="menu__list"><a href="#">ОС</a>
                            <ul class="menu__drop">
                                <li><a href="index.php?id=unix">Unix</a></li> 
                                <li><a href="index.php?id=linux">Linux</a></li> 
                                <li><a href="index.php?id=freebsd">FreeBSD</a></li> 
                                <li><a href="index.php?id=windows">Windows</a></li> 
                                <li><a href="index.php?id=prochee_one">Прочее</a></li> 
                            </ul>
                        </li>
                         <li class="menu__list"><a href="#">Теория</a>
                            <ul class="menu__drop">
                                <li><a href="index.php?id=all_one">Общее</a></li> 
                                <li><a href="index.php?id=mat">Математика</a></li> 
                                <li><a href="index.php?id=algoritm">Алгоритмы</a></li> 
                                <li><a href="index.php?id=prochee_two">Прочее</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Гостевая книга</a></li>
                    </ul>
                </div>
              </div>
              <!--Left menu-->  

                <!--Контент-->    
      	          <div class="content">
      	             <?
                         include 'podkluchenie_menu.php';
                         if($_GET['id']=='about'){
                          include 'about.php';
                         }
                     ?>    
                  </div>
                  <!--Контент-->

                  <!--Построчный навигация-->
                  <?
                    if($_GET['id']=='about'){
                      $display='none';
                    }
                  ?>
                  <div class="p-navigasia"style="display:<?=$display?> ">
                      <a href="#">1</a>
                      <a href="#">2</a>
                      <a href="#">3</a>
                      <a href="#">4</a>
                      <a href="#">5</a>
                  </div>
                  <!--Построчный навигация-->
          
          <!--Footer-->
          <?
            include 'footer.php';
          ?>
          <!--Footer-->

    </div>
  </body>
</html>