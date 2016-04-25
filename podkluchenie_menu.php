<?
$id=strip_tags($_GET['id']);
                        switch ($id){
                          case 'android':
                                include'programm/android/android.php';break;
                          case 'ci':
                                include'programm/ci/ci.php';break;
                          case 'delphi':
                                include'programm/delphi/delphi.php';break;
                          case 'java':
                                include'programm/java/java.php';break;
                          case 'python':
                                include'programm/python/python.php';break;
                          default:
                                echo "<h2>Страница по умолчанию</h2>";break;

                        }