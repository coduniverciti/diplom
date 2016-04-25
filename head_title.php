<?
$title='Главный';
$id=strip_tags($_GET['id']);
	 switch ($id){
                case 'android':
                         $title='Книги по Android';break;
                case 'ci':
                         $title='Книги по C++';break;
                case 'delphi':
                         $title='Книги по Delphi';break;
                case 'java':
                         $title='Книги по Java';break;
                case 'python':
                         $title='Книги по Python';break;
                }