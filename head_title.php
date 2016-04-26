<?
$title='Главный';
$id=strip_tags($_GET['id']);
	 switch ($id){
	 			 /*Начала Title Программирование*/
                case 'android':
                         $title='Android';break;
                case 'ci':
                         $title='C++';break;
                case 'delphi':
                         $title='Delphi';break;
                case 'java':
                         $title='Java';break;
                case 'python':
                         $title='Python';break;
                /*Начала Title Веб технологии*/
                case 'html':
                         $title='HTML';break;
                case 'javascript':
                         $title='JavaScript';break;
                case 'jquery':
                         $title='jQuery';break;
                case 'php':
                         $title='PHP';break;
                case 'perl':
                         $title='Perl';break;
                /*Начала Title Безопасность*/
                case 'cripto':
                         $title='Криптография';break;
                case 'securite':
                         $title='Защита';break;
                case 'hack':
                         $title='Хакерство';break;
                case 'infecfi':
                         $title='Инфекции';break;
                /*Начала часть Разработка*/
                case 'desine':
                         $title='Управления';break;
                case 'menedj':
                         $title='Менеджмент';break;
                case 'project':
                         $title='Проектирование';break;
                case 'usability':
                         $title='Usability';break;
                /*Начала часть Базы Данных*/
                case 'all':
                         $title='Общее';break;
                case 'oracle':
                         $title='Оracle';break;
                case 'mysql':
                         $title='Mysql';break;
                case 'mssql':
                         $title='Mssql';break;
                case 'prochee':
                         $title='Прочее';break;
                /*Начала часть ОС*/
                case 'unix':
                         $title='Unix';break;
                case 'linux':
                         $title='Linux';break;
                case 'freebsd':
                         $title='FreeBSD';break;
                case 'windows':
                         $title='Windows';break;
                case 'prochee_one':
                         $title='Прочее';break;
                /*Начала часть Теория*/
                case 'all_one':
                         $title='Общее';break;
                case 'mat':
                         $title='Математика';break;
                case 'algoritm':
                         $title='Алгоритмы';break;
                case 'prochee_two':
                         $title='Прочее';break;
                }