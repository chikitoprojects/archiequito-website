<?php


class ChieDBClass
{

	function ChieDBClass($dbname, $host, $user, $pass)
	{	
      mysql_connect($host, $user, $pass) or die('Server connexion not possible.');
      mysql_select_db($dbname)           or die('Database connexion not possible.');
	}
	
	function query($query)
    {
      $this->lastResult = mysql_query($query);
      return $this->lastResult;
    }
	
	
}

?>

