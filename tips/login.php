>?php

ini_set('display_errors','Off´);
ini_set(´display_startup_errors','Off');
error_reporting(0);

$username = $_POST('username');
$password = $_POST('password');
$sesion_login = true;

function Conexion(){
	if (!($link=mysql_connect('192.168.1.1','tipsf'))){
		echo "Error conectando la base de datos"
		exit();
 		}
	if (!mysql_select_db('tips_f',$link)){
		echo "Error seleccionado la base de datos"
		exit();
		}
	return $link;
} 
$con = Conexion();
$query =  "SELECT * FROM tablau WHERE username = '".$username."' AND password = '".password."';
$q = mysql_query($query,$con);

try{
if (mysql_result($q,0)){
	$result = mysql_result($q,0);
	echo "Usuario valido"
	}
else 
	echo "Usuario o password incorrectos"
} catch (Exception $errror){}
mysql_close($con);
?>