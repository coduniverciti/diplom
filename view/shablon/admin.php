<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Админ</title>
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
      				 include '/view/shablon/logo.php';
      			  ?>
              <!--Логотип-->
			  
              
          </div>
          <!--Header-->
                <!--Контент-->    
      	          <div class="content">
      	             <?
                       include($_SERVER[DOCUMENT_ROOT].'/view/stranisy/admin.php');
                     ?>    
                  </div>
                  <!--Контент-->
          <!--Footer-->
          <?
            include($_SERVER[DOCUMENT_ROOT].'/view/shablon/footer.php');
          ?>
          <!--Footer-->

    </div>
  </body>
</html>