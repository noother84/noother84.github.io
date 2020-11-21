<?php
require_once('Rcon.php');


$host = '23.105.160.151'; // Server host name or IP
$port = 25575;                      // Port rcon is listening on
$password = 'Twisted.2020'; // rcon.password setting set in server.properties
$timeout = 3;                       // How long to timeout.

use Thedudeguy\Rcon;


$string = file_get_contents("https://whitelist.gorymoon.se/list/L1KONvmjgpXNg2EAzQ98Z/minecraft_whitelist?fbclid=IwAR2azOZrRynwQLrWX-e0YokS-hFmlXOolXcQy81dumYrtqRjo90AzNgDdBE");
$json_a=json_decode($string,true);

foreach ($json_a as $key => $value){
	print $value . '<br />';
}

/*$rcon = new Rcon($host, $port, $password, $timeout);

if ($rcon->connect())
{
  $rcon->sendCommand("say Hello World!");
}*/