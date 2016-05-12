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
                      <input type="text" name="textt" placeholder="Введите название книг">
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
              <div style="position: relative;width: 200px; height: 500px;float: left;margin: 30px 0 0 40px">
                        <object width="200" height="500">
                          <param name="movie" value="banner">
                          <embed src="logo/banner.swf" width="200" height="500"></embed>
                        </object>
              </div>
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