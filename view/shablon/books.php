<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Главный</title>
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
              <div class="search">
                  <form action="index.php?view=search_to_books" method="POST" class="forma-poiska">
                      <input type="text" name="text" placeholder="Введите название книг" required>
                      <button type="submit" name="word">Поиск</button>
                  </form>
              </div>
              <!--форма поиск-->
              
			  <!--Корзина-->
              <?
              if($_GET['view'] != 'admin'){
					       include($_SERVER[DOCUMENT_ROOT].'/view/stranisy/cars.php');	         
			        } 
        ?>
			  <!--Корзина-->   
          </div>
          <!--Header-->
              <!-- left menu -->
              <!--div class="main">
                <div  class="side">
                    <ul class="menu">
                        <li class="menu__list"><a href="#">Программирование</a>
                            <ul class="menu__drop">
                                <li><a href="index.php?view=android">Android</a></li> 
                                <li><a href="index.php?view=ci">С++</a></li> 
                                <li><a href="index.php?view=delphi">Delphi</a></li> 
                                <li><a href="index.php?view=java">Java</a></li> 
                                <li><a href="index.php?view=python">Python</a></li> 
                            </ul>
                        </li>
                        <li class="menu__list"><a href="#">Веб технологии</a>
                            <ul class="menu__drop">
                                <li><a href="index.php?view=html">HTML</a></li> 
                                <li><a href="index.php?view=javascript">JavaScript</a></li> 
                                <li><a href="index.php?view=jquery">jQuery</a></li> 
                                <li><a href="index.php?view=php">PHP</a></li> 
                                <li><a href="index.php?view=perl">Perl</a></li> 
                            </ul>
                        </li> 
                        <li class="menu__list"><a href="#">Безопасность</a>
                            <ul class="menu__drop">
                                <li><a href="index.php?view=cript">Криптография</a></li> 
                                <li><a href="index.php?view=security">Защита</a></li> 
                                <li><a href="index.php?view=hack">Хакерство</a></li> 
                                <li><a href="index.php?view=infec">Инфекции</a></li> 
                            </ul>
                        </li> 
                        <li class="menu__list"><a href="#">Разработка</a>
                            <ul class="menu__drop">
                                <li><a href="index.php?view=design">Управление</a></li> 
                                <li><a href="index.php?view=menedj">Менеджмент</a></li> 
                                <li><a href="index.php?view=project">Проектирование</a></li> 
                                <li><a href="index.php?view=usability">Usability</a></li> 
                            </ul>
                        </li> 
                        <li class="menu__list"><a href="#">Базы Данных</a>
                            <ul class="menu__drop">
                                <li><a href="index.php?view=all">Общее</a></li> 
                                <li><a href="index.php?view=oracle">Oracle</a></li> 
                                <li><a href="index.php?view=mysql">MySQL</a></li> 
                                <li><a href="index.php?view=mssql">MS SQL</a></li> 
                                <li><a href="index.php?view=prochee">Прочее</a></li> 
                            </ul>
                        </li> 
                        <li class="menu__list"><a href="#">ОС</a>
                            <ul class="menu__drop">
                                <li><a href="index.php?view=unix">Unix</a></li> 
                                <li><a href="index.php?view=linux">Linux</a></li> 
                                <li><a href="index.php?view=freebsd">FreeBSD</a></li> 
                                <li><a href="index.php?view=windows">Windows</a></li> 
                                <li><a href="index.php?view=prochee_one">Прочее</a></li> 
                            </ul>
                        </li>
                         <li class="menu__list"><a href="#">Теория</a>
                            <ul class="menu__drop">
                                <li><a href="index.php?view=all_one">Общее</a></li> 
                                <li><a href="index.php?view=mat">Математика</a></li> 
                                <li><a href="index.php?view=algoritm">Алгоритмы</a></li> 
                                <li><a href="index.php?view=prochee_two">Прочее</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Гостевая книга</a></li>
                    </ul>
                </div>
              </div-->
              <!--Left menu-->  

                <!--Контент-->    
      	          <div class="content">
      	             <?
                         include($_SERVER[DOCUMENT_ROOT].'/view/stranisy/'.$view.'.php');
                     ?>    
                  </div>
                  <!--Контент-->
          <!--Footer-->
          <?
            include($_SERVER[DOCUMENT_ROOT].'/view/stranisy/footer.php');
          ?>
          <!--Footer-->

    </div>
  </body>
</html>