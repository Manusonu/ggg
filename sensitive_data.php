<?php
if(isset($_SESSION['logged_in']))
{
?>
this page has sensitive data. very important data.

<?php
}
else
{
include('login.php');
}

?>
