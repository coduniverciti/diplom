<h2 style="text-align: center;background-color: #0083ca;border-radius: 5px;color: #fff; padding: 5px;">Книги по программированию.</h2>
<?
include 'func.php';
    //Постраничная навигация
    // текущая страница
                          $page = $_GET["page"];
                          if ($page < 1 or $page == "") $page = 1;
                          // количество строк-книг на стр.
                          $limit = 3;
                          // начало выборки из БД
                          $start = getStart($page, $limit);
                          
                          $articles = getAllArticles($start, $limit);
                          for ($i = 0; $i < count($articles); $i++):?>
                          <table>
              							<tr>
              								<td class='img'><img src='images/<?=$articles[$i]['img']?>'></td>
              								<td class='p'><h3><a href="index.php?view=kniga&id=<?=$articles[$i]['id']?>"><?=$articles[$i]['title']?></a></h3>
              								<p style="height: 50px; overflow: hidden;color:#000;"><?=$articles[$i]['textt']?></p></td>
              							</tr>
            							</table>
							<?endfor;?>
<?    echo pagination($page, $limit);
                          

		

                         