<?
require_once ('config.php');
function open_db($host, $user, $password, $db){
$link = mysqli_connect($host, $user, $password, $db)
or die("Error " . mysqli_error($link));
return $link;
}
function close_db($link){
mysqli_close($link);
}
