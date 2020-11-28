<?php
define('DNS', 'mysql:host=localhost;dbname=the_queen; charset=utf8');
define('USER', 'root');
define('PASS', '');
try
{

$con=new PDO(DNS,USER,PASS);

}

catch(PDOException $e)
{
	exit($e->getMessage());
}
?>