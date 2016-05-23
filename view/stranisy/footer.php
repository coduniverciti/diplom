<div class="footer">
              <div class="about">
                  <ul>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?view=about">Обратная связь</a><br/><i>&copy;&nbsp;2016 г&nbsp;&nbsp;&nbsp;Книги по программированию.</i>
                  </ul>
                  <?
                  $server_ip=$_SERVER['SERVER_ADDR'];
                  $server_name=$_SERVER['SERVER_NAME'];
                  $server_soft=$_SERVER['SERVER_SOFTWARE'];
                  $server_protokol=$_SERVER['SERVER_PROTOCOL'];
                  $versionphp=phpversion();
                  echo "<p style='color:#fff;'>Информация о сервере:| $server_ip&nbsp;| $server_name&nbsp;| $server_soft&nbsp;| $server_protokol&nbsp; | $versionphp</p>";
                  ?>
              </div>
          </div>