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
                                <li><a href="#">HTML</a></li> 
                                <li><a href="#">JavaScript</a></li> 
                                <li><a href="#">jQuery</a></li> 
                                <li><a href="#">PHP</a></li> 
                                <li><a href="#">Perl</a></li> 
                            </ul>
                        </li> 
                        <li class="menu__list"><a href="#">Безопасность</a>
                            <ul class="menu__drop">
                                <li><a href="#">Криптография</a></li> 
                                <li><a href="#">Защита</a></li> 
                                <li><a href="#">Хакерство</a></li> 
                                <li><a href="#">Инфекции</a></li> 
                            </ul>
                        </li> 
                        <li class="menu__list"><a href="#">Разработка</a>
                            <ul class="menu__drop">
                                <li><a href="#">Управление</a></li> 
                                <li><a href="#">Менеджмент</a></li> 
                                <li><a href="#">Проектирование</a></li> 
                                <li><a href="#">Usability</a></li> 
                            </ul>
                        </li> 
                        <li class="menu__list"><a href="#">Базы Данных</a>
                            <ul class="menu__drop">
                                <li><a href="#">Общее</a></li> 
                                <li><a href="#">Oracle</a></li> 
                                <li><a href="#">MySQL</a></li> 
                                <li><a href="#">MS SQL</a></li> 
                                <li><a href="#">Прочее</a></li> 
                            </ul>
                        </li> 
                        <li class="menu__list"><a href="#">ОС</a>
                            <ul class="menu__drop">
                                <li><a href="#">Unix</a></li> 
                                <li><a href="#">Linux</a></li> 
                                <li><a href="#">FreeBSD</a></li> 
                                <li><a href="#">Windows</a></li> 
                                <li><a href="#">Прочее</a></li> 
                            </ul>
                        </li>
                         <li class="menu__list"><a href="#">Теория</a>
                            <ul class="menu__drop">
                                <li><a href="#">Общее</a></li> 
                                <li><a href="#">Математика</a></li> 
                                <li><a href="#">Алгоритмы</a></li> 
                                <li><a href="#">Прочее</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Гостевая книга</a></li>
                        <li><a href="#">Обратная связь</a></li>
                    </ul>
                </div>
              </div>
              <!--Left menu-->  
                <!--Контент-->    
      	          <div class="content">
      	             <?
                         include 'podkluchenie_menu.php';
                     ?>    
                  </div>
                  <!--Контент-->
                  <!--Построчный навигация-->
                  <div class="p-navigasia">
                      <a href="#">1</a>
                      <a href="#">2</a>
                      <a href="#">3</a>
                      <a href="#">4</a>
                      <a href="#">5</a>
                  </div>
                  <!--Построчный навигация-->
          
          <!--Footer-->
          <div class="footer">
              <div class="about">
                  <ul>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Обратная связь</a><br/>&copy;&nbsp;2016 г&nbsp;&nbsp;&nbsp;<mark>Книги по программированию.</mark>
                  </ul>
              </div>
          </div>
          <!--Footer-->
    </div>
  </body>
</html>