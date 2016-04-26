<?
$id=strip_tags($_GET['id']);
                        switch ($id){
                          /*Начала часть Программирование*/
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
                          /*Начала часть Веб технологии*/
                          case 'html':
                                include'web/html/html.php';break;
                          case 'javascript':
                                include'web/javascript/javascript.php';break;
                          case 'jquery':
                                include'web/jquery/jquery.php';break;
                          case 'php':
                                include'web/php/php.php';break;
                          case 'perl':
                                include'web/perl/perl.php';break;
                          /*Начала часть Безопасность*/
                          case 'cripto':
                                include'security/criptografia/cript.php';break;
                          case 'securite':
                                include'security/security/security.php';break;
                          case 'hack':
                                include'security/hack/hack.php';break;
                          case 'infecfi':
                                include'security/infec/infec.php';break;
                          /*Начала часть Разработка*/
                          case 'desine':
                                include'design/design/design.php';break;
                          case 'menedj':
                                include'design/menedj/menedj.php';break;
                          case 'project':
                                include'design/project/project.php';break;
                          case 'usability':
                                include'design/usability/usability.php';break;
                          /*Начала часть Базы Данных*/
                          case 'all':
                                include'database/all/all.php';break;
                          case 'oracle':
                                include'database/oracle/oracle.php';break;
                          case 'mysql':
                                include'database/mysql/mysql.php';break;
                          case 'mssql':
                                include'database/mssql/mssql.php';break;
                          case 'prochee':
                                include'database/prochee/prochee.php';break;
                          /*Начала часть ОС*/
                          case 'unix':
                                include'os/unix/unix.php';break;
                          case 'linux':
                                include'os/linux/linux.php';break;
                          case 'freebsd':
                                include'os/freebsd/freebsd.php';break;
                          case 'windows':
                                include'os/windows/windows.php';break;
                          case 'prochee_one':
                                include'os/prochee_one/prochee_one.php';break;
                          /*Начала часть Теория*/
                          case 'all_one':
                                include'teoria/all_one/all_one.php';break;
                          case 'mat':
                                include'teoria/mat/mat.php';break;
                          case 'algoritm':
                                include'teoria/algoritm/algoritm.php';break;
                          case 'prochee_two':
                                include'teoria/prochee_two/prochee_two.php';break;
                        }