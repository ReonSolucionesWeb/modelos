<?php


date_default_timezone_set('UTC');

function now($timezone = NULL)
{
	if (is_null($timezone))
	{
		return time();
	}
	else
	{
		$timezone	= new DateTimeZone($timezone);
		$now		= new DateTime('now', $timezone);
		$offset		= $timezone->getOffset($now);
		$time		= time() + $offset;
 
		return $time;
	}
}

$fecha =now('america/bogota');
echo $fecha.'<br>'.date('d/m/Y H;i:s',$fecha);
echo '<br> aclarar q la fecha y hora del cliente no es posible lo ideal seria saber donde se encuentra el cliente, esta funcion lo unico q permite q al ingresar una zona horaia ya sea por registro o lo que sea "America/bogota" etc...   retorna la hora para esa zona';

?>