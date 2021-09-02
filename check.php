
<?php
session_start();
$uname=$_POST['name'];
$pass=$_POST['pass'];
if($uname=='unpossible' && $pass=='pog')
{
$_SESSION['logged_in']='1';
include('sensitive_data.php');
}
else
{
echo "get out from here";
}
?>
