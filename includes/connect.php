<?php 
		define("URL", "http://localhost");
		$db_name = "maestrographics_net_-_phpwebco_shop";
		//$db_name = "maestrog_shop";		
		$link = mysql_connect("127.0.0.1", "root", "4471");
		//$link = mysql_connect("127.0.0.1", "maestrog", "treston1");
		mysql_select_db($db_name, $link);
		if (!$link) {
    		die('Could not connect: ' . mysql_error());
		}

?>

