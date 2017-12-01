
<?php
	session_start();
	
   $time_click = (double)microtime(true);
   array_push($_SESSION['data_click'],$time_click);
   $_SESSION['n_click'] = $_SESSION['n_click']+1;
   $n_click = $_SESSION['n_click'];

?>	
